<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $infos = Information::all();
        $pageTitle = 'Information';
        $allInfos = Information::all();
        return view('Information.index', compact('pageTitle', 'allInfos'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => 'required|string',
            'age' => 'required|numeric|integer',
            'address' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'facebook_link' => 'required',
            'github_link' => 'required',
            'whasapp_link' => 'required',
            'linkedin_link' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $upload = $request->file('img');
            $name = time() . '.' . $upload->getClientOriginalExtension();
            $destinationPath = public_path('assets/imgs/info/');
            $upload->move($destinationPath, $name);
        }
        if ($request->hasFile('cv')) {
            $upload = $request->file('cv');
            $cv = time() . '.' . $upload->getClientOriginalExtension();
            $destinationPath = public_path('assets/files/cv/');
            $upload->move($destinationPath, $cv);
        }
        $store = Information::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'address' => $validated['address'],
            'age' => $validated['age'],
            'facebook_link' => $validated['facebook_link'],
            'github_link' => $validated['github_link'],
            'whasapp_link' => $validated['whasapp_link'],
            'linkedin_link' => $validated['linkedin_link'],
            'img' => $name,
            'cv' => $cv
        ]);
        if ($store) {
            return redirect()->route('infos.index')->withSuccess('Inserted Successfully');
        }
        return redirect()->route('infos.index')->withErrors($validated);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $infos = Information::find($id);
        if ($infos) {
            //! Delete Old Img
            if ($request->hasFile('img') && $infos->img !== null) {
                $oldPath = public_path('assets/imgs/info/' . $infos->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            //! Upload New Image
            if (
                $request->hasFile('img') && $request->file('img')->isValid()
            ) {
                $upload = $request->file('img');
                $name = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/imgs/info/');
                $upload->move($destinationPath, $name);
                $infos->img = $name;
            } elseif (!$request->file('img')) {
                $name = 'download.png';
            }
            //! Delete Old CV
            if ($request->hasFile('cv') && $infos->cv !== null) {
                $oldPath = public_path('assets/files/cv/' . $infos->cv);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            //! Upload New CV
            if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
                $upload = $request->file('cv');
                $cv = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/files/cv/');
                $upload->move($destinationPath, $cv);
                $infos->cv = $cv;
            }
            $infos->name = $request->name;
            $infos->email = $request->email;
            $infos->phone_number = $request->phone_number;
            $infos->address = $request->address;
            $infos->age = $request->age;
            $infos->facebook_link = $request->facebook_link;
            $infos->github_link = $request->github_link;
            $infos->whasapp_link = $request->whasapp_link;
            $infos->linkedin_link = $request->linkedin_link;
            $update = $infos->save();
            if ($update) {
                return redirect()->route('infos.index')->withSuccess('Updated Successfully');
            } else {
                return redirect()->route('infos.index')->withErrors('Error Happen');
            }
        }
    }
    public function destroy($id)
    {
        $info = Information::find($id);
        if ($info) {
            if ($info->img !== null) {
                $oldPath = public_path('assets/imgs/info/' . $info->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            if ($info->cv !== null) {
                $oldPath = public_path('assets/files/cv/' . $info->cv);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            $info->delete();
            return redirect()->route('infos.index')->withSuccess('Deleted Successfully');
        }
        return redirect()->route('infos.index')->withErrors('Error Happen');
    }
}
