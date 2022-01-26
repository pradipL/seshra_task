<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\registration;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function insert(Request $req)
    {
        $req->validate([
            'fname'=>'required|min:3|max:30',
            'lname'=>'required|min:3|max:30',
            'uname'=>['required', function($attribute, $value, $fail)
        {
            $datas=registration::all();
            foreach($datas as $data)
            {
                if($data->username===$value)
                {
                    $fail("username already exist choose another one");
                }
            }
        }],
            'password'=>'required|min:3|max:30|',
            'age'=>'required|numeric',
            'gender'=>'required',
            'email'=>'required|email|min:6',
            'dob'=>'required|date',
            'phnumber'=>'required|numeric',
            'cname'=>'required',
            'stdlevel'=>'required'


        ]);
        
        $reg=new registration;
        $reg->name=$req->fname;
        $reg->lastname=$req->lname;
        $reg->username=$req->uname;
        $reg->password=$req->password;
        $reg->age=$req->age;
        $reg->gender=$req->gender;
        $reg->email=$req->email;
        $reg->dob=$req->dob;
        $reg->phonenumber=$req->phnumber;
        $reg->college=$req->cname;
        $reg->level=$req->stdlevel;
        $reg->save();
        return redirect('registration');

    }
    function login(Request $req)
    {
        $name=$req->uname;
        $password=$req->password;
        $uname=registration::where('username', $name)->get();
        $id=$uname[0]->id;
        // if($uname->isempty())
        // {
        //     return "empty array";
        // }

        
        if(!$uname->isempty() && $uname[0]->password==$password)
        {
            Session::put(['username'=>$name, 'id'=>$id]);
            return redirect('dashboard');
        }


       
        else
        {
            return redirect('/');
        }
    }

    function showdata()
    {
        $datas=registration::all();
       
         return view('dashboard',compact('datas'));
    }



    function logout()
    {
        Session::forget('username');
        return redirect('/');
    }


    function edit()
    {
        $sn=Session::get('id');
        $query=registration::find($sn);
        return view('edit', compact('query'));
    }


    function update(Request $req)
    {
        $sn=Session::get('id');
        $query=registration::find($sn);
        $query->name=$req->fname;
        $query->lastname=$req->lname;
        $query->username=$req->uname;
        $query->password=$req->password;
        $query->age=$req->age;
        $query->gender=$req->gender;
        $query->email=$req->email;
        $query->dob=$req->dob;
        $query->phonenumber=$req->phnumber;
        $query->college=$req->cname;
        $query->level=$req->stdlevel;
        $query->save();
    }


    function delete()
    {
        $sn=Session::get('id');
        $query=registration::find($sn);
        $query->delete();
        return redirect('/');

    }
}
