<?php
/**
 * Created by PhpStorm.
 * User: DEXP
 * Date: 10.06.2017
 * Time: 1:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends HtmlController
{

    public function showprofile($id)
    {


        return view('profile');
    }


    public function savedata(Request $request)
    {
        Auth::user()->email = $request->user_email;
        Auth::user()->tel = $request->user_tel;
        Auth::user()->addres = $request->user_address;
        Auth::user()->age = $request->user_age;
        Auth::user()->sex = $request->user_sex;
        Auth::user()->save();
        return redirect('/profile/' . Auth::user()->id);
    }

    public function addtocollect(Request $request)
    {

        Auth::user()->my_collections = Auth::user()->my_collections.','.$request->id;
        Auth::user()->save();
        return 'Заебок!';

    }


}