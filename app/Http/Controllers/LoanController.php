<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with('book', 'user')->get();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('loans.create', compact('books', 'users'));
    }

    public function store(Request $request)
    {
        $loan = Loan::create($request->all());
        return redirect()->route('loans.index');
    }

    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }
}
