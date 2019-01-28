@extends('layouts.base')

@section('content')

<div class="container text-center">
        <!-- heading -->
    <h1 class="pull-xs-left" style="color:tomato;">
        Your Notebooks
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" id="mybtn" href="/notebooks/create" role="button">
            New NoteBook +
        </a>
    </div>

    <div class="clearfix">
    </div>
    <br>
    
    @foreach($notebooks as $notebook)
    <div class="col-sm-6 col-md-3">
        <div class="card">
            <div class="card-block">
            <a href="{{ route('notebooks.show', $notebook->id)}}">
                    <h4 class="card-title" >
                        {{ $notebook->name }}
                    </h4>
                </a>
            </div>
            <a href="#">
                <img alt="Responsive image" class="img-fluid img-responsive" src="dist/img/notebook.jpg"/>
            </a>
            <div class="card-block">
            <a class="card-link" href="{{ route('notebooks.edit', $notebook->id) }}">
                    Edit Notebook
                </a>
            <form action="/notebooks/{{  $notebook->id }}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </form>

            </div>
        </div>
    </div>
@endforeach

@endsection

</div>
    

    