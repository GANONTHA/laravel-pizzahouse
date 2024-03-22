@extends('layouts.app')

@section('content')
    <h1>Uploaded files</h1>

<table>
    <tr>
        <th>Filename</th>
        <th>Uploaded at</th>
        <th>Download</th>
    </tr>
    @forelse($uploadedFiles as $uploadedFile)
        <tr>
            <td>
                {{ $uploadedFile->original_name }}
            </td>
            <td>
                {{ $uploadedFile->created_at }}
            </td>
            <td>
                <a href="{{route('uploads.download',$uploadedFile->id)}}" class="btn btn-primary" >
                    download
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td>No uploads found</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('uploads.create') }}">
    Upload a file
</a>

<p>
    {{
        session('mesg')
    }}
</p>
@endsection