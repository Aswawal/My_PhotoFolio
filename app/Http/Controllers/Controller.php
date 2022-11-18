<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index', [
            "users" => User::all(),
            "posts" => Post::all(),
            "title" => "index",
            // "nama" => "Aswawal"
        ]);
        
    }

    public function about()
    {
        return view('about', [
            "users" => User::all(),
            "title" => "about",
            "nama" => "Aswawal"
        ]);
        
    }

    public function gallery()
    {
        return view('gallery', [
            "posts" => Post::all(),
            "title" => "gallery",
            "nama" => "Aswawal"
        ]);
        
    }

    public function contact()
    {
        return view('contact', [
            "title" => "contact",
            "nama" => "Aswawal"
        ]);
        
    }

    public function gallery_single()
    {
        return view('gallery-single', [
            "title" => "gallery-single",
            "nama" => "Aswawal"
        ]);
        
    }

    public function services()
    {
        return view('services', [
            "users" => User::all(),
            "title" => "services",
            "nama" => "Aswawal"
        ]);
        
    }

    public function sample_inner_page()
    {
        return view('sample-inner-page', [
            "title" => "sample-inner-page",
            "nama" => "Aswawal"
        ]);
        
    }
}