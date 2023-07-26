<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Complaint;
use App\Models\CallCenter;
use Carbon\Carbon;
use Auth;

class FinanceController extends Controller
{
    public function ComplaintsIndex()
    {
    	$complaints=Complaint::where('finance_assignee',auth()->user()->name)->get();
    	return view('admin.finance.complaint_index',compact('complaints'));
    }

    public function CallCenterIndex()
    {
    	$call_records=CallCenter::where('finance_assignee',auth()->user()->name)->get();
    	return view('admin.finance.callrecord_index',compact('call_records'));
    }
    public function editComplaint($id)
    {
    	$complaint = Complaint::find($id);
    	return view('admin.finance.complaint_edit',compact('complaint'));
    }

    public function updateComplaint(Request $request, $id)
    {
    	
        $data = $request->all();
        $complaint = Complaint::find($id);
        
        
        
         $complaint->update($data);

    	return redirect()->route('complaint.finance')->with('message','Complaint updated successfully');
    }
    public function editCallRecord($id)
    {
    	$call_record = CallCenter::find($id);
    	return view('admin.finance.callrecord_edit',compact('call_record'));
    }

    public function updateCallRecord(Request $request,$id)
    {
    	$data = $request->all();
        $call_record = CallCenter::find($id);
        
        
        
         $call_record->update($data);
        
    	return redirect()->route('callcenter.finance')->with('message','Call Center Record updated successfully');
    }

}
