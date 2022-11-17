@extends('Client.layout.webmaster')
@section('content')
    {{-- <div class="block-header">
        <h2>TYPOGRAPHY</h2>
    </div> --}}

    @forelse ($posts as $card)
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <h5>Html Code</h5>
                        @if (!empty($card->title))
                            <h2>{!! $card->title !!} </h2>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Description</h5>
                        @if (!empty($card->description))
                            <pre> {!! $card->description !!} </pre>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        @foreach ($card->categorytype as $cards)
                        <h5>Title</h5>
                        @if (!empty($cards->title))
                            <pre> {!! $cards->title !!} </pre>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Description</h5>
                        @if (!empty($cards->description))
                            <pre> {!! $cards->description !!} </pre>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                            <h5>Attachment</h5>
                            @if (!empty($cards->categorytype_img))
                                <img src="{{ asset('storage/' . $cards->categorytype_img) }}" width="300px" height="200px"
                                    alt="Card Image" title="Card Image" />
                            @else
                                <pre>No Data Found</pre>
                            @endif
                            <hr>
                            <h5>Html Code</h5>
                            @if (!empty($cards->html))
                                <pre> {!! $cards->html !!} </pre>
                            @else
                                <pre>No Data Found</pre>
                            @endif
                            <hr>
                            <h5>Css Code</h5>
                            @if (!empty($cards->css))
                                <pre> {!! $cards->css !!} </pre>
                            @else
                                <pre>No Data Found</pre>
                            @endif
                            <hr>
                            <h5>Java Script Code</h5>
                            @if (!empty($cards->javascript))
                                <pre> {!! $cards->javascript !!} </pre>
                            @else
                                <pre>No Data Found</pre>
                            @endif
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h2>Data Not Found</h2>
    @endforelse

@endsection
