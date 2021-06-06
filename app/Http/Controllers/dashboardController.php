<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\cvs;

class dashboardController extends Controller
{
    public function index(){
        $cvs = cvs::latest()->paginate(10);
        return view('dashboard.index',compact('cvs'));
      }
  
      public function view($id){
        return view('dashboard.singleview',['cv'=>cvs::find($id)]);
  
      }
}
