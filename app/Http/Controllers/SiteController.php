<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function skills()
    {
        return view('pages.skills');
    }

    public function portfolio()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'IAS Project',
                'description' => 'An innovative web application that streamlines administrative processes and improves user experience through modern design and efficient functionality.',
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap'],
                'image' => 'project1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Portfolio Website',
                'description' => 'A responsive portfolio website showcasing technical skills and projects with clean design and smooth user interactions.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'Laravel'],
                'image' => 'project2.jpg'
            ]
        ];

        return view('pages.portfolio', compact('projects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // For demo purposes, we'll just display the submitted data
        return back()->with('success', 'Thank you for your message! I will get back to you soon.')
                    ->with('submitted_data', $request->only(['name', 'email', 'subject', 'message']));
    }
}
