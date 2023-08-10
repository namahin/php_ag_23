<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddCategory()
    {
        return view('components.add-category');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'category' => 'required|string',
        ]);


        // Create a new Income record in the database
        Category::create([
            'category_name' => $validatedData['category']
        ]);

        // Fetch categories from the database
        $categories = Category::all();

        // Redirect back to the form with a success message and category data
        return view('components.add-category')->with('success', 'Income record added successfully.');
    }
}
