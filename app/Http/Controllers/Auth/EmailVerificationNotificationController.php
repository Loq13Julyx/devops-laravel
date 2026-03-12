<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $this->redirectByRole($request->user());
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }

    private function redirectByRole($user): RedirectResponse
    {
        return match ($user->role) {
            'admin'  => redirect()->route('admin.dashboard'),
            'kasir'  => redirect()->route('kasir.dashboard'),
            'staff'  => redirect()->route('staff.dashboard'),
            default  => redirect()->route('home'),
        };
    }
}