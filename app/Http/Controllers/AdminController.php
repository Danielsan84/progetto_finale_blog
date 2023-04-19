<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();

        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function setAdmin(User $user){
        $user->update([
            'is_admin' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso amministratore 1\'utente scelto');
    }

    public function setRevisor(User $user){
        $user->update([
            'is_revisor' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso revisore 1\'utente scelto');
    }

    public function setWriter(User $user){
        $user->update([
            'is_writer' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso scrittore 1\'utente scelto');
    }

    public function editTag(Request $request, $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);

        $tag->update([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente modificato il tag scelto');
    }

    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category->update([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente modificato la categoria scelta');
    }

    public function deleteCategory(Category $category){
        $category->delete();

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente eliminato la categoria scelta');
    }

    public function storeCategory(Request $request){
        Category::create([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente creato una nuova categoria');
    }
}
