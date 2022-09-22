<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Result;
use Auth;

class QuizController extends Controller
{
    public function dashboard(){
        $fresult=Result::orderBy('total','DESC')->get();
        $daresult=Result::where('dept','1')->orderBy('total','DESC')->get();
        $dbresult=Result::where('dept','2')->orderBy('total','DESC')->get();
        return view('dashboard',compact('fresult','daresult','dbresult'));
    }
    public function quiz(){
        return view('quiz');
    }
    public function submitquiz(Request $request){
        $answer=Answer::first();
        $resu=Result::where('uid',Auth::user()->id)->first();
        if(isset($resu)){
            $resu->delete();
        }
        $result=new Result();
        $count=0;
        if(isset($request->q1) && $answer->q1==$request->q1){
            $result->q1=0.25;
            $count=$count+0.25;
        }else{
            $result->q1=-0.05;
            $count=$count-0.05;
        }
        
        $q2a=implode(',',$request->q2);
        if(isset($q2a) && $answer->q2==$q2a){
            $result->q2=0.25;
            $count=$count+0.25;
        }else{
            $result->q2=-0.05;
            $count=$count-0.05;
        }
        
        if(isset($request->q3a) && $answer->q3a==$request->q3a){
            $result->q3a=0.25;
            $count=$count+0.25;
        }else{
            $result->q3a=-0.05;
            $count=$count-0.05;
        }
        
        if(isset($request->q3b) && $answer->q3b==$request->q3b){
            $result->q3b=0.25;
            $count=$count+0.25;
        }else{
            $result->q3b=-0.05;
            $count=$count-0.05;
        }
        
        if(isset($request->q3c) && $answer->q3c==$request->q3c){
            $result->q3c=0.25;
            $count=$count+0.25;
        }else{
            $result->q3c=-0.05;
            $count=$count-0.05;
        }
        
        $result->uid=Auth::user()->id;
        $result->dept=Auth::user()->dept_id;
        $result->total=$count;
        $result->save();
        return redirect('/');
    }
}
