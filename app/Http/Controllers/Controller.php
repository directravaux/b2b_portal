<?php

namespace App\Http\Controllers;

use App\Utility\DatabaseUtility;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $ajax;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $this->user = Auth::user();
                $this->userName = Auth::user()->user_name;
                $this->storeName = Auth::user()->store_name;
                $this->userRole = Auth::user()->user_role;
                $this->userId = Auth::user()->id;

                $userPhoto = asset('images/usr_avatar.png');
                if (Auth::user()->user_photo != "") {
                    $userPhoto = asset("user_photo") . "/" . Auth::user()->user_photo;
                }

                $bannerPhoto = asset('images/cvrplc.jpg');
                if (Auth::user()->banner_photo != "") {
                    $bannerPhoto = asset("banner_photo") . "/" . Auth::user()->banner_photo;
                }

                View::share('userName', $this->userName);
                View::share('userId', $this->userId);
                View::share('user', $this->user);
                View::share('storeName', $this->storeName);
                View::share('userRole', $this->userRole);
                View::share('userPhoto', $userPhoto);
                View::share('bannerPhoto', $bannerPhoto);
                View::share("countries", DatabaseUtility::getCountryList());
                View::share("months", DatabaseUtility::getMonths());
                View::share("years", DatabaseUtility::getYears());
            }
            return $next($request);
        });
    }
}
