<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EloquentVueTables;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$u = User::query();
    	$t = new EloquentVueTables();
    	return $t->get($u, ['name', 'email']);
    }
}
