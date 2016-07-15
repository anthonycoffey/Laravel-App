<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function contact()
    {
        $name = 'Anthony Coffey';
        $email = 'coffey.j.anthony@gmail.com';
        
        return view('pages.contact')->with([
            'name' => $name,
            'email'  => $email
        ]);
    }
    
    public function about()
    {
       $hobbies = ['Live Music', 'Information Technology', 'Video Games', 'Hiking', 'Swimming'];
        
        // now demonstrating use of 'compact' feature
        return view('pages.about', compact('hobbies'));
    }    
}
