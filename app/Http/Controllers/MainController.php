<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        $projects = Project::latest()->limit(3)->get();

        return view('Home', compact('posts', 'projects'));
    }

    public function about()
    {
        return view('About');
    }

    public function services()
    {
        return view('Services');
    }

    public function contact()
    {
        return view('Contact');
    }
    public function sendContactForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Create a new contact record
        if (!isset($request->bot_check)) {
            Contact::create($validatedData);
        } else {
            return redirect()->back()->with('error', 'Bot detected!');
        }
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}