@extends('layouts.base')

@section('content')

<div class="container-fluid text-xs-justify">
    <div class="row">
        <div class="display-3" style="text-align:center;color:tomato;">
            <b>{{ucfirst($note->title)}} </b>
        </div>
        <br><br><br>
        <div class="container">

           

                <div class="col-md-offset-2 col-md-12" >

                    <pre><code class="cc" style="overflow-y:scroll;">
                        <p style="margin:0px;" >
                            {{ $note->body }}
                        </p>
                        
                    </code></pre>
            
        


            </div>
        </div>

       

    </div>
</div>


@endsection