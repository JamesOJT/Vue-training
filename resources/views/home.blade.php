@extends('layout.master')

@section('1')
<div>
    First Name:{{$name->fname}}
</div>
@endsection

@section('2')
<div>
    Middle Name:{{$name->mname}}
</div>
    @endsection
    
@section('3')
<div>
    Last Name:{{$name->lname}}
</div>
@endsection
@section('4')
<div>
    Age:{{$age}}
</div>
@endsection