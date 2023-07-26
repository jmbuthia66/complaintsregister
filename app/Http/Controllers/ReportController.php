<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PDF;

class ReportController extends Controller
{

    public function low(){
     
     $complaints  = Complaint::where('priority','=','Low')->get();
        return view('admin.report.low',compact('complaints'));
    }

    public function LowPdf(){
        $complaints  = Complaint::where('priority','=','Low')->get();


        $complaints = Pdf::loadView('pdf_low',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_low.pdf');
    }

    public function medium(){
     
        $complaints  = Complaint::where('priority','=','Medium')->get();
        return view('admin.report.medium',compact('complaints'));
    }

    public function MediumPdf(){
        $complaints  = Complaint::where('priority','=','Medium')->get();


        $complaints = Pdf::loadView('pdf_medium',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_medium.pdf');
    }

    public function high(){
     
        $complaints  = Complaint::where('priority','=','High')->get();
        return view('admin.report.high',compact('complaints'));
    }

    public function HighPdf(){
        $complaints  = Complaint::where('priority','=','High')->get();


        $complaints = Pdf::loadView('pdf_high',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_high.pdf');
    }

    public function Received(){
     
        $complaints  = Complaint::where('status','=','Received')->get();
        return view('admin.report.received',compact('complaints'));
    }

    public function ReceivedPdf(){
        $complaints  = Complaint::where('status','=','Received')->get();


        $complaints = Pdf::loadView('pdf_received',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_received.pdf');
    }

    public function Progress(){
     
        $complaints  = Complaint::where('status','=','In Progress')->get();
        return view('admin.report.progress',compact('complaints'));
    }

    public function ProgressPdf(){
        $complaints  = Complaint::where('status','=','In Progress')->get();


        $complaints = Pdf::loadView('pdf_in_progress',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_in_progress.pdf');
    }

    public function Resolved(){
     
        $complaints  = Complaint::where('status','=','Resolved')->get();
        return view('admin.report.resolved',compact('complaints'));
    }

    public function ResolvedPdf(){
        $complaints  = Complaint::where('status','=','Resolved')->get();


        $complaints = Pdf::loadView('pdf_resolved',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_resolved.pdf');
    }

    public function NotReviewed(){
     
        $complaints  = Complaint::where('status','=','Not Reviewed')->get();
        return view('admin.report.not_reviewed',compact('complaints'));
    }

    public function NotReviewedPdf(){
        $complaints  = Complaint::where('status','=','Not Reviewed')->get();


        $complaints = Pdf::loadView('pdf_not_reviewed',[
            'complaints' => $complaints
        ])->setPaper('a4', 'landscape');

        return $complaints->stream('pdf_not_reviewed.pdf');
    }
}
