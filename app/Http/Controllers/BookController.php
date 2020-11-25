<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $books = auth()->user()->books()->latest()->paginate(3);
        if(request()->filter){
            if(request()->filter == 'regular'){
                $books = auth()->user()->books()->regular()->latest()->paginate(3);
            }else if(request()->filter == 'premium'){
                $books = auth()->user()->books()->premium()->latest()->paginate(3);
            }
        }
        return view('author.books.index', compact('books'));
    }

    public function create(){
        return view('author.books.create');
    }

    public function store(){
        // dd(request()->all());
        request()->validate([
            'book_category_id'=>'required',
            'book_type_id'=>'required',
            'language_id'=>'required',
            'lead_college_id'=>'required',
            'lead_character_id'=>'required',
            'is_premium'=>'required',
            'title'=>'required',
            'genre_id'=>'required',
            'blurb'=>'required',
            'cover'=>'required',
            'credit'=>'max:1000',
            'cost'=>'',
        ]);

        if(request()->has('cover')){
            $path = request()->cover->store('public/cover');
            $lastpath  = explode('/', $path);
            $lastpath = end($lastpath);

            $newPath = "/storage/cover/".$lastpath;
            auth()->user()->books()->create([
                'book_category_id'=>request()->book_category_id,
                'book_type_id'=>request()->book_type_id,
                'language_id'=>request()->language_id,
                'lead_college_id'=>request()->lead_college_id,
                'lead_character_id'=>request()->lead_character_id,
                'is_premium'=>request()->is_premium,
                'title'=>request()->title,
                'genre_id'=>request()->genre_id,
                'blurb'=>request()->blurb,
                'cover'=>$newPath,
                'credit'=>request()->credit,
                'cost'=>request()->cost,
            ]);

            return back()->withSuccess('Book Saved!');

        }
        return 'Error occured contact the developer';
    }

    public function show($id){
        $book = auth()->user()->books()->findOrFail($id);
        // return $book;
        return view('author.books.show', compact('book'));
    }
}
