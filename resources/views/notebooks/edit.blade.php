
@extends('layouts.base')

@section('content')

<div class="container">
    
    

<h1>Edit Notebook</h1>
<br>


{{-- {{ $notebook->id }} --}}
<form action="/notebooks/{{ $notebook->id }}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="name">
                NoteBook Name
            </label>
        <input class="form-control" value="{{ $notebook->name }}" name="name" type="text">
    </div>
    <input type="submit" id="mybtn" class="btn btn-primary" value="Update">
</form>

</div>

@endsection