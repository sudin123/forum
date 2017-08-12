<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function backend()
    {
        $users = $this->user->count();
        $data = [
            'users' => $users,
        ];
        // dd($users);
        return view('backend.dashboard');
    }
}
