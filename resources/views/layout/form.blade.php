@extends('layout.master')

@section('SampleForm')
<div class = "main_box_form">
    <div class="container-md">
        <form class = "form_style" id = "name-form">
        @csrf
        <input type="text" name = "id" value = "{{$data['id']}}" hidden>
            <h4 class = "login">Login</h4>
            <div class="form-group">
                <!-- 
                <label for="FirstName">First Name</label> -->
                <input type="text" class="form-control" id="fname" name = "fname" value = "{{$data['fname']}}" aria-describedby="emailHelp" placeholder="Enter First Name">
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <br>
            <div class="form-group">
                <!--<label for="MiddleName">Middle Name</label> -->
                <input type="text" class="form-control" id="mname" name="mname" value = "{{$data['mname']}}" placeholder="Enter Middle Name">
            </div>
            <br>
            <div class="form-group">
                <!--
                <label for="LastName">Last Name</label> -->
                <input type="text" class="form-control" id="lname" name="lname" value = "{{$data['lname']}}" placeholder="Enter Last Name">
            </div>
            <button type="submit" class="btn btn-primary" onclick="submitName(event)">Submit</button>
            
            <a href="/table">View Names</a>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        function submitName(event) {
            event.preventDefault();
            $.post('/submitName', $('#name-form').serializeArray(), function(result) {
                if (result) {
                    alert ('Saved Successfull');
                    window.location.reload();
                }
            });
        }
    </script>
@endsection