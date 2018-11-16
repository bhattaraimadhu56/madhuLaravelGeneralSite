<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\AddFormValidation;
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
    {

        //by using Eloquent Model Method
        // to select all data
        // $data['rows']=Category::all();
        // or simply
        $data=Category::all();
        // to select specific column of the table



        //$data=Category::select('title','created_at','image','status')->get();
        // to check whether data coming or not we use dd('$data')==> which means display and die;
        //dd($data);





        // simple way to return to view without passing data
        // return view('admin.category.select');

        //There are two ways to return to view
        //One is using with function with (first parameter anyname that will carry data in view , another is variable name)
        // we will use $DatafromCategoryAnyName as in view page
        //return view('admin.category.select')->with('DatafromCategoryAnyName',$data);



        // Another  is using compact function with variable
        return view('admin.category.select', compact('data'));








    }

    public function add()
    {
        // opening new form so that category can insert the data
        return view('admin.category.add');
    }
    public function store(Request $request)
    {
//dd("Madhu");
        //if status doesn't send 1 or 0 value from the form
        //$request->request->add([status=>$request->get('categoryname')=='active'?1:0]);
//        $category= new Category();
//        $category ->title = $request->get('title');
//        $category ->image = $request->get('image');
//        $category ->status = $request->status;
//        $category->save();

        // to the slug
        // Nepali Politics ==by slug_str==> nepali-politics (comes in smaall letter )

        if($request->hasFile('main_image')){
           $image = $request->file('main_image');
           $image_name= rand(10000,999999).'_madhu_'.$image->getClientOriginalName();
           $image->move(public_path().DIRECTORY_SEPARATOR.'adminPanel'.DIRECTORY_SEPARATOR.'images_uploaded_database'.DIRECTORY_SEPARATOR.'category', $image_name);
        }
        $request->request->add(['slug'=>str_slug($request->get('title')),
                                'image'=>$image_name


        ]);
        Category::Create($request->all());
        $request->session()->flash('success','Data added Successfully');
        return redirect()->route('admin.category.select');

    }

    public function edit($id)
    {
        //showing the data in form for editing purpose
        $data=Category::where('id',$id)->first();
        //return view('admin.category.includes.editForm',compact($data));
        return view('admin.category.edit')->with('viewData', $data);
    }


    public function update(Request $request, $id)
    {//
       // dd($request->all());
        // submitting form so request
        $data=Category::where('id',$id)->first();

        // Naya image bhaya teslai upload garna paro purano hataya ra unlink le hatau6 purano lai
        // Naya image upload bhayako ho ki haina check garne ok

        if($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $image_name = rand(10000, 999999) . '_madhu_' . $image->getClientOriginalName();
            $image->move(public_path() . DIRECTORY_SEPARATOR . 'adminPanel' . DIRECTORY_SEPARATOR . 'images_uploaded_database' . DIRECTORY_SEPARATOR . 'category', $image_name);

            if ($data->image && file_exists(public_path() . DIRECTORY_SEPARATOR . 'adminPanel' . DIRECTORY_SEPARATOR . 'images_uploaded_database' . DIRECTORY_SEPARATOR . 'category'.DIRECTORY_SEPARATOR. $image_name));
                unlink(public_path() . DIRECTORY_SEPARATOR . 'adminPanel' . DIRECTORY_SEPARATOR . 'images_uploaded_database' . DIRECTORY_SEPARATOR . 'category' .DIRECTORY_SEPARATOR. $data->image);
        }
            $request->request->add(['slug' => str_slug($request->get('title')),
                // image ta naya bhaya $image_name same nai rakhna haina bhayae purano rakhna i.e $data->image
//                'image' => isset($image_name) ? $image_name : $data->image
                //'image' =>$data->image
                 'image' =>  $image_name

            ]);

            $data->update($request->all());
            $request->session()->flash('success', 'Data Updated Successfully');
            return redirect()->route('admin.category.select');

    }



    public function delete(Request $request, $id)
    {
       // dd('Madhu'.$id);
        // deleting data using Category Model
        //$data['row']=Category::where('id',$id)->first();
        $data=Category::where('id',$id)->first();
        if(!$data)
        {

            $request->session()->flash('warning','Error occurs! Data not Found');
            return redirect()->route('admin.category.select');
        }
        if ($data->image && file_exists(public_path() . DIRECTORY_SEPARATOR . 'adminPanel' . DIRECTORY_SEPARATOR . 'images_uploaded_database' . DIRECTORY_SEPARATOR . 'category'.DIRECTORY_SEPARATOR. $data->image
            ));
        unlink(public_path() . DIRECTORY_SEPARATOR . 'adminPanel' . DIRECTORY_SEPARATOR . 'images_uploaded_database' . DIRECTORY_SEPARATOR . 'category' .DIRECTORY_SEPARATOR. $data->image);

        $data->delete();
        $request->session()->flash('success','Data Deleted Successfully');
        return redirect()->route('admin.category.select');


    }

}
