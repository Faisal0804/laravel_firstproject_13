<?php

namespace App\Http\Controllers\Admin\support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    function support(){
        return view("Admin.support.supportTicket");
    }
}
