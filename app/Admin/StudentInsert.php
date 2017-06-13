<?php 
namespace App\Admin;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use Auth;
class StudentInsert {
	protected $request;

	public function __construct(Request $request){
		 $this->request = $request;
	}

	public function studentAdd(){

		$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['students']['name']) && in_array($_FILES['students']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['students']['tmp_name'])){
            
            
            $csvFile = fopen($_FILES['students']['tmp_name'], 'r');
            
          
            fgetcsv($csvFile);
            
           
            while(($line = fgetcsv($csvFile)) !== FALSE){
               
                
                

               
                $find = User::find(Auth::id());
                    $user = new Student;
                    $user->f_name = $line[0];
                    $user->m_name = $line[1];
                    $user->l_name = $line[2];
                    $user->age = $line[3];
                    $user->email = $line[4];
                    $user->contact = $line[5]; 
                    $user->address = $line[6];
                    $find->students()->save($user);
            }
            
          
            fclose($csvFile);

           
        }else{
            return 'error uploading files';
        }
    }else{
            return 'invalid files mego';
        }

        return redirect()->back()->with('info', 'Students Records Successfully Saved!!');
	}



}