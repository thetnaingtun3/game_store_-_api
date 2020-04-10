@extends('dashboard.layouts.master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('category.create')}}" class="btn btn-success mb-3">Add New Category</a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $a)

                            <tr>
                                <td>{{$a->category}}</td>

                                <td class="text-nowrap">
                                    <a href="{{route('category.edit',$a->id)}}" data-toggle="tooltip"
                                       data-original-title="Edit"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    <form method="post" action="{{route('category.destroy',$a->id)}}">
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
