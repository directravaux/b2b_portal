<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Validator;
use View;

class ClientController extends Controller
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        parent::__construct();
        $this->viewPath = "client.";
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        View::share("title", "Client Info");
        return view($this->viewPath . 'index');
    }

    /**
     * [profile description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profile(Request $request)
    {
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

        $userPhoto = null;
        $user = User::find($this->userId);
        $userPhoto = $user->user_photo;

        if ($request->file('user_photo')) {
            $userPhoto = sha1(microtime()) . '.' . $request->file('user_photo')->getClientOriginalExtension();
            $request->file('user_photo')->move(public_path('user_photo'), $userPhoto);
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

        if (isset($userPhoto)) {
            $user->user_photo = $userPhoto;
        }

        $user->save();

        return back()->with('message_type', 'success')
            ->with('message', 'Profile update Successfully');
    }

    /**
     * [price description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function price(Request $request)
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
            'store_name' => ['required', 'string', 'max:255', 'unique:users'],
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
        $user->store_name = $request->store_name;
        $user->street_number = $request->street_number;
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;
        $user->active = 1;
        $user->verify_token = Str::random(40);
        $user->user_role = "vendor";
        $user->save();

        $user = User::find($this->userId)->toArray();
        Mail::send('mail.verify', ['user' => $user], function ($m) use ($user) {
            $m->from(Config("mail.from.address"), Config("mail.from.name"));
            $m->to($user['email']);
            $m->subject("Verify Email!");
        });

        return redirect()->route("vendor.home");
    }

    /**
     * [checkStoreName description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function checkStoreName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_name' => 'required|unique:users',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'msg' => 'Sorry! This store name Not Available',
            ];
        } else {
            $response = [
                'success' => true,
                'msg' => 'Congratulation! This store name Available',
            ];
        }
        return response()->json($response, 200);

    }
}
