@extends('layout')

@section('content')
<div class="container">
    <h1>Grocery App</h1>
    <form id="myForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
jQuery(document).ready(function(){
    jQuery('#ajaxSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content');
            }
        });
    });
});
</script>

    
@endsection