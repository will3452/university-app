@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        #book_cost{
            transition:all 500ms;
        }
    </style>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Book</div>

                <div class="card-body">
                   <form action="{{ route('author.bookstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cat">
                                        Book Category
                                    </label>
                                    <select name="book_category_id" id="cat" required class="form-control">
                                        <option value="#" disabled selected>Choose Category</option>
                                        @foreach(\App\Models\BookCategory::all() as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="mr-2">
                                        <label for="">
                                            Premium
                                        </label>
                                        <input type="radio" placeholder="Optional" name="is_premium" value="yes" id="premium_ticker">
                                    </div>
                                    <div class="">
                                        <label for="">
                                            Regular
                                        </label>
                                        <input type="radio" placeholder="Optional" checked name="is_premium" value="no" id="regular_ticker">
                                    </div>
                                </div>
                                <div class="form-group bg-primary text-white rounded p-1" id="book_cost">
                                    <label for="">
                                       Book Cost
                                    </label>
                                    <input type="text" placeholder="" value="0" name="cost" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">
                                        Book Title
                                    </label>
                                    <input type="text"required placeholder="" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        Cover
                                    </label>
                                    <input type="file" accept="image/*" required placeholder="" name="cover" class="d-block">
                                </div>
                                <div class="form-group">
                                    <label for="title">
                                        Author Name
                                    </label>
                                    <input type="text"required placeholder="" name="" value="{{ auth()->user()->name }}" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Genre
                                    </label>
                                    <select name="genre_id" id="g" required class="form-control">
                                        <option value="#" disabled selected>Choose Genre</option>
                                        @foreach(\App\Models\Genre::all() as $g)
                                            <option value="{{ $g->id }}">{{ $g->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cat">
                                        Book Type
                                    </label>
                                    <select name="book_type_id" id="cat" required class="form-control">
                                        <option value="#" disabled selected>Choose Type</option>
                                        @foreach(\App\Models\BookType::all() as $typ)
                                            <option value="{{ $typ->id }}">{{ $typ->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Languages
                                    </label>
                                    <select name="language_id" id="cat" required class="form-control">
                                        <option value="#" disabled selected>Choose Language</option>
                                        @foreach(\App\Models\Language::all() as $lang)
                                            <option value="{{ $lang->id }}">{{ $lang->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                

                                

                                <div class="form-group">
                                    <label for="">
                                        Lead Character
                                    </label>
                                    <select name="lead_character_id" id="cat" required class="form-control">
                                        <option value="#" disabled selected>Choose Character</option>
                                        @foreach(\App\Models\LeadCharacter::all() as $leadchar)
                                            <option value="{{ $leadchar->id }}">{{ $leadchar->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Lead's College
                                    </label>
                                    <select name="lead_college_id" id="cat" required class="form-control">
                                        <option value="#" disabled selected>Choose option</option>
                                        @foreach(\App\Models\LeadCollege::all() as $leadcol)
                                            <option value="{{ $leadcol->id }}">{{ $leadcol->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Blurb
                                    </label>
                                    <input type="text" placeholder="Optional" name="blurb" class="form-control">
                                    <small class="text-info">
                                    * By default 3000 characters only
                                    </small>
                                </div>

                                

                                <div class="form-group">
                                    <label for="">Credit page</label>
                                    <textarea name="credit" id="text1" cols="20" rows="7" ></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">
                            Create Book 
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let book_cost = document.getElementById('book_cost');
    let ticker = document.getElementById('premium_ticker');
    let ticker1 = document.getElementById('regular_ticker');

    book_cost.style.display = 'none';
    ticker.onclick = function(){
        book_cost.style.display = 'block';
    }
    ticker1.onclick = function(){
        book_cost.style.display = 'none';
    }
</script>
<script>
    CKEDITOR.replace('text1');
</script>
@endsection
