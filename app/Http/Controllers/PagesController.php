<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function passwordProtect(){
        return view('password_protect');
    }

    public function passwordCheck(Request $request){

        if($request->input('password') === 'kiwi'){
            $request->session()->put('user_can_view_site', true);

            return redirect()->route('home');
        }

        return redirect('/password')
            ->with('status.warning', 'The password you entered is incorrect');

    }

}
