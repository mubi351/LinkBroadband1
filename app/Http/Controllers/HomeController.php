<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function residential()
    {
        return view('pages.residential');
    }
    public function business()
    {
        return view('pages.business');

    }
    public function voice_residential()
    {
        return view('pages.voice_residential');
    }
    public function voice_business()
    {
        return view('pages.voice_business');

    }
    public function hardware()
    {
        return view('pages.hardware');

    }
    public function faq()
    {
        return view('pages.faq');

    }
    public function news()
    {
        return view('pages.news');
    }
    public function broadbandform()
    {
        return view('pages.broadbandform');
    }
    public function about_us()
    {
        return view('pages.about_us');
    }
    public function contact_us()
    {
        return view('pages.contact_us');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
    public function tc_mob_dig()
    {
        return view('pages.tc_form_dig_mob');
    }
    public function code_of_complaints()
    {
        return view('pages.code_of_complaints');
    }
    
    public function tc()
    {
        return view('pages.terms_and_conditions');
    }
    public function save_contact(Request $request)
    {
        $this->validate($request,[
            'fname' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'category' =>'required',
            'message' =>'required',

        ]);
        $data = array(
            'name'      =>  $request->fname,
            'message'   =>   $request->message,
            'email' => $request->email,
            'phone'  => $request->phone,
            'category'  => $request->category,
        );
        Mail::to('mubimusthafa51@gmail.com')->send(new ContactMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }




}
