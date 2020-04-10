@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('category.index')}}" class="btn btn-success mb-3">Back</a>
                    <h4 class="card-title text-center">Category  Page</h4>
                    <form method="post" action="/category/{{$category->id}}" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" class="form-control form-control-line" required
                                   value="{{$category->category}}"
                                   name="category"></div>
                        <input type="submit" value="Update"
                               class="col-md-4 btn btn-md btn-rounded btn-block btn-outline-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
