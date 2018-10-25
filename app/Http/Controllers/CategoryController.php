<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index');
    }

    public function select()
    { // by query Builder method 
       // $data['rows']=DB::table('categories')->get();
        // or simply use $data only
       // $data=DB::table('categories')->get();
        // to check whether data coming or not we use dd('$data')==> which means display and die;
        //dd($data);


        //by using Eloquent Model Method
        // to select all data
       // $data['rows']=Category::all();
        // or simply
        //$data=Category::all();
        // to select specific column of the table
        $data=Category::select('id','created_at','title','status')->get();
       // to check whether data coming or not we use dd('$data')==> which means display and die;
        //dd($data);





        // simple way to return to view without passing data
       // return view('admin.category.select');

        //There are two ways to return to view 
     //One is using with function with (first parameter anyname that will carry data in view , another is variable name)
        // we will use $DatafromUserAnyName as in view page 
       //return view('admin.category.select')->with('DatafromUserAnyName',$data);

       
    
    // Another  is using compact function with variable
       return view('admin.category.select', compact('data'));

        


        
        
       
      
    }

    public function add()
    {
        return view('admin.category.add');
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
