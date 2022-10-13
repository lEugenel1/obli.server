<?php

namespace App\Http\Controllers;

use App\Models\ContractCreditLine;
use App\Models\ContractMainAll;
use App\Models\ContractRelationAll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function storeCreaditLineAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/creaditLineAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                ContractCreditLine::create($response['data']['response'][$i]);
            }
            return response()->json("Success");
        }
        return response()->json("No records");
    }

    public function storeCustomerRelationAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/customerRelationAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                ContractRelationAll::create($response['data']['response'][$i]);
            }
            return response()->json("Success");
        }
        return response()->json("No records");
    }

    public function storeContractMainAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/contractMainAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                ContractMainAll::create($response['data']['response'][$i]);
            }
            return response()->json("Success");
        }
        return response()->json("No records");
    }

    public function testConnection()
    {
//        echo phpinfo();
        dd(ContractCreditLine::all());
//        try {
//            DB::connection()->getPdo();
//        } catch (\Exception $e) {
//            die("Could not connect to the database.  Please check your configuration. error:" . $e );
//        }
    }
}
