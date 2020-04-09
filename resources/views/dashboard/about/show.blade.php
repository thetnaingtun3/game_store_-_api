@extends('dashboard.layouts.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($about as $a)

                            <tr>
                                <td>{{$a->title}}</td>
                                <td>
                                    {{$a->description}}
                                    {{--                                                                    <div class="progress progress-xs margin-vertical-10 ">--}}
                                    {{--                                                                        <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>--}}
                                    {{--                                                                    </div>--}}
                                </td>
                                <td><img src="{{asset('gallery/about/'.$a->image)}}" width="200px" height="200px"
                                         class="img-fluid img-thumbnail"></td>
                                <td class="text-nowrap">
                                    <a href="{{route('about.edit',$a->id)}}" data-toggle="tooltip"
                                       data-original-title="Edit"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    <form method="post" action="{{route('about.destroy',$a->id)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Delete" class="badgee badge-danger">
                                    </form>
{{--                                    <form id="frm-delete" action="/about/{{$a->id}}" method="POST">--}}
{{--                                        @method('DELETE')--}}
{{--                                        @csrf--}}
{{--                                        <a href="{{url('about')}}" data-toggle="tooltip" data-original-title="Close">--}}
{{--                                            <i--}}
{{--                                                    class="fa  fa-trash-o text-danger"--}}
{{--                                                    onclick="event.preventDefault(); document.getElementById('frm-delete').submit();"></i>--}}
{{--                                        </a>--}}
{{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
