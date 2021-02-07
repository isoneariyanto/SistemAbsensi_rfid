<?php

namespace App\Http\Controllers;
use App\Models\Censor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class CensorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function heartbeat(Request $request)
    {   
        if($request->has('search')){
            $list=10;
            $heartbeat  =  Censor::select('id','heartbeat','heartbeat_status','created_at')
                    ->where('id', 'like', '%'.$request->search.'%')
                    ->orWhere('heartbeat', 'like', '%'.$request->search.'%')
                    ->orWhere('heartbeat_status', 'like', '%'.$request->search.'%')
                    ->orWhere('created_at', 'like', '%'.$request->search.'%')
                    ->paginate($list)->withPath('?search='.$request->search);
            if($heartbeat){
                return view('censor.heartbeat', compact('heartbeat'));
            }
        }
        if ($request->missing('search')) {
            $list = 10;
            $heartbeat = Censor::select('id','heartbeat','heartbeat_status','created_at')->paginate($list);
            return view('censor.heartbeat', compact('heartbeat'));
        }
    }

    public function temperature(Request $request)
    {
        if($request->has('search')){
            $list=10;
            $temperature  =  Censor::select('id','temperature','temperature_status','created_at')
                    ->where('id', 'like', '%'.$request->search.'%')
                    ->orWhere('temperature', 'like', '%'.$request->search.'%')
                    ->orWhere('temperature_status', 'like', '%'.$request->search.'%')
                    ->orWhere('created_at', 'like', '%'.$request->search.'%')
                    ->paginate($list)->withPath('?search='.$request->search);
            if($temperature){
                return view('censor.temperature', compact('temperature'));
            }
        }
        if ($request->missing('search')) {
            $list = 10;
            $temperature = Censor::select('id','temperature','temperature_status','created_at')->paginate($list);
            return view('censor.temperature', compact('temperature'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Censor  $censor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Censor $censor)
    {
        //
    }
}
