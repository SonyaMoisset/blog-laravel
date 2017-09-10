<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
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