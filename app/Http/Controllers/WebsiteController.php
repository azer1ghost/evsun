<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('website.pages.home');
    }

    public function services(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('service', Service::active()->select(['id','slug'])->first());
    }

    public function serviceDetail(Service $service)
    {
        if ($service->getAttribute('service_id')){
            $page = "service-detail";
            $services = $service->getRelationValue('parentService')->subServices();
        }

        elseif ($service->getAttribute('advanced'))
        {
            $page = "service-main";
            $services = $service->subServices();
        }
        else {
            $page = "service-detail";
            $services = Service::whereNull('service_id');
        }

        return view("website.pages.{$page}")
            ->with([
                'service' => $service,
                'services' => $services->active()->select(['id', 'slug', 'title', 'icon', 'detail'])->orderBy('ordering')->get()
            ]);
    }

    public function solutions(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('solution', Solution::active()->select(['id','slug'])->first());
    }

    public function solutionDetail(Solution $solution)
    {
        return view('website.pages.solution-detail')
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

    public function contactForm(Request $request): \Illuminate\Http\RedirectResponse
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

    public function products()
    {
        return view('website.pages.products')->with([
            'products' => Product::active()->get(),
            'attributes' => Attribute::active()->get(),
        ]);
    }

    public function productDetail(Product $product)
    {
        return view('website.pages.product-detail', compact('product'));
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
