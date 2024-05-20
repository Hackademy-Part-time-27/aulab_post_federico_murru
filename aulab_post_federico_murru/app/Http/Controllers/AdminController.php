<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequest = User::where('is_admin', NULL)->get();
        $adminRequest = User::where('is_revisor', NULL)->get();
        $adminRequest = User::where('is_writer', NULL)->get();
        return view('admin.dashboard', compact('adminRequest', 'revisorRequest', 'writerRequest'));

    }

    public function setAdmin(User $user){
        $user->is_admin = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message', 'user state changed to admin');
    }
}
