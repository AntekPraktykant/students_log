<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyStatus;
use App\Student;
use DB;

class DailyStatusController extends Controller
{
    public function create(){
        $this -> validate(request(), [
            'student_id' => 'required',
            'day' => 'required',
            'status' => 'required'
        ]);

        DailyStatus::create([
            'student_id' => request('student_id'),
            'day' => request('day'),
            'status' => request('status'),
        ]);
        return redirect("/#".request('student_id'))->with('message', 'Nowy wpis utworzony!');
    }
    public function update($id){
        $dailyStatus = DailyStatus::where('day', '=', request('datepicker'.$id))->where('student_id', '=', $id)->get()->toArray();
        $student = Student::find($id);
        if (! empty($dailyStatus)){
            return view('students.modify')->with('ds', $dailyStatus)->with('student', $student);
        }
        else{
            return view('daily_statuses.create')->with('student', $student)->with('day', request('datepicker'.$id));
        }


    }
    public function updated(){
        DB::table('daily_statuses')->where('student_id', request('student_id'))->where('day', request('day'))->update(['status'=>\request('status')]);
        return redirect("/#".request('student_id'))->with('message', 'Status zmodyfikowany!');
    }
}
