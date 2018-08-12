<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 8/5/2018
 * Time: 00:33
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends BaseController
{
    public function getLogin()
    {
        return view('login/login');
    }

    public function postLogin(Request $request) {
        $rules = [
            'username' =>'required|max:25',
            'password' => 'required|min:8'
        ];
        $messages = [
            'username.required' => 'Username là trường bắt buộc',
            'password.max' => 'Username không được quá 25 ký tự',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $username = $request->input('username');
            $password = md5($request->input('password'));
            $arr = array(
                'username' => $username,
                'password' => $password,
            );

            if(DB::table('USER')->where($arr)->count()==1) {
                session(['username' => $username]);
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Username hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->intended('/');
    }

    public function userinfo()
    {
        if(strlen(session('username')) != 0)
        {
            $this->data['flg_login'] = 1;
            $avatar = DB::table('USER')->select('IMAGE')->where('USERNAME','=', session('username'))->get();
            $this->data['avatar'] = $avatar[0]->IMAGE;
        }
        else
        {
            $this->data['flg_login'] = 0;
        }
        return view("login/user_info", $this->data);
    }

}