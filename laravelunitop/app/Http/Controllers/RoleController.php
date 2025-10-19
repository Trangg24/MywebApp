<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    function show(){
        $users = Role::find(1)
        ->users;

        return $users;
    }
}
