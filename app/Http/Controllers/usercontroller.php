<?php

namespace App\Http\Controllers;

use App\Http\Requests\userregister;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class usercontroller extends Controller
{
    public function register()
    {
        return view('users.register');
    }

    public function handleregister(User $user, userregister $request)
    {
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'Votre compte a bien été créé!');
    }

    public function login()
    {
        return view('users.login');
    }
    public function handlelogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/index');
        } else {
            return redirect()->back()->with('error', 'Votre Email ou Mot de passe est incorrect ');
        }
    }
    public function dashbord()
    {
        return view('dashbord');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function mine(Article $article)
    {
        $userarticles = Article::where('users_id', Auth::id())->get();
        return view('article.mine', [
            'userarticles' => $userarticles,
        ]);
    }
}
