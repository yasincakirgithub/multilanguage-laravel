<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Contact;


class PageController extends Controller
{
    //
    public function homepage(Request $request)
    {

        $slider_objects = Slider::all();
        $about = About::first();

        return view('pages.homepage', [
            'slider_objects' => $slider_objects,
            'about' => $about
        ]);
    }

    public function about(Request $request)
    {
        $about = About::first();
        return view('pages.about', [
            'about' => $about
        ]);
    }

    public function contact(Request $request)
    {
        return view('pages.contact');
    }


    public function create_contact(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $data = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "message" => $message
        ];

        $contact_obj = Contact::create($data);

        return response()->json([
            'status' => true,
            'message' => "Başarıyla eklendi..",
            'data' => $contact_obj
        ], 200);

    }

}