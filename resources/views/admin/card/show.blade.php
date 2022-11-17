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
                        {{ $card->category->title }}
                    </h2>
                </div>
                <div class="body">
                    <h5>Html Code</h5>
                         <p> {!! $card->html !!}  </p>
                    <hr>
                    <h5>Css Code</h5>
                         <pre> {!! $card->css !!}</pre>
                    <hr>
                    <h5>Java Script Code</h5>
                         <pre> {!! $card->javascript !!}</pre>
                    <hr>
                    <div class="mt-4">
                        <a href="{{ route('card.edit', $card->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('card.index') }}" class="btn btn-danger">Back</a>
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