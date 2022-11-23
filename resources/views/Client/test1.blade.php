@extends('Client.layout.webmaster')

@section('content')
    <div class="block-header">
        {{-- <h2>Card</h2> --}}
    </div>
    {{-- @forelse ($components as $comp)
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ $comp->title }}
                        </h2>
                    </div>
                    <div class="body">
                        <h5>Description</h5>
                        <p> {!! $comp->description !!} </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h2>Data Not Found</h2>
    @endforelse --}}
    @forelse ($categorytype as $card)
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <h5>Title</h5>
                        @if (!empty($card->title))
                            <h2> {!! $card->title !!} </h2>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Description</h5>
                        @if (!empty($card->description))
                            <p> {!! $card->description !!} </p>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Click here </h5>
                        <a href="javascript:void(0)" class="btn btn-default btn-sm outputshow" id="showOutput" data-id="{{ $card->id }}">Output</a>

                        {{-- @if (!empty($card->categorytype_img))
                        <img src="{{ asset('storage/' . $card->categorytype_img) }}" width="300px" height="200px" alt="Card Image"
                        title="Card Image" />
                        @else
                            <pre>No Data Found</pre>
                        @endif    --}}
                        <hr>
                        <h5>Html Code</h5>
                        @if (!empty($card->html))
                            <pre> {{ $card->html}} </pre>
                        @else
                            <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Css Code</h5>
                        @if (!empty($card->css))
                            <pre> {{ $card->css }} </pre>
                            @else
                                <pre>No Data Found</pre>
                        @endif
                        <hr>
                        <h5>Java Script Code</h5>
                            @if (!empty($card->javascript))
                                <pre> {{$card->javascript }} </pre>
                            @else
                                <pre>No Data Found</pre>
                        @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h2>Data Not Found</h2>
    @endforelse 
     <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document" height="auto" width="100%">
            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    {{-- <h4 class="modal-title" id="defaultModalLabel">Modal title</h4> --}}
                </div>
                <div class="editor">
                    <textarea class="htmlCode" id="html-code" hidden></textarea>
                    <textarea class="cssCode" id="css-code" hidden></textarea>
                    <textarea class="jsCode" id="js-code" hidden></textarea>
                
                {{-- <div class="embed-responsive embed-responsive-16by9"> --}}
                    <iframe  id="output" class="outPut"  frameborder="0"></iframe> 
                {{-- </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
   
        
@endsection
@section('scripts') 

 <script>
	   $(document).on("click", "#showOutput", async function() {
            var id = $(this).attr("data-id");
            $('#defaultModal').modal('show'); 
             let url = '{{route('show.data')}}'
           await $.ajax({
                url: url + '/' + id,
                type: 'Get',
                dataType: "JSON",
                data:{
                    "id":id,
                    "_token": "{{ csrf_token() }}"},
                success: function (response)
                {
                    $('.htmlCode').html('');
                    $('.cssCode').html('');
                    $('.jsCode').html('');
                    let htmlCode = response.html;
                    let cssCode =  response.css;
                    let jsCode = response.javascript;
                    $('.htmlCode').html(htmlCode);
                    $('.cssCode').append(cssCode);
                    $('.jsCode').append(jsCode);
                }
            });  
            myFunction()  
      });
</script>
<script type="text/javascript">
        function myFunction() {
            let htmlcode = document.querySelector("#html-code").value;
            let csscode = document.querySelector("#css-code").value;
	    	let jscode = document.querySelector("#js-code").value;
	    	let output = document.getElementById("output");
            console.log(htmlcode)
            output.contentDocument.body.innerHTML = htmlcode+`<style>${csscode}</style>`;
		    output.contentWindow.eval(jscode);
        }
         
</script>
<script>
    var iframe = document.getElementById('output');
    var style = document.createElement('style');
style.textContent =
  'body {' +
  '  margin:0px !important;' 
  '}' 
;
iframe.contentDocument.head.appendChild(style);
</script>

  <style>
    iframe {
        width: 100%;
        height: 100%;
        padding: 10px;
        border: none !important;
        outline: none !important;
        margin: 0px !important;

    }
    body{
        margin:0px !important;
    }
    .modal-footer{
        padding: 5px;
    }
</style>

@endsection
