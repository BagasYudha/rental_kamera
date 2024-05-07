<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ResetPasswordMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ForgotPassword extends Controller
{
    function index(Request $request)
    {
        try {
            $admin = Admin::where("email", $request["email"])->first();

            if (empty($admin)) :
                return redirect()->back()->with('message', 'Email yang anda masukkan tidak terdaftar');
            endif;

            $admin->update([
                "token"         => Str::random(32),
            ]);

            $token = $admin->token;
            Mail::to($request["email"])
                ->send(new ResetPasswordMail($token, $admin->username));

            $request->session()->flash('message', 'silahkan cek email untuk melanjutkan ke tautan reset password');
            return redirect()->to(route('auth.forgot-password'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function resetPassword(Request $request)
    {
        $token = $request->input('token');
        $admin = Admin::where('token', $token)->get()->first();
        if (!$admin) {
            return 'invalid link';
        }
        return view('auth.reset-password', compact('admin'));
    }

    function resetPassworProcess(ResetPasswordRequest $request)
    {
        $token = $request->input('admin-token');
        $admin = Admin::where('token', $token)->first();

        if (!$admin) {
            return 'invalid link';
        }

        if ($request->input('new-password') !== $request->input('new-password-confirm')) {
            return redirect()->back()->with('error', 'Konfirmasi password baru tidak cocok');
        }

        $admin->password = Hash::make($request->input('new-password'));
        $admin->token = null;
        $admin->save();
        return redirect()->to(route('admin.loginview'))->with('success', 'Silahkan login menggunakan password baru');
    }
}
