@extends('layouts.app')

@section('content')
<div class="container">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="card card-body shadow-lg">
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="{{ $book->cover }}" alt="" class="img-fluid rounded" style="max-height:200px !important; object-fit:cover;">
            </div>
            <div class="col-md-8 col">
               <div class="d-flex align-items-start">
                    <h4>
                        {{ $book->title }} @if($book->is_premium == 'yes')
                    </h4>
                    <div class="badge badge-warning ">Premium</div>@endif
               </div>
               <div class="row">
                    <div class="col-md-5">
                         Genre: <strong class="badge badge-success"> {{ $book->genre->name }} </strong> 
                    </div>
                    <div class="col-md-5">
                        Category: <strong class="badge badge-dark"> {{ $book->category->name }} </strong>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-5">
                         Lead Character: <strong class="badge badge-success"> {{ $book->leadCharacter->name }} </strong> 
                    </div>
                    <div class="col-md-5">
                        Lead's College: <strong class="badge badge-dark"> {{ $book->leadCollege->name }} </strong>
                    </div>
               </div>
               <div>
                    Tags: 
                    <a href="#" class="badge badge-info mr-1">Tag1</a>
                    <a href="#" class="badge badge-info mr-1">Tag1</a>
                    <a href="#" class="badge badge-info mr-1">Tag1</a>
                    <a href="#" class="badge badge-info mr-1">Tag1</a>
                    <a href="#" class="badge badge-info mr-1">Tag1</a>
               </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('text1');
</script>
@endsection
