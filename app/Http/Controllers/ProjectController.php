<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $pageTitle = 'Projects';
        $categories = Category::all();
        $tags = Tags::all();
        $projects = Project::all();
        return view('Projects.index', compact('pageTitle', 'categories', 'tags', 'projects'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'tags' => 'required|array',
            'tags.*' => 'required|string|distinct',
            'github' => 'required',
            'url' => 'required'
        ]);
        if ($request->hasFile('img')) {
            $upload = $request->file('img');
            $name = time() . '.' . $upload->getClientOriginalExtension();
            $destinationPath = public_path('assets/imgs/projects/');
            $upload->move($destinationPath, $name);
        } elseif (!$request->file('img')) {
            $name = 'download.png';
        }
        $category = Category::where('title', $validated['category'])->first();
        $all_tags = $validated['tags'];
        $store = Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $validated['category'],
<<<<<<< HEAD
            'tags' => implode(',', $validated['tags']),
=======
            'tags' => implode(',', $all_tags),
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
            'github' => $validated['github'],
            'url' => $validated['url'],
            'img' => $name,
            'category_id' => $category->id,
<<<<<<< HEAD
            'tag_id' => $tags->id
=======
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        ]);
        if ($store) {
            return redirect()->route('projects.index')->with('success', 'Project Inserted Successfully');
        } else {
            return redirect()->route('projects.index')->withErrors($validated);
        }
    }
    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project) {
<<<<<<< HEAD
            $project->delete();
            return redirect()->route('projects.index')->withSuccess("Deleted successfully");
=======
            if ($project->img !== null) {
                $oldPath = public_path('assets/imgs/projects/' . $project->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            $project->delete();
            return redirect()->route('projects.index')->with([
                'success' => "Deleted successfully",
            ]);
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        }
        return redirect()->route('projects.index')->withErrors('Error Happen');
    }
    public function update(Request $request)
    {
        $project =  Project::find($request->id);
        if ($project) {
<<<<<<< HEAD
            $project->title = $request->title;
            $project->description = $request->description;
            $project->category = $request->category;
            $project->tags = implode(',', $request->tags);
            $project->github = $request->github;
            $project->url = $request->url;
            $update = $project->save();
            if ($update)
                return redirect()->route('projects.index')->withSuccess("Updated successfully");
=======
            //! Delete Old Img
            if ($request->hasFile('img') && $project->img !== null) {
                $oldPath = public_path('assets/imgs/projects/' . $project->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            // ! Upload New Image
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                $upload = $request->file('img');
                $name = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/imgs/projects/');
                $upload->move($destinationPath, $name);
                $project->img = $name;
            } elseif (!$request->file('img')) {
                $name = 'download.png';
            }
            $project->title = $request->title;
            $project->description = $request->description;
            $project->category = $request->category;
            $project->tags = implode(',', $request->input('tags'));
            $project->github = $request->github;
            $project->url = $request->url;
            $update = $project->save();
            if ($update) {
                return redirect()->route('projects.index')->withSuccess("Updated successfully");
            }
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        }
        return redirect()->route('projects.index')->withErrors('Error Happen');
    }
}
