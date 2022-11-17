@extends('layouts.master')
@section('content')
    {{-- <div class="block-header">
        <h2>
            JQUERY DATATABLES
        </h2>
    </div> --}}


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $image->category->title }}
                    </h2>
                </div>
                <div class="body">
                    <h5>Html Code</h5>
                         <p> {!! $image->html !!}  </p>
                    <hr>
                    <h5>Css Code</h5>
                         <pre> {!! $image->css !!}</pre>
                    <hr>
                    <h5>Java Script Code</h5>
                         <pre> {!! $image->javascript !!}</pre>
                    <hr>
                    <div class="mt-4">
                        <a href="{{ route('image.edit', $image->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('image.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
<style>
    .dataTables_wrapper .dt-buttons {
    float: left;
    display: none;
}
</style>