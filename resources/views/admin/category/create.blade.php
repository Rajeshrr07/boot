@extends('layouts.master')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Category Create</h2>
                </div>
                <div class="body">
                    <form  method="POST" action="{{ route('categories.store') }}"  id="form_advanced_validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="title" required>
                                <label class="form-label">Category / Title</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="body" class="form-label">Description</label>
                                <textarea  name="description" class=" form-control" required></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Submit</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-danger waves-effect">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
