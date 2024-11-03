<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Message;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Catalogue;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        // $slides = Slide::orderBy('ordering', 'asc')->paginate();
        // $testimonials = Testimonial::All();
        // $teams = Team::All();
        $lang =  App::getLocale();
        $posts = Post::active($lang)->limit(3)->get();
        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        $services->load('images');

        return view('home.index', ['services' => $services, 'posts' => $posts]);
    }
    public function order()
    {
        DB::beginTransaction();
        try {
            $order = Order::create([
                'code' => Str::random(8),
                'name' => request('name'),
                'phone' => request('phone'),
                'address' => request('address'),
                'note' => request('note'),
            ]);
            $detail = OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => request('product_id')
            ]);
            DB::commit();
            return response()->json(['success' => true, 'msg' => 'Yêu cầu của bạn đã được gửi tới Admin. Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất.']);
        } catch (Exception $ex) {
            DB::rollback();
            return response()->json(['success' => false, 'msg' => $ex->getMessage()]);
        }
    }
    public function contact()
    {
        if (request()->isMethod('post')) {
            $validator = Validator::make(request()->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'regex:/^0[0-9]{9,10}$/',
                'service' => 'required'
            ], [
                'name.required' => 'Vui lòng nhập tên của bạn.',
                'email.required' => 'Vui lòng nhập email của bạn.',
                'email.email' => 'Email không hợp lệ.',
                'mobile.regex' => 'Số điện thoại không hợp lệ.',
                'service.required' => 'Vui lòng chọn dịch vụ.'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            Message::create([
                'name' => request('name'),
                'email' => request('email'),
                'mobile' => request('mobile'),
                'content' => request('service')
            ]);
            return redirect()->back()->with('message', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ liên lạc với bạn ngay!');
        }
        $lang =  App::getLocale();
        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        $services->load('images');

        return view('contact.index', compact('services'));
    }
    public function about()
    {
        $lang =  App::getLocale();
        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        $services->load('images');
        return view('home.about', compact('services'));
    }

    public function service()
    {
        $lang =  App::getLocale();
        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        $services->load('images');
        return view('home.service', compact('services'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function advise()
    {
        if (request()->isMethod('post')) {
            Message::create([
                'name' => request('name'),
                'mobile' => request('mobile'),
                'email' => request('email'),
                'target' => request('target'),
                'content' => request('content')
            ]);
            return redirect()->back()->with('message', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ liên lạc với bạn ngay!');
        }
        return view('contact.advise');
    }

    public function vision()
    {
        $lang =  App::getLocale();
        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        return view('home.vision&mission', compact('services'));
    }
}
