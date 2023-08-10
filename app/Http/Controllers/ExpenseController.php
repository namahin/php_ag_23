<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function AddExpense()
    {
        return view('components.add-expense');
    }

    public function display()
    {
        $expense = Expense::where('user_id', Auth::id())
            ->select('amount')
            ->get();

        return view('components.data-table', compact('expense'));
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'selectCategory' => 'required',
            'description' => 'required|string',
            'user_id' => 'required|string'
        ]);


        // Create a new Income record in the database
        Expense::create([
            'date' => $validatedData['date'],
            'amount' => $validatedData['amount'],
            'category' => $validatedData['selectCategory'],
            'description' => $validatedData['description'],
            'user_id' => auth()->id(), // Assuming you have a user authentication system
        ]);


        // Fetch categories from the database
        $categories = Category::all();

        // Redirect back to the form with a success message and category data
        return view('components.add-expense')->with('categories', $categories)->with('success', 'Income record added successfully.');
    }
}
