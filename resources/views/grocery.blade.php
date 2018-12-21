@extends('layout')

@section('content')
<div class="container">
    <div class="alert alert-success" style="display:none"></div>
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
        <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
    </form>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
<script>
jQuery(document).ready(function () {
    jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

        jQuery.ajax({
            url: "{{url('/grocery/post')}}",
            method: 'post',
            data: {
                name: jQuery('#name').val(),
                type: jQuery('#type').val(),
                price: jQuery('#price').val()
            },
            success: function (result) {
                console.log(result);
            }
        });
    });
});
</script>

    
@endsection