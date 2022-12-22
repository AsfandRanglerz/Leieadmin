<?php

namespace App\Http\Controllers\Client;

use \PDF;
use App\Models\Lease;
use Illuminate\Http\Request;
use App\Models\LeieadminLogo;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{

    public function index($id)
    {
        $data = [
            "title" => "view",
            "data" => Lease::find($id),
            "logo" => LeieadminLogo::select('logo')->find(1),
        ];
        // return $data;
        return view('frontend.front_panel_files.tenants.pdf', $data);
    }


    public function openPdf($id){
        $data = [
            "title" => "open",
            "data" => Lease::find($id),
            "logo" => LeieadminLogo::select('logo')->find(1),
        ];
        // return $data;
        return view('frontend.front_panel_files.tenants.pdf', $data);
    }



    public function signatured(Request $request,$id)
    {
        $folderPath = public_path('signature/');
        
        $image_parts = explode(";base64,", $request->signed);
              
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
           
        $file = $folderPath . uniqid() . '.'.$image_type;
        file_put_contents($file, $image_base64);
        $image = explode('signature/', $file);

        Lease::find($id)->update(['tenant_signature'=>$image[1]]);
        return redirect()->back();
    }


}
