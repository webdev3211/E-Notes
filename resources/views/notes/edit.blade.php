
@extends('layouts.base')

@section('content')

<div class="container">
    
    

<h1>Edit Note </h1>
<br>


{{-- {{ $notebook->id }} --}}
<form action="{{ route('notes.update', $note->id) }}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
 
    <div class="form-group">
        <label for="title">Note Title</label>
        <input class="form-control" type="text" value="{{$note->title}}" name="title"> 
    </div>   
    
        
    <div class="form-group shadow-textarea">
        <label for="body">Note Description</label>
        <textarea class="form-control z-depth-1" id="body" name="body" rows="14">{{$note->body}}</textarea>
    </div>

    
    <input type="submit" class="btn btn-primary" id="mybtn" value="Update">
</form>

</div>

@endsection