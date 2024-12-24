<?php

namespace App\actions;

use App\Models\User;

class Users
{
    public static function index()
    {
        return User::all();
    }

    public static function create($params)
    {
        $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);

        return User::create($params);
    }

    public static function update($id, $params)
    {
        $user = User::findOrFail($id);

        $params = array_intersect_key($params, array_flip(['email', 'first_name', 'last_name', 'password']));

        if (isset($params['password'])) {
            $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);
        }

        $user->update($params);

        return $user;
    }

    public static function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return false;
        }

        $user->delete();

        return true;
    }
}
