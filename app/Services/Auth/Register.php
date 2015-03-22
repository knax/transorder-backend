<?php

namespace Transorder\Services\Auth;

class Register
{
    public function create($userData)
    {
        $photo = $userData->file('photo');
        $filename = $userData->username . '.' . $photo->guessExtension();
        $photo->move(public_path('images/user_photo/'), $filename);

        $user = new User();
        $user->username = $userData->username;
        $user->password = \Hash::make($userData->password);
        $user->type = 'user';
        $user->save();

        $detail = new UserDetail();
        $detail->name = $userData->name;
        $detail->address = $userData->address;
        $detail->phone_number = $userData->phone_number;
        $detail->email = $userData->email;
        $detail->photo = $filename;
        $user->detail()->save($detail);

        return $user;
    }
}