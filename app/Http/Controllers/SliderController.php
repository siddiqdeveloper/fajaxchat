<?php
namespace App;
namespace App\Http\Controllers;
use Illuminate\Http\Request;




class SliderController extends Controller
{

    public function index()
    {

       // return 'checking';
    	$sliders =  [];
        $sliders2 = [];
    	return view('welcome', compact("sliders","sliders2"));
    }


}/* end of controller */
