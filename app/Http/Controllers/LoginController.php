<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    // Xử lý đăng nhập
    public function checkLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Kiểm tra nếu người dùng tồn tại
        $user = Person::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Mật khẩu đúng, đăng nhập thành công
            Auth::guard('web')->login($user);
            return response()->json(['status' => 'success']);
        } else {
            // Mật khẩu không đúng
            return response()->json(['status' => 'error', 'message' => 'Thông tin đăng nhập không đúng']);
        }
    }
}


