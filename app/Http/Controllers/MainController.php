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

    public function service($service)
    {
        if ($service === 'cyber-security') {
            return view('services.cyber-security');
        } elseif ($service === 'enterprise-it-solutions') {
            return view('services.enterprise-it-solutions');
        } elseif ($service === 'web-development') {
            return view('services.web-development');
        } elseif ($service === 'software-solutions') {
            return view('services.software-solutions');
        } else {
            return view('services.' . $service);
        }
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

    /**
     * Display the blog index page with search, filtering, and pagination.
     */
    public function blog(Request $request)
    {
        $search = $request->get('search');
        $year = $request->get('year');
        $perPage = 10; // Posts per page

        $posts = Post::query()
            ->search($search)
            ->byYear($year)
            ->published()
            ->paginate($perPage)
            ->withQueryString(); // Preserve query parameters in pagination links

        $availableYears = Post::getAvailableYears();

        return view('blog.index', compact('posts', 'search', 'year', 'availableYears'));
    }

    /**
     * Display a single blog post.
     */
    public function post(Request $request, string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $relatedPosts = $post->getRelatedPosts(3);

        // Get previous and next posts
        $previousPost = Post::where('created_at', '<', $post->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        $nextPost = Post::where('created_at', '>', $post->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        return view('blog.show', compact('post', 'relatedPosts', 'previousPost', 'nextPost'));
    }

    /**
     * Display the portfolio page.
     */
    public function portfolio()
    {
        $projects = Project::latest()->get();
        return view('Projects', compact('projects'));
    }

    /**
     * Display a single project.
     */
    public function project(string $slug)
    {
        // For now, we'll use ID since Project model doesn't have slug
        $project = Project::findOrFail($slug);
        return view('portfolio.show', compact('project'));
    }

    /**
     * Display blog archive by year and optionally by month.
     */
    public function archive(Request $request, int $year, ?int $month = null)
    {
        $query = Post::whereYear('created_at', $year);

        if ($month) {
            $query->whereMonth('created_at', $month);
        }

        $posts = $query->published()->paginate(10);
        $availableYears = Post::getAvailableYears();

        $archiveTitle = $month
            ? date('F Y', mktime(0, 0, 0, $month, 1, $year))
            : $year;

        return view('blog.archive', compact('posts', 'year', 'month', 'archiveTitle', 'availableYears'));
    }

    /**
     * Generate RSS feed for blog posts.
     */
    public function rss()
    {
        $posts = Post::published()->limit(20)->get();

        return response()->view('blog.rss', compact('posts'))
            ->header('Content-Type', 'application/rss+xml; charset=UTF-8');
    }

    /**
     * Generate XML sitemap.
     */
    public function sitemap()
    {
        $posts = Post::published()->get();

        return response()->view('sitemap', compact('posts'))
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
