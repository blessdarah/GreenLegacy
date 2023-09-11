<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\AboutSection;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Update;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome')->with([
            "services" => Service::all()->take(6),
            "members" => TeamMember::all()->take(4),
            "partners" => Partner::all()->take(4),
            "posts" => Post::all()->take(4),
            "events" => Event::all()->take(4),
            "updates" => Update::all()->take(8),
            "banners" => Banner::where('is_active', true)->get()
        ]);
    }

    public function services()
    {
        return view('services')->with([
            "services" => Service::all()->take(6),
            'faqs' => Faq::all()->take(8)
        ]);
    }

    public function showService($id, $slug)
    {
        $service = Service::findOrFail($id);
        $otherServices = Service::inRandomOrder()->take(4)->get();
        return view('show-service')->with([
            'service' => $service,
            'otherServices' => $otherServices,
        ]);
    }

    public function about()
    {
        return view('about')->with([
            "members" => TeamMember::all(),
            "sections" => AboutSection::all()
        ]);
    }

    public function contact()
    {
        return view('contact')->with([
            "members" => TeamMember::all()
        ]);
    }

    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Mail::to("info@lem-dfoundation.org")
        ->send(new ContactUsMail($data));

        return redirect()->back()->with("success", "Thank you for reaching out. We will respond shortly.");
    }

    public function events()
    {
        return view('events')->with([
            "events" => Event::latest()->get()
        ]);
    }

    public function blog()
    {
        return view('posts.index')->with([
            "posts" => Post::paginate(6)
        ]);
    }

    public function showBlog($id, $slug)
    {
        $post = Post::find($id);
        $similarPosts = Post::inRandomOrder()
        ->where('id', '!=', $id)
        ->where('is_published', true)
        ->take(4);
        return view('posts.show')->with([
            "post" => $post,
            "similarPosts" => $similarPosts
        ]);
    }

    public function projects()
    {
        return view('projects')->with([
            "projects" => Project::paginate(6)
        ]);
    }

    public function showProject($id, $slug)
    {
        $project = Project::findOrFail($id);
        $otherProjects = Project::inRandomOrder()->take(4)->get();
        return view('show-project')->with([
            'project' => $project,
            'otherProjects' => $otherProjects,
        ]);
    }
}
