@extends('layouts.app')
@section('content')
    <h1>Hello</h1>

    <form action="_file-upload.php" enctype="multipart/form-data" method="post">
        <input type="file" name="file" id=""> <br>
        <button type="submit">Upload</button>
    </form>

@endsection