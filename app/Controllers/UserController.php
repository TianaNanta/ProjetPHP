<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home', $data);
    }

    public function profile()
    {
        $data['pageTitle'] = 'Profil';
        return view('dashboard/profile', $data);
    }

    public function tables()
    {
        $data['pageTitle'] = 'Tables';
        return view('dashboard/tables', $data);
    }

    public function contacts()
    {
        $data['pageTitle'] = 'Contact';
        return view('dashboard/contacts', $data);
    }
}
