<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Requests\users\EditusersRequest;
use App\Http\Requests\Users\UsersRequest;
use App\Orders\Orders;
use App\Users\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function edit_user(EditUsersRequest $request)
    {
        $edit_users = Users::find(Auth::id());
        $edit_users->name = $request->name;
        $edit_users->surname = $request->surname;
        $edit_users->series = $request->series;
        $edit_users->fin = $request->fin;
        $edit_users->number = $request->number;
        $edit_users->city = $request->city;
        $edit_users->address = $request->address;
        if ($request->password != ''){
            $edit_users->password = Hash::make($request->password);
        }
        $edit_users->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_user(UsersRequest $request)
    {
        $add_users = new Users();
        $add_users->name = $request->name;
        $add_users->surname = $request->surname;
        $add_users->email = $request->email;
        $add_users->series = $request->series;
        $add_users->number = $request->number;
        $add_users->fin = $request->fin;
        $add_users->phone = $request->phone;
        $add_users->city = $request->city;
        $add_users->address = $request->address;
        $add_users->password = Hash::make($request->password);

        do
        {
            $code = 'MG'.rand(100000, 999999);
            $user_code = Users::where('user_code', $code)->get();
        }
        while(!$user_code->isEmpty());
        $add_users->user_code = $code;

        $add_users->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_order(OrderRequest $request)
    {
        $add_order = new Orders();
        $add_order->storage = $request->storage;
        $add_order->website = $request->website;
        $add_order->track = $request->track;
        $add_order->category = $request->category;
        $add_order->count = $request->count;
        $add_order->price = $request->price;
        $add_order->currency = $request->currency;
        $add_order->information = $request->information;
        $add_order->user_id = Auth::id();
        if ($request->hasfile('invoice')){
            $file = $request->file('invoice');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/files/', $filename);
            $add_order->invoice = $filename;
        }
        $add_order->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
