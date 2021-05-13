@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2 class="mb-4">You're connected, welcome !</h2>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Log out</button>
        </form>
    </div>
@endsection
