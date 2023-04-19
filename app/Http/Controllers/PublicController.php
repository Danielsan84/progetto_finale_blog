<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareersRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

 

class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::where('is_accepted' , true )->orderby('created_at' , 'desc')->take(4)->get();
        return view('home' , compact('articles'));
    }

    public function __construct(){
        $this->middleware('auth')->except('home');
    }

    public function careers()
    {
        return view('careers');
    }

    public function careersSubmit(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@aulabpost.it')->send(new CareersRequestMail(compact('role' , 'email' , 'message')));

        switch ($role) { 
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                break;    

            case 'writer':
                $user->is_writer = NULL;
                break;    
        }

        $user->update();

        return redirect()->route('home')->with('message' , 'Grazie per averci contattato');
        
    }
    

    // Controller function for switch color
public function update(Request $request)
{
    $selectedTheme = $request->input('selected_theme');
    $allowedThemes = ['default', 'dark'];
    if (in_array($selectedTheme, $allowedThemes)) {
        session(['selected_theme' => $selectedTheme]);
    }
    return redirect()->back();
}


    



    

    
}
