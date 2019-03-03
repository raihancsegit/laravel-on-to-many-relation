<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Email;
class TestController extends Controller
{
    public function getdetails(){
        $person_deta = Student::all()->toArray();
        foreach($person_deta as $index=>$person){
            echo "<h3>Student Name:</h3>".$person['name']."<br/>";
            //$movie = Student::find($person['id'])->email->toArray();
            $student_id = $person['id'];
            $email_ids = Student::find($student_id)->email->toArray();
            foreach( $email_ids as  $key=>$value){
                echo $value['email_id'].",";
            }
            
        
    }
}

}

