<?php

namespace App\Http\Controllers;

use App\Models\uploadedFilen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UploadedFilenController extends Controller
{
    public function index()
    {
        $uploadedFiles = uploadedFilen::all();
        return view('uploads.index', ['uploadedFiles' => $uploadedFiles]);
    }
    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
        //validate incoming files. Refuse anything bigger than 3MB
        $request->validate([
            'file_upload' => 'required|mimes:pdf,docx,doc|max:3072'
        ]);
        //store the file in the folder storage/app/public

        $file = request()->file('file_upload'); //request the file and save it in a variable $file
        $fileName = $file->getClientOriginalName(); //get the original name of the file
        $filePath = $file->store('uploads', 'public'); //store the file in the folder uploads in the public folder from the client

        //store the file in the database
        $uploadedFile = new uploadedFilen();

        $uploadedFile->filename = $fileName;
        $uploadedFile->original_name = $file->getClientOriginalName();
        $uploadedFile->file_path = $filePath;

        //save the file
        $uploadedFile->save();

        //redirect to all files page
        return redirect()->route('uploads.index')->with('mesg', 'File uploaded successfully');
    }
    //download
    public function download($id)
    {
        $file = uploadedFilen::find($id);
        return response()->download(storage_path("app/public/$file->file_path"));
    }
}
