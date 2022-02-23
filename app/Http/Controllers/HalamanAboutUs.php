<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAboutUs extends Controller
{
    public function aboutus(){
        return redirect('https://www.educastudio.com/about-us');
    }
}
