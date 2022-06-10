@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href='{{ route('post.index') }}' class="btn btn-primary btn-sm mb-2">Back</a>
                    <form action='{{ route('post.store') }}' method="POST">
                        @csrf
                        <div class="form-group">
                            <label >Title</label>
                            <input type='text' class='form-control' name='title'  />
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="my-2">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
