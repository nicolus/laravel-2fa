<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\TwoFactorAuthenticationProvider;

class TwoFactorAuthController extends Controller
{
    public function confirm(Request $request)
    {
        $confirmed = $request->user()->confirmTwoFactorAuth($request->code);

        if (!$confirmed) {
            return back()->withErrors('Invalid Two Factor Authentication code');
        }

        return back();
    }
}
