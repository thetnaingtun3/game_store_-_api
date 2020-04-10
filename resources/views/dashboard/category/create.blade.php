@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">About Page</h4>
                    <div class="card">
                        <div class="card-body">
                            <form class="form-material m-t-40" action="{{route('category.store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control form-control-line" name="category"></div>
                                <input type="submit" value="Create "
                                       class="col-md-4 btn btn-md btn-rounded btn-block btn-outline-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
