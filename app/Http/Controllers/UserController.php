<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexprofil()
    {
        return view('user-profile', array('user' => Auth::user()) );
    }

    public function editProfile(Request $request)
    {
      if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path)('/img/upload/avatar'.$filename);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        request view('user-profile', array('user' => Auth::user()));
    }


    /**
    * Mengupdate profil
    */
    public function updateProfile()
    {
        $this->validate($request,[
          'name' => 'required|max:255',
          'username' => 'required|min:3|max:20|unique:users',
          'password' => 'required|min:6|confirmed',
        ]);

        Auth::user()->update([
           'name' => $request->name,
           'username' => $request->username,
           'password' => $request->password
        ]);

        return redirect('/edit-profil');
}
    }

    /**
    * Menampilkan halaman edit password
    */
    public function editPassword()
    {
      // code...
    }

    /**
    * Mengupdate password
    */
    public function updatePassword()
    {
      // code...
    }
}
