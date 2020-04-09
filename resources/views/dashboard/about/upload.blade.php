@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">File Upload1</h4>
                    <label for="input-file-now">Your so fresh input file — Default version</label>
                    <input type="file" id="input-file-now" class="dropify"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">File Upload2</h4>
                    <label for="input-file-now-custom-1">You can add a default value</label>
                    <input type="file" id="input-file-now-custom-1" class="dropify"
                           data-default-file="../assets/plugins/dropify/src/images/test-image-1.jpg"/>
                </div>
            </div>
        </div>
    </div>


@endsection
