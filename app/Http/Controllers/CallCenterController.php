<?php

namespace App\Http\Controllers;
use App\Models\CallCenter;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;


class CallCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $call_records  = CallCenter::all();
        return view('admin.call_records.index',compact('call_records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.call_records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        

        CallCenter::create($data);

         return redirect()->back()->with('message','Call Record added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $call_record = CallCenter::find($id);
        return view('admin.call_records.delete',compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $call_record = CallCenter::find($id);
        return view('admin.call_records.edit',compact('call_record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $call_record = CallCenter::find($id);

        if($data['status'] = 'Closed'){
            $data['date_closed'] = $request->update_at;
        }
        
        
        
        
         $call_record->update($data);

         if(auth()->user()->name = "CSO"){
            return redirect()->route('call_record.index')->with('message','Call Record updated successfully');
         }

         
            return redirect()->route('complaint.index')->with('message','Call Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $call_record = CallCenter::find($id);
        $call_record->delete();
        return redirect()->route('call_records.index')->with('message','Call Record deleted');
    }
}
