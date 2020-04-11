<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Mail;
use Validator;
use View;

class VendorController extends Controller
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        parent::__construct();
        $this->viewPath = "vendor.";
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        if (!$this->user->active) {
            return redirect()->route("vendor.plan");
        }

        if (!$this->user->verified) {
            return redirect()->route("vendor.verify");
        }

        View::share("title", "Settings");
        return view($this->viewPath . 'index');
    }

    /**
     * [verify description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function verify(Request $request)
    {
        $verifyToken = $this->user->verify_token;
        return view($this->viewPath . 'verify', compact('verifyToken'));
    }

    /**
     * [verifyPost description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function verifyPost(Request $request)
    {
        if ($this->userRole == "vendor" && !$this->user->verified) {
            $data = $this->user->toArray();
            Mail::send('mail.verify', ['user' => $data], function ($m) use ($data) {
                $m->from(Config("mail.from.address"), Config("mail.from.name"));
                $m->to($data['email']);
                $m->subject("Verify Email!");
            });
        }

        return redirect()->back()->with('message', 'Resend Verification Mail Send Successfully.')
            ->with('message_type', 'success');
    }

    /**
     * [plan description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function plan(Request $request)
    {
        return view($this->viewPath . 'price');
    }

    /**
     * [pricePost description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function pricePost(Request $request)
    {
        return view($this->viewPath . 'checkout');
    }

    /**
     * [checkoutPost description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function checkoutPost(Request $request)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'max:255'],
            'street_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ];

        $messages = [

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()
                ->withErrors($validator)
                ->with('message_type', 'danger')
                ->with('message', 'There were some error try again');
        }

        $user = User::find($this->userId);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->street_number = $request->street_number;
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;
        $user->active = 1;
        $user->save();

        return redirect()->route("vendor.home");
    }

    /**
     * [profile description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profile(Request $request)
    {
        $data = $request->all();

        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'street_number' => ['required', 'string', 'max:255'],
            'street_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'shipping_street_number' => ['required', 'string', 'max:255'],
            'shipping_street_name' => ['required', 'string', 'max:255'],
            'shipping_city' => ['required', 'string', 'max:255'],
            'shipping_zipcode' => ['required', 'string', 'max:255'],
            'shipping_country' => ['required', 'string', 'max:255'],
            'user_photo' => ['mimes:jpeg,jpg,png', 'max:4096'],
            'payment_option' => ['required', 'string', 'max:255'],
        ];

        if (isset($data['payment_option']) && $data['payment_option'] == "card") {
            $rules["card_number"] = ['required', 'string', 'max:255'];
            $rules["card_exp_month"] = ['required', 'string', 'max:255'];
            $rules["card_exp_year"] = ['required', 'string', 'max:255'];
            $rules["card_cvv_code"] = ['required', 'string', 'max:255'];
        }

        if (isset($data['payment_option']) && $data['payment_option'] == "bank") {
            $rules["bank_name"] = ['required', 'string', 'max:255'];
            $rules["bank_accont_no"] = ['required', 'string', 'max:255'];
            $rules["bank_ifsc_no"] = ['required', 'string', 'max:255'];
        }

        $messages = [

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()
                ->withErrors($validator)
                ->with('message_type', 'danger')
                ->with('message', 'There were some error try again');
        }

        $userPhoto = $bannerPhoto = null;
        $user = User::find($this->userId);
        $userPhoto = $user->user_photo;
        $bannerPhoto = $user->banner_photo;

        if ($request->file('user_photo')) {
            $userPhoto = sha1(microtime()) . '.' . $request->file('user_photo')->getClientOriginalExtension();
            $request->file('user_photo')->move(public_path('user_photo'), $userPhoto);
        }

        if ($request->file('banner_photo')) {
            $bannerPhoto = sha1(microtime()) . '.' . $request->file('banner_photo')->getClientOriginalExtension();
            $request->file('banner_photo')->move(public_path('banner_photo'), $bannerPhoto);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->street_number = $request->street_number;
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;
        $user->shipping_street_number = $request->shipping_street_number;
        $user->shipping_street_name = $request->shipping_street_name;
        $user->shipping_city = $request->shipping_city;
        $user->shipping_zipcode = $request->shipping_zipcode;
        $user->shipping_country = $request->shipping_country;
        $user->payment_option = $request->payment_option;

        if (isset($userPhoto)) {
            $user->user_photo = $userPhoto;
        }

        if (isset($bannerPhoto)) {
            $user->banner_photo = $bannerPhoto;
        }

        $user->bank_name = null;
        $user->bank_accont_no = null;
        $user->bank_ifsc_no = null;
        $user->card_number = null;
        $user->card_exp_month = null;
        $user->card_exp_year = null;
        $user->card_cvv_code = null;

        if (isset($data['payment_option']) && $data['payment_option'] == "card") {
            $user->card_number = $request->card_number;
            $user->card_exp_month = $request->card_exp_month;
            $user->card_exp_year = $request->card_exp_year;
            $user->card_cvv_code = $request->card_cvv_code;
        }

        if (isset($data['payment_option']) && $data['payment_option'] == "bank") {
            $user->bank_name = $request->bank_name;
            $user->bank_accont_no = $request->bank_accont_no;
            $user->bank_ifsc_no = $request->bank_ifsc_no;
        }

        $user->save();

        return back()->with('message_type', 'success')
            ->with('message', 'Profile update Successfully');
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        View::share("title", "I dont know how put storename");
        return view($this->viewPath . 'store');
    }
}
