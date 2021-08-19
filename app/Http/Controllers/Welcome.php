<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    function show()
    {
        return view('sign_up_Process');
        //return view('LoginPage');
    }
    function show1()
    {
        return view('sign_up_Process1');
        //return view('LoginPage');
    }
    function show2()
    {
        return view('sign_up_Process2');
        //return view('LoginPage');
    }
    function show3()
    {
        return view('sign_up_Process3');
        //return view('LoginPage');
    }
     function show4()
    {
        return view('sign_up_Process4');
        //return view('LoginPage');
    }
      function show5()
    {
        return view('sign_up_Process5');
        //return view('LoginPage');
    }
     function show6()
    {
        return view('sign_up_Process6');
        //return view('LoginPage');
    }
     function show7()
    {
        return view('sign_up_Process7');
        //return view('LoginPage');
    }
    public function Signin(Request $request)
    {
        $data = array (

            'FirstName'=>$request->FirstName,
          'LastName'=>$request->LastName,
          'EmailID'=>$request->EmailID,
          'Phone_no'=>$request->Phone_no

        );

         $lastid = DB::table('tbl_userlogin')->insertGetId($data);

        $request->session()->put('ID',$lastid);
     
         return $lastid;
        //$re = "/si1/".$lastid;
        //return redirect($re);
        
      
    }
   public function step1(Request $request)
   {
        $getid = $request->session()->get('ID');
        //$FirstName =$request->input('Home_Loan');
        $data = array (

            'Home_Loan'=>$request->input('Home_Loan')
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
        
  }
  public function step2(Request $request)
    {
        $getid = $request->session()->get('ID');
        
        $data = array (

            'Working_Real_Estate'=>$request->input('Working_Real_Estate')
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
        
    }
    public function step3(Request $request)
    {
        $getid = $request->session()->get('ID');
        $data = array (

            'Agent_First_Name'=>$request->input('Agent_First_Name'),
            'Agent_Last_Name'=>$request->input('Agent_Last_Name'),
            'Agent_Email'=>$request->input('Agent_Email'),
            'Agent_Number'=>$request->input('Agent_Number')
          

        );

       DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
       
    }
    public function step4(Request $request)
    {
         $getid = $request->session()->get('ID');
       
        $data = array (

            'Mortgage_Options'=>$request->input('Mortgage_Options')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }
    public function step5(Request $request)
    {
        
       $getid = $request->session()->get('ID');
      
        $data = array (

            'Covid_19_Disclosure'=>$request->input('Covid_19_Disclosure')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }
    public function step6(Request $request)
    {
        
       $getid = $request->session()->get('ID');
      
        $data = array (

            'Disclosure_Statement'=>$request->input('Disclosure_Statement'),
             'First_Name_Disclosure'=>$request->input('First_Name_Disclosure')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }
    public function step7(Request $request)
    {
        
       $getid = $request->session()->get('ID');
      
        $data = array (

            'real_estate_broker'=>$request->input('real_estate_broker'),
             'Designated_Sales'=>$request->input('Designated_Sales'),
             'disclosure_form'=>$request->input('disclosure_form'),
             'legal_agree'=>$request->input('legal_agree'),
             'signature_of'=>$request->input('signature_of')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }

    function prebtnworking(Request $request)
    {
         $data = array (

            'ID'=>$request->session()->get('ID')
            
            // 'ID'=>1

            );

            $getdata =  DB::table('tbl_userlogin')->where($data)->get();
            $jdat = json_encode($getdata);

            return $jdat;
    }
}
