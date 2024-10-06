<?php

namespace App\Http\Controllers;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){

        $plans = Plans::all();

        return view('subscription.plan', [
            'plan' => $plans,
        ]);
    }
}
