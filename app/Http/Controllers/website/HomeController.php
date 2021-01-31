<?php

namespace App\Http\Controllers\Website;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Mail;
use Redirect;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('website.index');
    }

    public function home2()
    {
        return view('website.index-2');
    }
    public function about()
    {
        return view('website.about');
    }

    public function company()
    {
        return view('website.company');
    }

    public function overview()
    {
        return view('website.overview');
    }

    public function whyus()
    {
        return view('website.whyus');
    }
    public function businessmodel()
    {
        return view('website.businessmodel');
    }

    public function ourteam()
    {
        return view('website.ourteam');
    }
    public function service()
    {
        return view('website.service');
    }
    public function asic()
    {
        return view('website.asic');
    }
    public function analog()
    {
        return view('website.analog');
    }
    public function embedded()
    {
        return view('website.embedded');
    }
    public function career()
    {
        return view('website.career');
    }
    public function opportunities()
    {
        return view('website.opportunities');
    }
    public function lifeatsivaltech()
    {
        return view('website.lifeatsivaltech');
    }
    public function gallery()
    {
        return view('website.gallery');
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function storeContact(ContactRequest $request)
    {
        Mail::send('emails.contact', ['request' => $request], function ($m) use ($request) {
            $m->from('sivaltechblr@gmail.com', 'From Website');
            $m->to('sales@sivaltech.com', $request->name)->subject('Your have a message!');
        });
        return redirect()->back()->with('message', 1);
    }

    public function gaddam()
    {
        return view('website.gaddam');
    }

    public function reddy()
    {
        return view('website.reddy');
    }
    public function organizationculture()
    {
        return view('website.organizationculture');
    }

}
