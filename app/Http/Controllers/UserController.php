<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            //! Delete Old Img
            if ($request->hasFile('img') && $user->img !== null) {
                $oldPath = public_path('assets/imgs/user/' . $user->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            //! Upload New Img
            if ($request->hasFile('img')) {
                $upload = $request->file('img');
                $imageName = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/imgs/users/');
                $upload->move($destinationPath, $imageName);
                $user->img = $imageName;
            }
            $update = $user->save();
            if ($update) {
                return redirect()->route('users.index')->withSuccess("Updated SuccessFully");
            } else {
                return redirect()->route('users.index')->withErrors('Error Happen');
            }
        }
    }
}
