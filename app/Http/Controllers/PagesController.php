<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
        $people = [];

        return view( 'pages.about' )->with( compact('people') );
    }

    public function contact()
    {
        $first = "Andrea";
        $last  = "Fuggetta";

        return view( 'pages.contact' )->with( compact( 'first', 'last' ) );
    }

}
