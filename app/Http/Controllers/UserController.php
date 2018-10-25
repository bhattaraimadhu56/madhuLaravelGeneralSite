<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    public function select()
    { // by query Builder method 
       // $data['rows']=DB::table('users')->get();
        // or simply use $data only
       // $data=DB::table('users')->get();
        // to check whether data coming or not we use dd('$data')==> which means display and die;
        //dd($data);


        //by using Eloquent Model Method
        // to select all data
       // $data['rows']=User::all();
        // or simply
        //$data=User::all();
        // to select specific column of the table
        $data=User::select('id','created_at','email','status')->get();
       // to check whether data coming or not we use dd('$data')==> which means display and die;
        //dd($data);





        // simple way to return to view without passing data
       // return view('admin.user.select');

        //There are two ways to return to view 
     //One is using with function with (first parameter anyname that will carry data in view , another is variable name)
        // we will use $DatafromUserAnyName as in view page 
       //return view('admin.user.select')->with('DatafromUserAnyName',$data);

       
    
    // Another  is using compact function with variable
       return view('admin.user.select', compact('data'));

        


        
        
       
      
    }

    public function add()
    {
        return view('admin.user.add');
    }
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        // submitting form so request
    }
    public function store(Request $request)
    {
        // submitting form so request
    }
   
    public function delete($id)
    {
        //
    }
}
