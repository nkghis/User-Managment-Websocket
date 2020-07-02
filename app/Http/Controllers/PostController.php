<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PostEvent;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $event = new PostEvent($user);
        event($event);
        //dd();
    }
}
