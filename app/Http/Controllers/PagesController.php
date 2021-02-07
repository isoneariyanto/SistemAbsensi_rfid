<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Censor;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
// use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {	
        $pu  =  Employee::all();
        $puCount = $pu->count();

        $pat  =  Patient::all();
        $patCount = $pat->count();
        
        $heartbeat = Censor::select('id','heartbeat','created_at')->get();
        $temperature = Censor::select('id','temperature','created_at')->get();
        $censor = Censor::all()->count();
        
        return view('index', compact('pu','puCount','patCount','pat','heartbeat','temperature','censor'));
    }
}