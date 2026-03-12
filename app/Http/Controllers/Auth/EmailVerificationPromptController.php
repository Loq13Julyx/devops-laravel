<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    public function __invoke(Request $request): RedirectResponse|View
    {
        if (! $request->user()->hasVerifiedEmail()) {
            return view('auth.verify-email');
        }

        return $this->redirectByRole($request->user());
    }

    private function redirectByRole($user): RedirectResponse
    {
        return match ($user->role) {
            'admin'  => redirect()->route('admin.dashboard'),
            'kasir'  => redirect()->route('kasir.dashboard'),
            'staff'  => redirect()->route('staff.dashboard'),
            default  => redirect()->route('home'), // customer
        };
    }
}