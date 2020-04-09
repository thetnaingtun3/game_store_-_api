@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">About Page</h4>
                    <div class="card">
                        <div class="card-body">
                            <form class="form-material m-t-40" action="{{route('about.store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>About</label>
                                    <input type="text" class="form-control form-control-line" name="title"></div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" required name="description" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Image</h4>
                                                {{--                                        <label for="input-file-now">Your so fresh input file — Default version</label>--}}
                                                <input type="file" id="input-file-now" name="image" class="dropify"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
