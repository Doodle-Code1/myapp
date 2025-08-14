<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\BlogPost;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        // Return the home view and pass model instances
        return view('home', [
            'services' => Service::take(3)->get(),
            'testimonials' => Testimonial::inRandomOrder()->take(3)->get(),
            'teamMembers' => TeamMember::take(3)->get(),
            'posts' => BlogPost::latest()->take(3)->get(),
        ]);
    }
}
