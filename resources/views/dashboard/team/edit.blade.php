@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Team Page</h4>
                    <form method="post" action="/team/{{$project->id}}" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control form-control-line" required
                                   value="{{$project->name}}"
                                   name="name"></div>
                        <div class="form-group">
                            <label>Facebook Link</label>
                            <input type="text" class="form-control form-control-line" value="{{$project->fb_link}}" name="fb_link"></div>
                        <div class="form-group">
                            <label>Twitter Link</label>
                            <input type="text" class="form-control form-control-line" value="{{$project->tw_link}}" name="tw_link"></div>
                        <div class="form-group">
                            <label>Goolge Link</label>
                            <input type="text" class="form-control form-control-line" value="{{$project->gg_link}}" name="gg_link"></div>
                        <div class="form-group">
                            <label>About</label>
                            <textarea class="form-control" required name="about"
                                      rows="5">{{$project->about}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Image</h4>
                                        <label for="input-file-now">Your so fresh input file — Default
                                            version</label>
                                        <input type="file" id="input-file-now" name="image"  class="dropify"
                                               data-default-file="{{asset('gallery/team/'.$project->image)}}"/>
                                        {{--                                                <input type="text" data-default-file="{{asset('gallery/'.$about->image)}}">--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Update"
                               class="col-md-4 btn btn-md btn-rounded btn-block btn-outline-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title text-center">Team Page</h4>--}}
{{--                    <form method="POST" action="/team/{{$project->id}}" enctype="multipart/form-data" class="mb-4">--}}
{{--                        @method('PATCH')--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label>About</label>--}}
{{--                            <input type="text" class="form-control form-control-line" required--}}
{{--                                   value="{{$project->name}}"--}}
{{--                                   name="title"></div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Textarea</label>--}}
{{--                            <textarea class="form-control" required name="description"--}}
{{--                                      rows="5">{{$project->about}}</textarea>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="col-lg-12 col-md-12">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h4 class="card-title">Image</h4>--}}
{{--                                        --}}{{--                                        <label for="input-file-now">Your so fresh input file — Default version</label>--}}
{{--                                        <input type="file" id="input-file-now"  name="image" class="dropify"--}}
{{--                                               data-default-file="{{asset('gallery/team'.$project->image)}}"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <input type="submit" value="Add"--}}
{{--                               class="col-md-4 btn btn-md btn-rounded btn-block btn-outline-danger">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
@stop
