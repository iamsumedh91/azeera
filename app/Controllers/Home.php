<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        if (!auth()->loggedIn()) {
            return redirect()->route('login')->withInput()->with('error', "Please login first");
        }else{
            $users = auth()->getProvider();

            $user = $users->findById(session()->get('user')['id']);

            $data['user']['name'] = $user->username;

            return view('dashboard', $data);
        }
    }
    
    public function signup(): string
    {
        return view('signup');
    }
}
