<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Front pages'
        ];
        return view('/pages/home', $data);
    }
}
