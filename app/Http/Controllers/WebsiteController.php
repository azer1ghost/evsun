<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('website.pages.home');
    }

    // Solution (Because there are changed it )
    public function services(): RedirectResponse
    {
        return redirect()->route('service', Service::active()->select(['id', 'slug'])->first());
    }

    // Solution (Because there are changed it )
    public function serviceDetail(Service $service)
    {
        $next_service = null;//Service::find(Service::where('id', '>', $service->getAttribute('id'))->min('id'));

        if ($service->getAttribute('service_id')){
            $page = "solution-detail";
            $services = $service->getRelationValue('parentService')->subServices();
        }

        elseif ($service->getAttribute('advanced'))
        {
            $page = "solution-main";
            $services = $service->subServices();
        }
        else {
            $page = "solution-detail";
            $services = Service::whereNull('service_id');
        }

        return view("website.pages.{$page}")
            ->with([
                'service' => $service,
                'next_service' => $next_service,
                'services' => $services->active()->select(['id', 'slug', 'title', 'icon', 'detail', 'icon_awesome'])->orderBy('ordering')->get()
            ]);
    }

    // Services (Because there are changed it )
    public function solutions(): RedirectResponse
    {
        return redirect()->route('solution', Solution::active()->select(['id', 'slug'])->first());
    }

    // Services (Because there are changed it )
    public function solutionDetail(Solution $solution)
    {
        return view('website.pages.service-detail')
            ->with([
                'solution' => $solution,
                'solutions' => Solution::active()
                    ->select(['id', 'slug', 'title', 'icon'])
                    ->orderBy('ordering')
                    ->get()
            ]);
    }

    public function blog(string $category = null)
    {
        if (Category::whereSlug($category)->exists()){
            $posts = Category::whereSlug($category)->first()->posts()->latest()->simplePaginate(2);
        }
        else{
            $posts = Post::with('category')->published()->latest()->simplePaginate(2);
        }

        return view('website.pages.blog')
            ->with([
                'posts' => $posts
            ]);
    }

    public function post(Post $post)
    {
        $post->increment('view_count');

        return view('website.pages.post', compact('post'));
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function about()
    {
        return view('website.pages.about')->with([
            'page' => Page::key('about')->firstOrFail()
        ]);
    }

    public function page(Page $page)
    {
        return view('website.pages.page', compact('page'));
    }

    public function callMe(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|min:6|max:20',
        ]);

        Contact::create($validated);

        return back()->withSuccess('Sizinlə əlaqə quracağıq');
    }

    public function contactForm(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email:dns|max:30',
            'number' => 'required|min:6|max:20',
            'subject' => 'required|min:3|max:255',
            'message' => 'required|min:10|max:500'
        ]);

        Contact::create($validated);

//        $user = User::where('role_id', 2)->first();
//
//        $user->notify(new ContactForm([
//            'name'  => $request->get('name'),
//            'email' => $request->get('email'),
//            'message' => $request->get('message'),
//        ]));

        return back()->withSuccess('Təşəkkürlər, sizinlə ən qısa zamanda əlaqə saxlanılacaq!');
    }

    public function sitemap()
    {
        return response(file_get_contents(public_path('sitemap.xml')))
            ->withHeaders([
                'Content-Type' => 'text/xml'
            ]);
    }

    public function robots()
    {
        return response(file_get_contents(public_path('robots.txt')))
            ->withHeaders([
                'Content-Type' => 'text/plain'
            ]);
    }
}
