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
<<<<<<< HEAD
        $allInfos = Information::all();
        return view('Information.index', compact('pageTitle', 'allInfos'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:information,email',
            'phone_number' => 'required|min:10|max:25',
            'address' => 'required',
            'age' => 'required|integer|numeric',
            'img' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'cv' => 'required',
            'facebook_link' => 'required|string',
            'github_link' => 'required|string',
            'whasapp_link' => 'required|string',
            'linkedin_link' => 'required|string',
        ]);
        if ($request->hasFile('img')) {
            $upload = $request->file('img');
            $name = time() . '.' . $upload->getClientOriginalExtension();
            $destinationPath = public_path('assets/imgs/info/');
=======
        return view('Information.index', compact('pageTitle', 'infos'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(["name" => 'required|string',
            'age' => 'required|numeric|integer',
            'address' => 'required|alpha_num|max:100',
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
            $destinationPath = public_path('assets/imgs/information/');
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
            $upload->move($destinationPath, $name);
        } elseif (!$request->file('img')) {
            $name = 'download.png';
        }
<<<<<<< HEAD
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
=======
        $store = Information::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'address' => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'facebook_link' => $validated['facebook_link'],
            'github_link' => $validated['github_link'],
            'whasapp_link' => $validated['whatsapp_link'],
            'linkedin_link' => $validated['linkedin_link'],
            'img' => $name
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        ]);
        if ($store) {
            return redirect()->route('infos.index')->withSuccess('Inserted Successfully');
        }
        return redirect()->route('infos.index')->withErrors($validated);
    }
    public function update(Request $request)
    {
<<<<<<< HEAD
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
            //! Delete Old PDF
            if ($request->hasFile('cv') && $infos->cv !== null) {
                $oldPath = public_path('assets/files/cv/' . $infos->cv);
=======
        $info = Information::find($request->id);
        if ($info) {
            //! Delete Old Image
            if ($request->hasFile('img') && $info->img !== null) {
                $oldPath = public_path('assets/imgs/information/' . $info->img);
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            //! Upload New Image
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                $upload = $request->file('img');
                $name = time() . '.' . $upload->getClientOriginalExtension();
<<<<<<< HEAD
                $destinationPath = public_path('assets/imgs/info/');
                $upload->move($destinationPath, $name);
                $infos->img = $name;
            } elseif (!$request->file('img')) {
                $name = 'download.png';
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
    public function delete($id)
    {
        $info = Information::find($id);
        if ($info) {
            //! Delete Img
            if ($info->img !== null) {
                $oldPath = public_path('assets/imgs/info/' . $info->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            //! Delete PDF
            if ($info->cv !== null) {
                $oldPath = public_path('assets/files/cv/' . $info->cv);
=======
                $destinationPath = public_path('assets/imgs/information/');
                $upload->move($destinationPath, $name);
                $info->img = $name;
            }
            //! Update Data
            $info->name = $request->name;
            $info->age = $request->age;
            $info->phone_number = $request->phone_number;
            $info->email = $request->email;
            $info->address = $request->address;
            $info->facebook_link = $request->facebook_link;
            $info->github_link = $request->github_link;
            $info->whatsapp_link = $request->whatsapp_link;
            $info->linkedin_link = $request->linkedin_link;
            $update = $info->save();
            if ($update) {
                return redirect()->route('infos.index')->withSuccess('Updated Successfully');
            }
        } else {
            return redirect()->route('infos.index')->withErrors('Error Happen');
        }
    }
    public function destroy($id)
    {
        $info = Information::find($id);
        if ($info) {
            if ($info->img !== null) {
                $oldPath = public_path('assets/imgs/information/' . $info->img);
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
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
