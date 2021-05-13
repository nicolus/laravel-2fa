@extends('layouts.app')

@section('content')
    <div class="card shadow-sm px-3 col-sm-12 col-md-8 col-lg-5 my-5">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}"
                           required autofocus/>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus/>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" id="password" type="password" name="password" required/>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password</label>
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required/>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <button class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

