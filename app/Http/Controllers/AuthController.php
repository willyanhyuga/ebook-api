<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119194',
            'Nama' => 'Willyan Hyuga',
            'Gender' => 'Pria',
            'Phone' => '081390814398',
            'Class' => 'XII RPL 6'
        ]);
 }
}
