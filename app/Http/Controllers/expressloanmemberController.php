<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expressloanmember;
use Illuminate\Support\Facades\DB;

class expressloanmemberController extends Controller
{
    function addexpressloan(Request $req){
        $count = 1;
        DB::table('member_info')->insert(
            array(
                'member_id' => $count,
                'firstname' => $req->inputfirstname,
                'middlename' => $req->inputmiddlename,
                'lastname' => $req->inputlastname,
                'age' => $req->inputage,
                'gender' => $req->inputgender,
                'status' => $req->inputstatus,
                'occupation' => $req->inputoccupation,
                'address' => $req->inputaddress,
                'contact' => $req->inputcontact,
                'email_address' => $req->inputemail,

            )
        );
    }
}
