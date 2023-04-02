<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function HomePage() {
        return view('homepage.index');
    }

    public function AboutPage() {
        return view('homepage.about');
    }

    public function ContactPage() {
        return view('homepage.contact');
    }

    public function ServicePage() {
        return view('homepage.service');
    }

    public function AppointmentPage() {
        return view('homepage.appointment');
    }
}
