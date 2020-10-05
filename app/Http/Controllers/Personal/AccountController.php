<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AccountController extends Controller
{
    public function index()
    {
        return view('personal.account');
    }

    public function editProfile(ProfileRequest $request, User $user)
    {
        $params = $request->all();
        $user->update($params);
        return redirect()->route('account');
    }

    public function editPassword(PasswordRequest $request, User $user)
    {
        $params = $request->all();
        $params['password'] = Hash::make($params['password']);
        $user->update($params);
        return redirect()->route('account');
    }

}
