<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidationLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Представление шаблона авторизации
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Фактическая авторизация пользователя из POST запроса
     * @param RequestValidationLogin $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function  loginPost(RequestValidationLogin $request)
    {
        if (Auth::attempt($request->validated())){
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }
        return back()->with(['errorSuccess' => 'Не верный логин или пароль !']);
    }


    public function register()
    {
        return view('register');
    }

    public function registerPost(RequestValidationRegister $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return back()->with(['success' => true]);

    }

}
