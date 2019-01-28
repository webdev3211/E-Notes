@extends('layouts.base')

@section('content')

<div class="container">
    
    

<h1>Create Notebook</h1>
<br>



<form action="/notebooks" method="POST">
   {{-- {{ csrf_token() }} --}}
   @csrf
   <div class="form-group">
        <label for="name">NoteBook Name</label>
        <input class="form-control" type="text" name="name"> 
    </div>   
    <input class="btn btn-primary" id="mybtn" type="submit" value="Done">        

</form>

</div>

@endsection