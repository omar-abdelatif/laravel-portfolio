<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Pages';
        $pages = Pages::all();
        return view('pages.index', compact('pageTitle', 'pages'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'url' => 'required|string',
            'icon' => 'required|string',
            'classes' => 'required|string'
        ]);
        $store = Pages::create($validated);
        if ($store) {
            return redirect()->route('pages.index')->withSuccess('Page Inserted Successfully');
        }
        return redirect()->route('pages.index')->withErrors($validated);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $page = Pages::find($id);
        if ($page) {
            $update = $page->update($request->all());
            if ($update) {
                return redirect()->route('pages.index')->withSuccess('Updated Successfully');
            }
            return redirect()->route('pages.index')->withErrors('Error Happen');
        }
    }
    public function delete($id)
    {
        $page = Pages::find($id);
        if ($page) {
            $page->delete();
            return redirect()->route('pages.index')->withSuccess('Deleted Successfully');
        }
        return redirect()->route('pages.index')->withErrors('Error Happen');
    }
}
