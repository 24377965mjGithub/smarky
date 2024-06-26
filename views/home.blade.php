@extends('layouts.app')
@section('content')
    <h1>Hello</h1>

    @forelse ($users as $user)
        <div>
            <b>{{ $user['name'] }}</b> <br>
            {{ $user['email'] }}
        </div>
    @empty
        <p>No Users</p>
    @endforelse

    <a href="about.php">About</a>
@endsection