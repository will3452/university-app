@extends('layouts.app')

@section('content')
<div class="container">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <form action="#">
                    <div class="input-group">
                        <input type="search" placeholder="Enter Keyword here" class="form-control">
                        <div class="input-group-append">
                        <button class="btn btn-primary ">
                            <div >
                                Search
                            </div>
                        </button>
                        </div>
                    </div>
                </form>
            </div>
                <div class="mt-2">
                    <a href="#" class="btn btn-primary btn-sm ">All</a>
                    <a href="#" class="btn btn-outline-primary btn-sm ">Regular</a>
                    <a href="#" class="btn btn-outline-primary btn-sm ">Premium</a>
                </div>
            <!-- <hr> -->
            <!-- <br> -->
            <small><strong> Result:{{ $books->total()}}</strong></small>
            <!-- <hr> -->
            @forelse($books as $book)
                <div class="card mt-2 ">
                    <div class="row">
                        <div class="col-md-2 col-12">
                            <img src="{{$book->cover}}" alt="" style="height:100%;max-height:200px;width:100%;object-fit:cover;" class="img-fluid">
                        </div>
                        <div class="col-md-10 col-12 p-2 text-center text-md-left">
                            <div>
                                <small>Title</small>
                                <strong>{{ $book->title }}</strong>
                            </div>
                            <div>
                                <small>Category</small>
                                <strong>{{ $book->category->name }}</strong>
                            </div>
                            <div>
                                <small>Language</small>
                                <strong>{{ $book->language->name }}</strong>
                            </div>
                            <div>
                                <a href="#" class="btn btn-success btn-sm">Show</a>
                                <a href="#" class="btn btn-dark btn-sm">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4 class="text-center">
                    No books available
                </h4>
            @endforelse
            <div class="mt-2">
                {{ $books->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('text1');
</script>
@endsection
