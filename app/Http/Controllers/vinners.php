<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class vinners extends Controller
{
    public function index(){
        $vinners=DB::table('lottoryvinners')->join('vinnerstables','vinnerstables.table_id','=','lottoryvinners.vinnerstable_id')
        ->join('lottorydateandtimes','lottorydateandtimes.lottoryDate','=','lottoryvinners.date')
        ->join('users','vinnerstables.user_id','=','users.id')
        ->select('user_id','date','lottoryTime','lottoryDate','name','numberOfInvitations','image')
        ->get();
        //dd($vinners);
        return $vinners;
    }
}
