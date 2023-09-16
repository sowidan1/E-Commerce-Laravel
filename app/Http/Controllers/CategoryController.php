<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return all categories
        return view('admin.categories.create');
    }
    public function index2()
    {
        // return all categories
        
        $categories =  Category::get();

        
        return view('admin.categories.list',compact('categories'));
    }
    public function show($id)
    {
        // return a specific category
    }
    public function create(Request $request)
    {
        //dd($request->all());
        
       $data = $request->all();
       $data['slug']= $this->createSlug($data['name']);
       
       Category::create($data);

      return view('admin.categories.create');
        
        // create a new category
    }
    public function showupdate( $id)
    {

        $category = Category::find($id);

        return view('admin.categories.edit',compact('category'));
        // update a specific category
    }
    
    public function update(Request $request, $id)
    {

        $category = Category::find($id);

        $category->update($request->all());
        return redirect()->route('categories.index2');

        // update a specific category
    }

    public function delete($id)
    {
        
        $category = Category::find($id);

        if($category)
        {
            $category->delete();
            return redirect()->route('categories.index2');
        }
        // delete a specific category
    }
    /**
     * Create a slug for a given category name.
     *
     * @param  string  $name
     * @return string
     */
    public function createSlug($name)
    {
        // Convert the category name to lowercase
        $slug = strtolower($name);
        // Replace spaces and special characters with hyphens
        $slug = preg_replace('/[\s\-]+/', '-', $slug);

        // Remove any remaining special characters
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);
        // Ensure the slug is unique
        $i = 1;
        $originalSlug = $slug;
        while (Category::where('slug', '=', $slug)->first()) {
            $slug = $originalSlug . '-' . $i++;
        }

        return $slug;
    }
}
