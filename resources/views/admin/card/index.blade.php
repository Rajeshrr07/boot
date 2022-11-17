@extends('layouts.master')
@section('content')
    <div class="block-header">
        <h2>Card Table</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <a href="{{ route('card.create') }}" class="btn btn-success  pull-right"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Create
                    </a>
                    {{-- <button class="btn btn-success ">Create</button> --}}
                    <h2>
                        Card Tables
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($card as $user)
                                    <tr>
                                        <td>{{ $user->category->title }}</td>
                                        <td><img src="{{ asset('storage/' . $user->card_img) }}" width="80"
                                                alt="Card Image" title="Card Image" /></td>
                                        <td>
                                            <form action="{{ route('card.destroy', $user->id) }}" method="POST">
                                                <a href="{{ route('card.show', $user->id) }}"
                                                    class="btn btn-success btn-sm">Show</a>
                                                <a href="{{ route('card.edit', $user->id) }}"
                                                    class="btn btn-info btn-sm">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm  btn-danger">Delete</button>
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
    </div>
@endsection
<style>
    .dataTables_wrapper .dt-buttons {
        float: left;
        display: none;
    }
</style>
