<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{


    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
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