<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        return view('dashboard');
    }

    /**
     * [verifyUser description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function verifyUser($token)
    {
        $user = User::where('verify_token', $token)->first();
        if (isset($user) && !$user->verified) {
            $user->verified = 1;
            $user->verify_token = null;
            $user->save();
        }
        return redirect(route('login'));
    }
}
