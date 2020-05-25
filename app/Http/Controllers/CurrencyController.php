<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    
    
    public function index(Request $request){

        $API = '008f8e87b3aaec1ac47b0dfd17ef36c0';

        $from = $request->from;
        $to = $request->to;
        $amount = $request->amount;

        $curl = file_get_contents("http://data.fixer.io/api/latest?access_key=$API&symbols=$from,$to");

        if($curl)
        {
            $arr = json_decode($curl,true);
            if($arr['success'])
            {
                $from = $arr['rates'][$from];
                $to = $arr['rates'][$to];

                $rate = $to / $from;
                $result = round($amount * $rate, 6);

                $convertion[] = array();

                $convertion[0] = $result;
                $convertion[1] = $request->to;
                // $convertion[2] = $partner_id;
            
            // dd($all_user_percentages);
            
                return $convertion;

               
                // return $result;
            }else{
                return $arr['error']['info'];
            }
        }else{
            return "Error reaching api";
        }



      

        return 0;
    
    }

}
