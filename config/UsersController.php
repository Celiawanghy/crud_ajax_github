<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {        
        $this->validate(request(), [
            'name'=>'required|min:2',
            'province'=>'required',
            'salary'=>'required'
        ]);        
      
        $salaryText = preg_replace('~\xc2\xa0~','' , str_replace(',','',request('salary')));
       
        //dd($salaryText);
        $salary = floatval($salaryText);
        
        User::create([
            'name'=>request('name'),
            //'province'=>utf8_decode(request('province')),
            'province'=>request('province'),
            'salary'=>$salary
        ]);
        
        $input=User::latest()->first(['name','province','salary'])->toArray();
        
        if($input['province']=="Quebéc")
        {
            $input['salary'] = "$ ".number_format($input['salary'], 2, ',', ' ');
        }else
        {
            $input['salary'] = "$ ".number_format($input['salary'], 2, '.', ',');
        }
        
        return view('/display', compact('input'));

    }
    
    public function listing(Request $request)
    {
        $data=User::latest()->paginate(10);
        
        if ($request->ajax()) {
            
            return view('/ajax.pagination', compact('data'))->render();
            
        }
        
        return view('/listing', compact('data')); 
    }
    
    public function delete(Request $request)
    {
        $id = $request->id;
        User::find($id)->delete();
        return redirect("/listing");
    }
    
}
