<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $today = Carbon::today();

        $trains = Train::where('data_di_partenza', '=', $today->toDateTimeString())->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
