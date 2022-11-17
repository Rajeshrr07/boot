@extends('layouts.master')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Category Create</h2>
                </div>
                <div class="body">
                  
                    <form  method="POST" action="{{ route('card.update', $card->id) }}"  id="form_advanced_validation"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{ method_field('PATCH') }}

                        <div class="form-group form-float">
                            <label for="body" class="form-label">Select Title</label>
                        <div class="col-sm-12">
                            <select class="form-control show-tick" name="category_id" required>
                                @foreach ($category as $cat)
                                <option {{ $card->category_id === $cat->id ? 'selected' : '' }}
                                    value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                
                        <div class="form-group form-float">
                            <label for="body" class="form-label">Attachment</label>
                                <input type="file" class="form-control" name="card_img"  >
                            <img src="{{ asset('storage/' . $card->card_img) }}" width="80" hight="80"
                                        alt="Card Image" title="Card Image" />
                        </div>
                        <div class="form-group form-float">
                            <label for="body" class="form-label">Html</label>
                            <textarea  name="html" class="ckeditor form-control" id="tinymce" required>{{ $card->html}}</textarea>
                        </div>
                        <div class="form-group form-float">
                            <label for="body" class="form-label">CSS</label>
                            <textarea name="css" class="ckeditor form-control" id="tinymce" required>{{ $card->css}}</textarea>
                        </div>
                        <div class="form-group form-float">
                            <label for="body" class="form-label">Java Script</label>
                            <textarea  name="javascript" class=" ckeditor form-control" id="tinymce" required>{{ $card->javascript}}</textarea>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Submit</button>
                        <a href="{{ route('card.index') }}" class="btn btn-danger waves-effect">cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bootstrap-select .dropdown-toggle:focus {
         outline: none !important; 
         outline: none !important;
        outline-offset: -2px;
        }
    </style>
@endsection
