<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Training;
use App\Models\User;
use App\Notifications\ContactForm;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class WebsiteController extends Controller
{
    public function homepage(){
        return view('website.pages.home');
    }

    public function services(){
        return view('website.pages.services')
            ->with([
                'services' => Service::active()
                    ->select(['id','slug', 'icon', 'title','meta_description'])
                    ->orderBy('ordering')
                    ->simplePaginate(9)
            ]);
    }

    public function serviceDetail(Service $service){
        return view('website.pages.service-detail')
            ->with([
                'service' => $service,
                'services' => Service::active()
                    ->select(['id','slug','title'])
                    ->orderBy('ordering')
                    ->get()
            ]);
    }

    public function trainings(){
        return view('website.pages.trainings')
            ->with([
                'trainings' => Training::active()
                    ->select(['id', 'slug', 'title', 'meta_description', 'icon'])
                    ->orderBy('ordering')
                    ->paginate(9)
            ]);
    }

    public function trainingDetail(Training $training){
        return view('website.pages.training-detail')
            ->with([
                'training' => $training,
                'trainings' => Training::active()
                    ->select(['id','slug','title'])
                    ->orderBy('ordering')
                    ->get()
            ]);
    }

    public function blog(string $category = null){

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

    public function post(Post $post){
        return view('website.pages.post', compact('post'));
    }

    public function contact(){
        return view('website.pages.contact');
    }

    public function page(Page $page){
        return view('website.pages.page', compact('page'));
    }

    public function contactForm(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::where('role_id', 2)->first();

        $user->notify(new ContactForm([
            'name'  => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]));

        return back()->withSuccess('done');
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
