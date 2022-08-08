<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        // Mapper::map(-6.782482, 39.263381);
        // Mapper::map(-6.782482, 39.263381, ['zoom' => 18]);
        return view('about-us');
    }

    public function businessMapping(){
        return view('mapping');
    }
}
