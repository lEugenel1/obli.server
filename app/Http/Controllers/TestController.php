<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class TestController extends Controller
{
    public function storeCreaditLineAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/creaditLineAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                dd($response['data']['response'][$i]);
            }
//            foreach ($response['data']['response'] as $key=>$value){
//                dd($key,$value);
//            }
//            dd($response['data']['response']);
        }
        dd(123);
    }

    public function storeCustomerRelationAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/customerRelationAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                dd($response['data']['response'][$i]);
            }
        }
    }

    public function storeContractMainAll()
    {
        $response = Http::post(env('API_URL').'bankIsrael/contractMainAll');
        if($response->json()['data']['Count of created records']!=0){
            for($i=0;$i<$response->json()['data']['Count of created records'];$i++){
                dd($response['data']['response'][$i]);
            }
        }
    }
}
