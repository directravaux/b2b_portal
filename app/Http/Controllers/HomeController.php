<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use View;

class HomeController extends Controller
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        parent::__construct();
        $this->viewPath = "home.";
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        return redirect()->route($this->userRole . ".home");
    }

    /**
     * [price description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function price(Request $request)
    {
        return view($this->viewPath . '.price');
    }

    /**
     * [getChangePassword description]
     * @return [type] [description]
     */
    public function getChangePassword()
    {
        View::share("title", "Change Password");
        return View($this->viewPath . 'password');
    }

    /**
     * [postChangePassword description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postChangePassword(Request $request)
    {
        $id = $this->userId;
        $data = $request->all();

        Validator::extend('check_password', function ($attribute, $value, $parameters) {
            $user = User::find(Auth::user()->id);
            $old_password = \Hash::check($value, $user->password);
            if ($old_password == true) {
                return true;
            } else {
                return false;
            }
        });

        $rules = [
            'old_password' => 'required|check_password',
            'password' => 'required|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation' => 'required',
        ];

        $messages = [
            'password.confirmed' => 'password not match',
            'old_password.check_password' => 'The old password field is wrong',
            'password.regex' => 'The password must be alphanumeric with at least 8 characters.',
            'password.min' => 'The password must be alphanumeric with at least 8 characters.',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())
                ->with('message', 'Some thinks is going wrong.')
                ->with('message_type', 'danger');
        }

        $user = User::find($id);
        $user->Password = \hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'Password Change Successfully.')
            ->with('message_type', 'success');
    }

}
