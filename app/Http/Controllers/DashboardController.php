<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;
use Carbon;

class DashboardController extends Controller
{
    //
    public function index(){
    	
    	return view('dashboard');
    }

    public function category_branch(){
    $branch = Complaint::select('branch')->groupBy('branch')->orderByRaw('COUNT(*) DESC')->first();
        return view('admin.layouts.content',compact('branch'));
    }

    /*public function index(){
    	       $expDate = Carbon::now()->subDays(15));
               $complaint_highs=Table::whereDate('created_at', '<',$expDate);
    	return view('dashboard',compact('complaint_highs'));
    }*/
}
