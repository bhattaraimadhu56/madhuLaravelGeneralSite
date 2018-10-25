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
        //shortcut method must me use $fillable in User Model which is inside app folder ok
        $user = new User();
        // $user = new User;
       // $user = Create($request->all());
      // left side is table column name and right side is form field name
        $user ->name = $request->get('username');
        $user ->email = $request->get('email');
         $user ->password= $request->get('password');
        
        // or simply write
         $user ->contact_no = $request->contact_no;
         $user ->address = $request->address;
        // $user ->gender = $request->gender;
         $user ->status = $request->status;
         $user->save();
         // after saving redirecting to list of users
         //return redirect()->route('admin.user.select');
         // after saving redirecting to list of users with toast notification
         if ($user->save()){
            $notification = array('message'=>'User Added Successfully!!',
                          'alert-type'=>'success');   
                //For notification write this
                // return redirect()->back()->with($notification); 
                 //for inserting data showing all data redirecting all to userlist

                return redirect()->route('admin.user.select')->with($notification);
                // so we write the code of toast message in redirecting page i.e admin.user.select.blade.php ok
            }
            else{
            $notification = array('message'=>'Sorry! Unable to insert in database!!',
                          'alert-type'=>'error');      
            //return redirect()->back()->withErrors($validator)->withInput();
            }

    }

   
    public function delete($id)
    {
        //
    }
}
