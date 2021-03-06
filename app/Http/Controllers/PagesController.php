<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex() {
        $posts = Post::latest()->limit(4)->get();

        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $first = 'Sonya';
        $last = 'Moisset';

        $fullname = $first . " " . $last;
        $email = 'sm@example.com';

        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = $email;
        
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }
}