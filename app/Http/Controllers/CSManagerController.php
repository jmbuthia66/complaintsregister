<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Complaint;
use App\Models\CallCenter;
use Carbon\Carbon;
use Auth;


class CSManagerController extends Controller
{
    public function ComplaintsIndex()
    {
    	$complaints=Complaint::all();
    	return view('admin.csm.complaint_index',compact('complaints'));
    }

    public function CallCenterIndex()
    {
    	$call_records=CallCenter::all();
    	return view('admin.csm.call_center_index',compact('call_records'));
    }
}
