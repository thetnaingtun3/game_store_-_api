@extends("dashboard.layouts.master")
@section('content')
@foreach($about as $lo)
<p>{{$lo->title}}</p>
<p>{{$lo->title}}</p>
@endforeach

@stop