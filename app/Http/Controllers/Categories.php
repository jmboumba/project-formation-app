<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class Categories extends Controller
{
    //
    public function showCategorie(){
        $categories = categorie::all();
        return view('admin.category.categories', compact('categories'));
    }

    public function store(Request $request){

        $categorie = new categorie; 

        $categorie->label = $request->label;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('categorie',$imagename);
        $categorie->image = $imagename;

        $categorie->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

}
