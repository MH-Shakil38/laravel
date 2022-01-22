<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\crud;
use Session;

class crudcontroller extends Controller
{
    public function showData(){
      //$showData = crud::all();
      //$showData = crud::paginate(5);
      $showData = crud::Simplepaginate(5);
      return view('show_data',compact('showData'));
    }
    public function addData(){
      return view('add_data');
    }
    public function storeData(Request $request){
      $rules = [
        'name'=>'required|max:20',
        'email'=>'required|email',

      ];
      $cm = [
          'name.required'   =>  'Enter your Name',
          'name.max'        =>  'Your name can not contain more then 20',
          'email.required'  =>  'Enter your Email',
          'email.email'     =>  'Email must be a valid email',
      ];
      $this->validate($request, $rules, $cm);

      $crud = new crud();
      $crud->name   = $request->name;
      $crud->email  = $request->email;
      $crud->save();
      Session::flash('msg','Data Successfully Added');
      return redirect('/');
    }
    public function editData($id=null){
      $editData = crud::find($id);
      return view('edit-data',compact('editData'));
    }
    public function updateData(Request $request,$id){
      $rules = [
        'name'=>'required|max:20',
        'email'=>'required|email',

      ];
      $cm = [
          'name.required'   =>  'Enter your Name',
          'name.max'        =>  'Your name can not contain more then 20',
          'email.required'  =>  'Enter your Email',
          'email.email'     =>  'Email must be a valid email',
      ];
      $this->validate($request, $rules, $cm);

      $crud = crud::find($id);
      $crud->name   = $request->name;
      $crud->email  = $request->email;
      $crud->save();
      Session::flash('msg','Data Successfully Updated');
      return redirect('/');
    }
    public function deleteData($id = null){
      $deleteData = crud::find($id);
      $deleteData->delete();
      Session::flash('msg','Data Successfully Deleteted');
      return redirect('/');
    }

}
