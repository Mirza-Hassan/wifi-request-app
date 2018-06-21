<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\Approval;
use App\User;
use App\models\College;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\Messages\NexmoMessage;
use Nexmo\Laravel\Facade\Nexmo;

class StudInsertController extends Controller {
    public function insertform(){
       return view('stud_create');
    }

public function insertuni(Request $request){
    $s = new College;
    $s->name= $request->input('uni_name');
    $s->save();
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/admin_uni">Click Here</a> to go back.';

 }

public function insert(Request $request){
  //  DB::insert('insert into student (name, phone , email , institude) values(?)',[$name,$phone, $email , $institude]);
    $s = new Student;
    $s->name= $request->input('stud_name');
    $s->email=$request->input('stud_email');
    $s->phone=$request->input('stud_phone');
    $s->college_id=$request->input('college_id');
    $s->complaint=$request->input('complaint');
    
    //$s->institute=$request->input('stud_institute');
    //$s->role=$request->input('role');
    //MailController::basic_email('A new Request is recieved for WIFI :)');
    $s->save();
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/view-records">Click Here</a> to go back.';
 }
 


public function approve(Request $request){
    $s = new Approval;
    $s->approved= $request->input('check');
    if($s->approved=='reject'){
        $s->created_at= new \DateTime();
        $s->student_id=$request->input('id');
        DB::table('student')->where('id',$s->student_id)->update(['is_active'=>false]);
        $this->send_sms('923433093522','Your request for WIFI has not been approved, please try again.');
        $s->save();
        }
    $s->created_at= new \DateTime();
    $s->username=$request->input('stud_username');
    $s->password=$request->input('stud_password');
    $s->time=$request->input('stud_option');
    $s->student_id=$request->input('id');
    //send sms
    $this->send_sms('923433093522','Your request for WIFI has been approved, please check your email for credentials.');
    //send email to student
    
    $s->save();
} 


public function toNexmo($notifiable)
{
    return (new NexmoMessage)
                ->content('Your SMS message content');
}

public function send_sms($to,$text){
    Nexmo::message()->send([
    'to'   => $to,
    'from' => '16105552344',
    'text' => $text
    ]);
}

public function view(){
    // $users = DB::select('select * from student');
   // $users = DB::table('student')->get();
   //$uni
   $user = \Auth::user();  
   if (is_null($user)) 
    return '404 unauthorized';
    else if($user->name=="hassan"){
        $students= Student::where(['is_active'=>true])->get(); 
    }
    else
 //  to show requests for the user's college only
    $students= Student::where(['is_active'=>true , 'college_id'=>$user->college_id])->get() ;

   return view('stud_view',['users'=>$students]);
}


public function adminstudview(){
    // $users = DB::select('select * from student');
   // $users = DB::table('student')->get();
   //$uni
        $users= User::all();

   return view('admin_stud',['users'=>$users]);
}


public function collegeview(){
    // $users = DB::select('select * from student');
   // $users = DB::table('student')->get();
   //$uni
   $college = DB::select('select * from college');

   return view('college_view',['users'=>$college]);
}

public function adminuni(){
    // $users = DB::select('select * from student');
   // $users = DB::table('student')->get();
   //$uni
   $college = DB::select('select * from college');

   return view('admin_uni',['users'=>$college]);
}


public function list(Request $request){
     $student=  Student::where('id',$request->input('id'))->first();
     $college = College::where('id', $student->college_id)->first();
     //$x=  Student::where('id', 4)->get();
     return view('student_view',["student"=>$student,"college"=>$college]);
}
public function update(){
    $users = DB::select('select * from users');
    return view('stud_edit_view',['users'=>$users]);
 }
 public function show($id) {
    $users = DB::select('select * from users where id = ?',[$id]);
    return view('stud_update',['users'=>$users]);
 }
 public function edit(Request $request,$id) {
    $name = $request->input('name');
    DB::update('update users set name = ? where id = ?',[$name,$id]);
    echo "Record updated successfully.<br/>";
    echo '<a href = "/edit-records">Click Here</a> to go back.';
 }

 public function delete(){
    $users = DB::select('select * from users');
    return view('stud_delete_view',['users'=>$users]);
 }
 public function destroy($id) {
    DB::delete('delete from users where id = ?',[$id]);
    echo "Record deleted successfully.<br/>";
    echo '<a href = "/delete-records">Click Here</a> to go back.';
 }

}
