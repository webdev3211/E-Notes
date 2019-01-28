@extends('layouts.base')

@section('content')

<!-- Main component for call to action -->
<div class="container">
    <h1 class="pull-xs-left">
        Notes
    </h1>
    <div class="pull-xs-right">
    <a class="btn btn-primary" id="mybtn" href="{{ route('notes.createNote', $notebook->id) }}" role="button">
            New Note +
        </a>
    </div>
    <div class="clearfix">
    </div>
    <!--============= notes=========== -->
    <div class="list-group notes-group">

      @foreach($notes as $note)        
        <div class="card card-block">
        <a href="{{ route('notes.show', $note->id) }}">
                <h4 class="card-title">
                    {{ $note->title }}
                </h4>
            </a>
            <p class="card-text">
                {{ substr($note->body, 0 ,50) }} .....
            </p>
            <a class="btn btn-md btn-info pull-xs-left" href="{{ route('notes.edit', $note->id) }}">
                    Edit
                </a>
            <form action="{{ route('notes.destroy', $note->id) }}" class="pull-xs-right" method="POST">
                @csrf              
                {{ method_field('DELETE') }}
                <input class="btn btn-md btn-danger" type="submit" value="Delete">                
            </form>
        </div>
        @endforeach
        
    </div>
</div>

            
@endsection