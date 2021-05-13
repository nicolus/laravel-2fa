@extends('layouts.app')

@section('content')
    <div class="card shadow-sm px-3 col-sm-12 col-md-8 col-lg-5 my-5">
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">2FA Authentication code</label>
                    <input class="form-control" id="email" type="text" name="code" required autofocus/>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <p class="text-center">
        <a href="{{route('register')}}">Register</a>
    </p>
@endsection
