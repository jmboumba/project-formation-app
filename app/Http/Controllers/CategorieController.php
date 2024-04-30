<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    public function showCategorie(){
        $categories = categorie::all();
        return view('admin.category.categories', compact('categories'));
    }

    public function storeCategorie(Request $request){

        $categorie = new categorie; 

        $categorie->label = $request->label;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('categorie',$imagename);
        $categorie->image = $imagename;

        $categorie->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function deleteCategorie($id){
        $categorie = categorie::find($id);

        $categorie->delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }
}
