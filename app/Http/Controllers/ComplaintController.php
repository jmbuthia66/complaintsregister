<?php

namespace App\Http\Controllers;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Mail\TestMail;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailMaster;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints  = Complaint::all();
        return view('admin.complaints.index',compact('complaints'));
    }

    public function indexr()
    {
        $complaints  = Complaint::where("name",Auth::user()->name)->get();
        return view('admin.complaints.indexr',compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.complaints.create');
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
        

        Complaint::create($data);

         $mailData = [
            'title'=>$request->query,
            'id'=>$request->id,
            'name'=>$request->assignee, 
            'subject'=>$request->subject,
            'created_at'=>$request->created_at,
            'body'=>$request->name,
            'email'=>$request->assignee_email,

            'cso'=>auth()->user()->name,

        ];
        
        

         try{
           \Mail::to($request->assignee_email)->send(new MailMaster($mailData));

        }catch(\Exception $e){

        }

        return redirect()->back()->with('message','Complaint added and Email Sent successfully');

    }


     public function storeAdmin(Request $request)
    {
        

        
        $data = $request->all();
        

        Complaint::create($data);

        return redirect()->back()->with('message','Complaint added and Email Sent successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complaint = Complaint::find($id);
        return view('admin.complaints.delete',compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaint = Complaint::find($id);
        return view('admin.complaints.edit',compact('complaint'));
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
        $complaint = Complaint::find($id);
        
        
        
         $complaint->update($data);

         if(auth()->user()->name = "CSO"){
            return redirect()->route('cso.view')->with('message','Complaint updated successfully');
         }

         
            return redirect()->route('complaint.index')->with('message','Complaint updated successfully');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complant = Complaint::find($id);
        $complaint->delete();
        return redirect()->route('complaint.index')->with('message','Complaint deleted');
    }


    public function validateStore($request){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'branch'=>'required',
            'client_name'=>'required',
            'client_email'=>'required',
            'client_id'=>'required',
            'department'=>'required',
            'phone_number'=>'required|numeric',
            'client_no'=>'required',
            'subject'=>'required',
            'priority'=>'required',
            'complaint'=>'required',
            'policy_no'=>'required',
            

       ]);
    }


   public function validateUpdate($request,$id){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required',          
            'branch'=>'required',
            'client_name'=>'required',
            'client_id'=>'required',
            'client_email'=>'required',
            'department'=>'required',
            'phone_number'=>'required|numeric',
            
            'subject'=>'required',
            'complaint'=>'required',
            'priority'=>'required',
            'status'=>'required',
            'policy_no'=>'required',

       ]);
    }
    public function low()
    {
        $low_priorities  = Complaint::where('priority','=','Low')->get();
        return view('admin.report.low',compact('low_priorities'));
    }
}
