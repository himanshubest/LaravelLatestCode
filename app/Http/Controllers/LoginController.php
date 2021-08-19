<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    function LoginPagesShow()
    {
        
        return view('LoginPage');
        //return view('Add_Listing_Landing_Page');
       // return view('Mylist');
    }
    function LoginDetail(Request $request)
    {
         
        
        $data = array (

            'EmailID'=>$request->EmailID,
             'Phone_no'=>$request->Pass
          

        );

      $getdata =  DB::table('tbl_userlogin')->where($data)->first();
       
       $request->session()->put('ID',$getdata->ID);

        $request->session()->put('FirstName',$getdata->FirstName);

    
      if($getdata=="")
      {
        return "1";
      }
      else
      {
        return  $getdata->ID;
      }
       
      //return {{$getdata->"ID"};
    }
    function VendorDashboard(Request $request)
    {
         if(Session::get('ID'))
         {
            $data = array (

            'UserID'=>$request->session()->get('ID')
            
          

            );

            $getdata =  DB::table('tbl_add_listing_landing_page')->where($data)->get();
            
            return view('Mylist',['getdata'=>$getdata]);
         }
         else
         {
           
            return redirect('/LoginPagesShow');
         }
        
        
    }

    //logout
    function LogoutPage(Request $r)
    {
          $r->session()->forget('ID');
          $r->session()->forget('FirstName');
          return redirect('/LoginPagesShow');
    }
}
