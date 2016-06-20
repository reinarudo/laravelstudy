<?php

namespace App\Http\Controllers;

class PagesController extends Controller{


    public function getIndex(){
        #process variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model if needed
        #pass the data to the correct view

        return view('pages.welcome');
    }

    public function getAbout(){
        $first = 'Reynald';
        $last = 'Tolentino';

        $fullname = $first . ' ' . $last;
        $email = 'reynald.tolentino@gmail.com';

        //return view('pages.about')->with('fullname', $fullname);
        //return view('pages.about')->withFullname($fullname)->withEmail($email);

        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

}