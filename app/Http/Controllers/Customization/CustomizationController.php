<?php

namespace App\Http\Controllers\Customization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizationController extends Controller
{
    public function homeCustomization(){
        return view('admin.home_page_customization')->with(['data'=>['name'=>'bilal','email'=>'asdas@gmail.com','image'=>'abc.jpg']]);
    }
}
