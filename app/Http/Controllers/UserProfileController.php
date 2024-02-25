<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function user($id, $name) {
        return view('user.user')
            ->with('id', $id)
            ->with('name', $name);
    }
}
