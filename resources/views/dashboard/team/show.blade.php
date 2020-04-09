@extends('dashboard.layouts.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>About</th>
                            <th>Image</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($team as $a)

                            <tr>
                                <td>{{$a->name}}</td>
                                <td>
                                    {{$a->about}}
                                    {{--                                                                    <div class="progress progress-xs margin-vertical-10 ">--}}
                                    {{--                                                                        <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>--}}
                                    {{--                                                                    </div>--}}
                                </td>
                                <td><img src="{{asset('gallery/team/'.$a->image)}}" width="50px" height="70px"
                                         class="img-fluid img-thumbnail"></td>
                                <td class="text-nowrap">
                                    <a href="{{route('team.edit',$a->id)}}" data-toggle="tooltip"
                                       data-original-title="Edit"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <form method="post" action="{{route('team.destroy',$a->id)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        {{--                                        <div class="input-group-prepend">--}}
                                        {{--                                            <button  type="button" id="button-addon1">Button</button>--}}
                                        {{--                                        </div>--}}
                                        <input type="submit" value="Delete" class="btn btn-outline-secondary">
                                    </form>
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
