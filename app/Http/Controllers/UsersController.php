<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller 
{
    public function showSql() 
    {
        User::whereId(1)->showSql()->get();
    }
}
