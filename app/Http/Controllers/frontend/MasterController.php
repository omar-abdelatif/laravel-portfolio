<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Information;
use App\Models\Pages;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

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
        $count = Project::count();
        $projects = Project::get();
        $frontProjects = $projects->where('category', 'FrontEnd');
        $frontProjectsCount = $projects->where('category', 'FrontEnd')->count();
        $backProjects = $projects->where('category', 'BackEnd');
        $backProjectsCount = $projects->where('category', 'BackEnd')->count();
        return view('frontend.pages.projects', compact('pageTitle', 'projects', 'pages', 'count', 'frontProjects', 'backProjects', 'frontProjectsCount', 'backProjectsCount'));
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
}
