<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        $data['title'] = 'Data Profile';

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query   = $builder->get();


        return view('landingpage', $data);
    }
}
