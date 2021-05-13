@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2 class="mb-4">You're connected, welcome !</h2>
        @if(session('status') == 'two-factor-authentication-enabled')
            <div class="mb-4">
                Two factor authentication has been enabled.
            </div>
            <div class="mb-4">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
        @endif

        @if(auth()->user()->two_factor_secret)
            <form class="d-inline" action="/user/two-factor-authentication" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Disable 2FA</button>
            </form>
        @else
            <form class="d-inline" action="/user/two-factor-authentication" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Enable 2FA</button>
            </form>
        @endif
        <form class="d-inline" action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Log out</button>
        </form>
    </div>
@endsection
