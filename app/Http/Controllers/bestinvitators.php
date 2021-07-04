<?php

namespace App\Http\Controllers;

use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bestinvitators extends Controller
{
    public function index(){
        $bestinvitators = DB::table('Users')
            ->join('bestinvitators', 'users.id', '=', 'bestinvitators.user_id')
            ->paginate(10);
        return $bestinvitators;
    }
}
