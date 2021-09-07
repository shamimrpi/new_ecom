<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        dd("ok");
        return view('admin.profile.profile');
    }
    public function profileUpdate(Request $request){
        
        $profile = User::where('id',Auth::user()->id)->first();
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        dd($request->file('image'));
        if($request->file('image')){
            $file = $request->file('image');
            dd($file);
            @unlink($profile->image);
            $fileName = rand(0000,9999).$file->getClientOriginalName();
            $file->move(('public/admin/profile/images'),$fileName);
            $request->image = $fileName;
          
        }
       
        $profile->save();
        return back()->with('message','Profile updated Successfully');
        

    }
}
