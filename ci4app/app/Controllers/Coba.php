<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini controller Coba method index";
    }

    public function about($nama = '', $umur = 0)
    {
        echo "Hay my name is $nama, usia saya adalah $umur tahun";
    }

    // public function about($nama = '', $umur = 0)
    // {
    // echo "Hay, my name is $nama, usia saya $umur tahun";
    // }
    //--------------------------------------------------------------------

}
