<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{
    public function index() {
        $users = User::with('books')->get();
        return view('index', ['users' => $users]);

//        $data = DB::table('users')->where('id', '=', '1')->get();

        dd($data);
    }

    public function categoryBooks() {
        $books = Category::with('books')->get();
        dd($books);
//        return view('index', ['users' => $users]);
    }
}
