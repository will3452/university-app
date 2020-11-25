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
                    <a href="{{ route('author.bookindex') }}" class="btn  {{ !isset(request()->filter) ? 'btn-primary ':'btn-outline-primary ' }}btn-sm ">All</a>
                    <a href="{{ route('author.bookindex',['filter'=>'regular']) }}" class="btn {{ isset(request()->filter) && request()->filter == 'regular' ? 'btn-primary ':'btn-outline-primary ' }} btn-sm ">Regular</a>
                    <a href="{{ route('author.bookindex',['filter'=>'premium']) }}" class="btn {{ isset(request()->filter) && request()->filter == 'premium' ? 'btn-primary ':'btn-outline-primary ' }} btn-sm ">Premium</a>
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
                                @if($book->is_premium == 'yes')
                                    <div class="badge badge-warning">Premium</div>
                                @endif
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
                                <a href="{{ route('author.bookshow',$book->id) }}" class="btn btn-success btn-sm">Show Content</a>
                                <a href="#" class="btn btn-dark btn-sm">Edit Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4 class="text-center">
                    No books available, <small><a href="{{ route('author.bookcreate') }}">Create now?</a></small>
                </h4>
            @endforelse
            <div class="mt-2">
                {{ isset(request()->filter) && request()->filter != '' ? $books->appends(['filter'=>request()->filter])->links():$books->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('text1');
</script>
@endsection
