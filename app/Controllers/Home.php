<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $inputan = [];
    }
    public function index()
    {
        return view('sorting');
    }
    public function submitinputan($data)
    {
        if ($data == 1) {
            return view('inputangka');
        } elseif ($data == 2) {
            return view('sorting');
        } elseif ($data == 3) {
            return view('searching');
        }
    }
    public function getInput($data)
    {
        foreach ($data as $d) {
            $inputan = array('' => $d,);
        }
        return $inputan;
    }
}
