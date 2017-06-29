<!DOCTYPE html>
@extends('layouts/app')
@section('content')

    @if($ids)
        <h1>Edit product</h1>
        
    @else
        <h1>New Product</h1>  
    @endif
    
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
        
    @if($ids)
        {{ Form::text("name","$ids->name",["class"=>"form-control","required","placeholder"=>"Product Name"]) }}
    @else
        {{ Form::text("name","",["class"=>"form-control","required","placeholder"=>"Product Name"]) }}
    @endif
    <br />
    {{ Form::label('category','Category') }}
    @if($ids)
        {{ Form::select("category",["$ids->category"=>"$ids->category","T-shirt"=>"T-shirt","Pants"=>"Pants","Black Tie"=>"Black Tie"]) }}
    @else
        {{ Form::select('category',[''=>'','T-shirt'=>'T-shirt','Pants'=>'Pants','Black Tie'=>'Black Tie']) }}
    @endif
    <br />
    {{ Form::label('price','Price')}}
    @if($ids)
        {{ Form::number("price","$ids->price",["required"])}}
    @else
        {{ Form::number('price','',['required'])}}
    @endif
    <br/>
    {{Form::label('description','Description')}}
    @if($ids)
        {{Form::textarea("description","$ids->description",["class"=>"form-control"])}}
    @else
        {{Form::textarea('description','',['class'=>'form-control'])}}
    @endif
    
    <br/>
    {{Form::label('requirements','Requirements')}}
    @if($ids)
        {{Form::textarea("requirements","$ids->requirements",["class"=>"form-control"])}}
    @else
        {{Form::textarea('requirements','',['class'=>'form-control'])}}
    @endif
    <br/>
    @if($ids)
        {{ Form::submit('Update',['class'=>'btn btn-default']) }}
    @else
        {{ Form::submit('Save',['class'=>'btn btn-default']) }}
    @endif
    {{ Form::close() }}
    <br/>
    


@endsection
