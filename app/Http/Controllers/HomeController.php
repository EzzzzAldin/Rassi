<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\ContactUsMessage;
use App\Models\HomePage;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = HomePage::first();

        return view('pages.index', compact('homepage'));
    }

    public function aboutus()
    {
        $aboutus = AboutUs::first();

        return view('pages.aboutus', compact('aboutus'));
    }

    public function terms()
    {
        $terms = TermsCondition::active()->get();

        return view('pages.terms', compact('terms'));
    }

    public function contactus()
    {
        $contactus = ContactUs::first();

        return view('pages.contact-us', compact('contactus'));
    }

    public function contactSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        ContactUsMessage::create($data);
        $msg = app()->getLocale() == 'en' ? 'Your message has been sent successfully' : 'تم إرسال رسالتك بنجاح';

        return redirect()->back()->with('success', $msg);
    }
}
