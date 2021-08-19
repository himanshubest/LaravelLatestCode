<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Session;

class Add_ListingController extends Controller
{
    public function Add_Listing_save_data(Request $request)
    {
        $data = array (

          'Listing_Status'=>$request->Listing_Status,
          'Street_Address'=>$request->Street_Address,
          'City'=>$request->City,
          'State'=>$request->State,
          'Zip'=>$request->Zip,
          'County'=>$request->County,
          'Listing_Price'=>$request->Listing_Price,
          'Property_Taxes'=>$request->Property_Taxes,
          'HOA'=>$request->HOA,
          'Year_Built'=>$request->Year_Built,
          'Bed'=>$request->Bed,
          'Bath'=>$request->Bath,
          'Square_Feet'=>$request->Square_Feet,
          'Stories'=>$request->Stories,
          'Units'=>$request->Units,
          'Lot_Size'=>$request->Lot_Size,
          'Property_Type'=>$request->Property_Type,
          'Property_Style'=>$request->Property_Style,
          'MLD_ID'=>$request->MLD_ID,
          'Listing_ID'=>$request->Listing_ID,
          'Main_Home_Image'=>$request->Main_Home_Image,
          'UserID'=>$request->UserID,
          'Property_Headline'=>$request->Property_Headline,
          'Short_Descripation'=>$request->Short_Descripation,
          'Property_Descripation'=>$request->Property_Descripation
          

        );

         $lastid = DB::table('tbl_add_listing_landing_page')->insertGetId($data);

       
          return redirect('/LoginController/VD');
        
      
    }

    public function CreatOpenHomeShow(Request $request)
    {
         if(Session::get('ID'))
         {
            return view('CreatOpenHouse');
         }
         else
         {
             return redirect('/LoginPagesShow');
         }

    }

    public function HomeUserRegistraion($id)
    {
        $data = array (

            'ID'=>$id
            
          

            );

            $getdata =  DB::table('tbl_add_listing_landing_page')->where($data)->get();
       return view('HouseUserRegistration',['getdata'=>$getdata]);
    }
    public function HomeUserRegistraionSave(Request $request)
    {
         $data = array (

          'First_Name'=>$request->First_Name,
          'Last_Name'=>$request->Last_Name,
          'Email_Id'=>$request->Email_Id,
          'Contact_no'=>$request->Contact_no,
          'Address'=>$request->Address,
          'HomeID'=>$request->HomeID,
          'Min_term'=>$request->Min_term,
          'Ammount'=>$request->Ammount,
          'Description'=>$request->Description
          
          

        );

         $lastid = DB::table('tbl_home_visitor_registration')->insertGetId($data);

       
          return redirect('/LoginController/VD');
    }
}
