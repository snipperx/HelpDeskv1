<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ThemeSettings;

class CompanySettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {


        return view('settings.company_config');
    }
}
