<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Censor;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class ArduinoController extends Controller
{

    public function upload(){
        // $token = csrf_token();
        $id = request('id');
        $suhu = request('suhu');
        $nadi = request('nadi');
        $suhu_status = "";
        $nadi_status = "";
        if($suhu > 37){
            $suhu_status = "High";
        }
        elseif ($suhu >= 35 && $suhu <= 37){
            $suhu_status = "Normal";
        }
        elseif ($suhu < 35){
            $suhu_status = "Low";
        }
        if($nadi > 100){
            $nadi_status = "High";
        }
        elseif ($nadi >= 60 && $nadi <= 100) {
            $nadi_status = "Normal";
        }
        elseif ($nadi < 60){
            $nadi_status = "Low";
        }
        // $query = DB::table('censors')->insert(
        //     ['id' => $id, 'temperature' => $suhu, 'heartbeat' => $nadi, 'waktu' => null]
        // );
        $query = Censor::create([
            'id_patient' => $id,
            'temperature' => $suhu,
            'temperature_status' => $suhu_status,
            'heartbeat' => $nadi,
            'heartbeat_status' => $nadi_status
        ]);
        if($query){
            echo json_encode(array(
                'status'=>'ok'
            ));
        }
        // echo json_encode(array(
        //     'nadi' => $nadi,
        //     'status_nadi' => $nadi_status,
        //     'suhu' => $suhu,
        //     'suhu_status' => $suhu_status
        // ));
        
    }
}
