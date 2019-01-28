@extends('layouts.base')

@section('content')

<div class="container">
   
<h1>Create Note</h1>
<br>

@if(count($errors) >0)
    <ul style="list-style-type:none;">
        @foreach($errors->all() as $error)
         <li class="alert alert-danger">{{  $error }}</>
        @endforeach
    </ul>
@endif

<form action="{{route('notes.store')}}" method="POST">
   {{-- {{ csrf_token() }} --}}
   @csrf
   <div class="form-group">
        <label for="title">Note Title</label>
        <input autofocus autocomplete="off" class="form-control" type="text" name="title"> 
    </div>   
   
        
    <div class="form-group shadow-textarea">
        <label for="body">Note Description</label>
        <textarea class="form-control z-depth-1" id="body" name="body" rows="14" placeholder="Write something here..."></textarea>
    </div>

    <input type="hidden" name="notebook_id" value="{{ $id }}">

    <input class="btn btn-primary" type="submit" id="mybtn" value="Submit">        

</form>

</div>

@endsection