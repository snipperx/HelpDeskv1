<?php

namespace App\Http\Controllers;
use App\HRPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $people = HRPeople::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->first();
      //  return $people;
        $data['people'] = $people;
        return view('settings.profile')->with($data);
    }
}
