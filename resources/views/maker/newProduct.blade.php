<!DOCTYPE html>
@extends('layouts/app')
@section('content')

<div class="content">
    <h1>New Product</h1>  
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>               
            @endforeach
        </ul>
    </div>
    @endif
    {{ Form::open(['action' => 'Maker\makerController@storeProduct']) }}
    {{ Form::label('name','Name') }}
    {{ Form::text('name','',['class'=>'form-control','required','placeholder'=>'Product Name']) }}
    <br />
    {{ Form::label('category','Category') }}
    {{ Form::select('category',[''=>'','T-shirt'=>'T-shirt','Pants'=>'Pants','Black Tie'=>'Black Tie']) }}
    <br />
    {{ Form::label('price','Price')}}
    {{ Form::number('price','',['required'])}}
    <br/>
    {{Form::label('description','Description')}}
    {{Form::textarea('description','',['class'=>'form-control'])}}
    <br/>
    {{Form::label('requirements','Requirements')}}
    {{Form::textarea('requirements','',['class'=>'form-control'])}}
    <br/>
    {{ Form::submit('Save',['class'=>'btn btn-default']) }}
    {{ Form::close() }}
    <br/>
    
</div>

@endsection
