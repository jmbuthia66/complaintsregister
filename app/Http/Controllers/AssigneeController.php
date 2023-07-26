<?php

namespace App\Http\Controllers;
use App\Models\Complaint;
use App\Models\CallCenter;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Auth;


use Illuminate\Http\Request;

class AssigneeController extends Controller
{
    public function indexComplaint()
    {
        $complaints  = Complaint::where('assignee',auth()->user()->name)->get();
        return view('admin.assignee.complaint_index',compact('complaints'));
    }

    public function indexCallCenter()
    {
    	$call_records = CallCenter::where('assignee',auth()->user()->name)->get();
    	return view('admin.assignee.callrecord_index',compact('call_records'));
    }

    public function editComplaint($id)
    {
    	$complaint = Complaint::find($id);
    	return view('admin.assignee.complaint_edit',compact('complaint'));
    }

    public function updateComplaint(Request $request, $id)
    {
    	
        $data = array_merge($request->all(), ['sent_by' => auth()->user()->name]);
        $complaint = Complaint::find($id);
        
        
        
         $complaint->update($data);

    	return redirect()->route('complaint.assignee')->with('message','Complaint updated successfully');
    }

    public function editCallRecord($id)
    {
    	$call_record = CallCenter::find($id);
    	return view('admin.assignee.callrecord_edit',compact('call_record'));
    }

    public function updateCallRecord(Request $request,$id)
    {
    	$data = array_merge($request->all(), ['sent_by' => auth()->user()->name]);
        $call_record = CallCenter::find($id);
        
        
        
         $call_record->update($data);
        
    	return redirect()->route('callcenter.assignee')->with('message','Call Center Record updated successfully');
    }
}
