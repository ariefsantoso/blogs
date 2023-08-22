<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use App\Models\Tags;
use App\Models\PostTags;
use App\Models\Store;
use App\Models\Contact;
use App\Models\Sosmed;
use App\Models\Tentang;
use App\Models\Visi;
use App\Models\Konsultasi;
use App\Models\Tanya;
use App\Models\Kirim;
use App\Models\View;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PostController extends Controller
{

    public function home()
    {
        // $count = Post::groupBy('category_id')->selectRaw('category_id, count(*) as count')->get();
        $Tags = Tags::count();
        $count = Post::count();
        $user = User::count();
        $countTags = Tags::withCount('posts')->get();
        $countCategory = Category::withCount('posts')->get();
        $countNews = News::withCount('posts')->get();
        $countAuthor = User::withCount('posts')->get();
        return view('home', [
            "title" => "Home - Justitia",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'PostNews' => Post::latest()->take(3)->get(),
            'Tranding' => Post::latest()->take(5)->get(),
            'PostCategory1' => Post::latest()->take(1)->where('category_id', (1))->get(),
            'PostCategory2' => Post::latest()->take(1)->where('category_id', (2))->get(),
            'PostCategory3' => Post::latest()->take(1)->where('category_id', (3))->get(),
            'PostCategory4' => Post::latest()->take(1)->where('category_id', (4))->get(),
            'Publikasi' => Post::latest()->get(),
            'Publikasi2' => Post::latest()->get(),
            'Publikasi3' => Post::latest()->get(),
            'Publikasi4' => Post::latest()->get(),
            'News1' => Post::latest()->get(),
            'News2' => Post::latest()->get(),
            'News3' => Post::latest()->get(),
            'News4' => Post::latest()->get(),
            'PostNews1' => Post::latest()->take(1)->where('news_id', (1))->get(),
            'PostNews2' => Post::latest()->take(1)->where('news_id', (2))->get(),
            'PostNews3' => Post::latest()->take(1)->where('news_id', (3))->get(),
            'PostNews4' => Post::latest()->take(1)->where('news_id', (4))->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Tagsa' => $Tags,
            'Count' => $count,
            'CountTags' => $countTags,
            'CountCategory' => $countCategory,
            'CountNews' => $countNews,
            'CountAuthor' => $countAuthor,
            'Tags' => Tags::all(),
            'User' => $user - 1,
            'Store' => Store::all()


        ]);
    }

    public function index()
    {
        // dd(request('search'));
        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body','like','%' . request('search') . '%');
        // }
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('tags')) {
            $tags = Tags::firstWhere('slug', request('tags'));
            $title = ' in ' . $tags->name;
        }

        if (request('news')) {
            $news = News::firstWhere('slug', request('news'));
            $title = ' in ' . $news->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'Store' => Store::all(),
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
            "posts" => Post::latest()->filter(request(['search', 'category', 'author', 'news', 'tags']))->paginate(7)->withQueryString()
            // "posts" => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        // $Tags = PostTags::find($post->id);

        // $TagsCount = PostTags::withCount(['posts'])->find($post->id);

        $view = Post::findOrfail($post->id);

        $ipAddres = FacadesRequest::ip();

        $viewer = View::where('post_id', $view->id)->where('ip_address', $ipAddres)->first();
        // dd($viewer);
        if (!$viewer) {
            View::create([
                'post_id' => $view->id,
                'ip_address' => $ipAddres
            ]);

            $post->update([
                'viewers' => $post->viewers + 1,
            ]);
        }
        return view('post', [
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            "title" => "Justitia - " . $post->title,
            "active" => 'posts',
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            "post" => $post,
            'Store' => Store::all()
            // 'Tagsa' => $Tags,
            // 'Count' => $TagsCount,
        ]);
    }

    public function tentang()
    {
        return view('tentang', [
            "title" => "Justitia - Tentang Kami",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'post' => Tentang::all(),
            'Tranding' => Post::latest()->take(5)->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Store' => Store::all()
        ]);
    }
    public function visi()
    {
        return view('tentang', [
            "title" => "Justitia - Visi Misi",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'post' => Visi::all(),
            'Tranding' => Post::latest()->take(5)->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Store' => Store::all()
        ]);
    }
    public function konsultasi()
    {
        return view('tentang', [
            "title" => "Justitia - Konsultasi Hukum",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'post' => Konsultasi::all(),
            'Tranding' => Post::latest()->take(5)->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Store' => Store::all()
        ]);
    }
    public function tanya()
    {
        return view('tentang', [
            "title" => "Justitia - Tanya Hukum",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'post' => Tanya::all(),
            'Tranding' => Post::latest()->take(5)->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Store' => Store::all()
        ]);
    }
    public function kirim()
    {
        return view('tentang', [
            "title" => "Justitia - Tanya Hukum",
            'Contact' => Contact::all(),
            'Sosmed' => Sosmed::all(),
            'Categories' => Category::all(),
            'News' => News::all(),
            'post' => Kirim::all(),
            'Tranding' => Post::latest()->take(5)->get(),
            'Popular' => Post::orderBy('viewers', 'desc')->take(5)->get(),
            'Store' => Store::all()
        ]);
    }
}
