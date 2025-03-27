<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    // Hiển thị form nhập email
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Gửi email đặt lại mật khẩu
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        // Gửi email khôi phục mật khẩu
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', 'Đã gửi email khôi phục mật khẩu!')
            : back()->withErrors(['email' => 'Không thể gửi email đặt lại mật khẩu.']);
    }

    // Hiển thị form đặt lại mật khẩu mới
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Xử lý đặt lại mật khẩu mới
    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)->firstOrFail();

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('status', 'Mật khẩu đã được đặt lại thành công!');
    }
}
