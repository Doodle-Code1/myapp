<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function show(Service $service) {
        return view('services.show', ['service' => $service]);
    }
}

