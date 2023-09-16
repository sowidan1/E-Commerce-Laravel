<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubSubcategoryController extends Controller
{
    public function index($category_id)
    {
        // return all subcategories for a specific category
    }

    public function show( $id)
    {
        // return a specific subcategory for a specific category
    }

    public function create(Request $request, $id)
    {
        // create a new subcategory for a specific category
    }

    public function update(Request $request, $id)
    {
        // update a specific subcategory for a specific category
    }
}
