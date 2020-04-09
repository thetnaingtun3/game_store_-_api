@extends('dashboard.layouts.master')
@section('content')
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h4 class="card-title">Default Basic Forms</h4>
                            <h6 class="card-subtitle"> All bootstrap element classies </h6>
                        </div>
                        {{--                    <div class="ml-auto">--}}
                        {{--                        <button class="btn btn-danger btn-sm pull-right collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Get code <i class="ti-angle-down"></i></button>--}}
                        {{--                    </div>--}}
                    </div>
                    <form class="form">
                        <div class="form-group m-t-40 row">
                            <label for="example-text-input" class="col-2 col-form-label">Text</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Search</label>
                            <div class="col-10">
                                <input class="form-control" type="search" value="How do I shoot web"
                                       id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" type="email" value="bootstrap@example.com"
                                       id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                            <div class="col-10">
                                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                            <div class="col-10">
                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                                       id="example-datetime-local-input">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@stop
