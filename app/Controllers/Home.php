<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function verif()
    {
        return view('verif');
    }
    public function nopol($id)
    {
        helper(['mongo']);
        $cookie = file_get_contents(WRITEPATH.'cache/coki.txt');
        $sesi = file_get_contents(WRITEPATH.'cache/sesi.txt');
        $post = file_get_contents(WRITEPATH.'cache/post.txt');

        echo pertama();
        // echo formCari($sesi, $post, $cookie,$id);
    }
}
