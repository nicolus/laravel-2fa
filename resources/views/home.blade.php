@extends('layouts.app')

@section('content')
    <div class="text-center col-10 col-md-8 col-lg-6 my-5">
        <h2 class="mb-4">You're connected, welcome !</h2>
        @if(auth()->user()->two_factor_confirmed)
            <form class="d-inline" action="/user/two-factor-authentication" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Disable 2FA</button>
            </form>
        @elseif(auth()->user()->two_factor_secret)
            <p>
                In order to validate Two Factor Authentication, please scan this QR code with Google Authenticator or Duo and enter the validation code below :
            </p>
            <div class="mb-4">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
        <div class="row justify-content-center">
            <form action="{{route('two-factor.confirm')}}" method="post">
                @csrf
                <label for="code" class="form-label">Code</label>
                <div class="input-group mb-3">
                    <input class="form-control" id="code" type="text" name="code" required/>
                <button class="btn btn-primary" type="submit">Validate 2FA</button>
                </div>
            </form>
        </div>
        @else
            <form class="d-inline" action="/user/two-factor-authentication" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Activate 2FA</button>
            </form>
        @endif
        <form class="d-inline" action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Log out</button>
        </form>
    </div>
@endsection
