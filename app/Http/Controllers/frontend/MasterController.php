<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Pages;
use App\Mail\SendMail;
use App\Models\Project;
use App\Models\Service;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $pages = Pages::all();
        $info = Information::first();
        return view('frontend.master', compact('pageTitle', 'pages', 'info'));
    }
    public function servicesPage()
    {
        $pageTitle = 'Services';
        $pages = Pages::all();
        $services = Service::all();
        return view('frontend.pages.services', compact('pageTitle', 'pages', 'services'));
    }
    public function projectPage()
    {
        $pageTitle = 'Projects';
        $pages = Pages::all();
        $allProjects = Project::get();
        $allProjectsCount = $allProjects->count();
        $frontProjects = $allProjects->where('category', 'FrontEnd');
        $frontProjectsCount = $allProjects->where('category', 'FrontEnd')->count();
        $backProjects = $allProjects->where('category', 'BackEnd');
        $backProjectsCount = $allProjects->where('category', 'BackEnd')->count();
        $designProjects = $allProjects->where('category', 'Ui/Ux');
        $designProjectsCount = $allProjects->where('category', 'Ui/Ux')->count();
        $mobileProjects = $allProjects->where('category', 'Mobile');
        $mobileProjectsCount = $allProjects->where('category', 'Mobile')->count();
        $fullstackProjects = $allProjects->where('category', 'FullStack');
        $fullstackProjectsCount = $allProjects->where('category', 'FullStack')->count();
        return view('frontend.pages.projects', compact([
            'pageTitle',
            'pages',
            'allProjects',
            'allProjectsCount',
            'frontProjects',
            'frontProjectsCount',
            'backProjects',
            'backProjectsCount',
            'designProjects',
            'designProjectsCount',
            'mobileProjects',
            'mobileProjectsCount',
            'fullstackProjects',
            'fullstackProjectsCount',
        ]));
    }
    public function blogPage()
    {
        $pageTitle = 'Blogs';
        $pages = Pages::all();
        $blogs = Blog::all();
        return view('frontend.pages.blogs', compact('pageTitle', 'pages', 'blogs'));
    }
    public function aboutPage()
    {
        $pageTitle = 'About';
        $pages = Pages::all();
        $about = Information::first();
        return view('frontend.pages.about', compact('pageTitle', 'pages', 'about'));
    }
    public function contactPage()
    {
        $pageTitle = 'About';
        $pages = Pages::all();
        $contact =  Information::first();
        return view('frontend.pages.contact', compact('pageTitle', 'pages', 'contact'));
    }
    public function projectDetails($name)
    {
        $pageTitle = 'Project';
        $pages = Pages::all();
        $detail = Project::find($name);
        return view('frontend.pages.projectDetails', compact('detail', 'pageTitle', 'pages'));
    }
    public function errorPage()
    {
        return view('frontend.pages.errors');
    }
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'phone' => 'required|integer',
            'msg' => 'required'
        ]);
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'phone' => $validated['phone'],
            'msg' => $validated['msg'],
        ];
        $sent = Mail::to('omar.abdelatiif@gmail.com')->send(new SendMail($data));
        if ($sent) {
            dd('Email Sent Successfully');
        } else {
            dd('Error Happen While Sending');
        }
        // return view('emails.index');
    }
}
