<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanNews extends Controller
{
    public function news(){
        return redirect('https://www.educastudio.com/news');
    }
    public function newstitle(){
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19' . $title);
    }
}