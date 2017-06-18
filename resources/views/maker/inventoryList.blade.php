<!DOCTYPE html>
@extends('layouts.app')
@section('content')

<h1>Product Inventory List</h1>
    <p><a href='#'>Manage Categories</a></p>
    <p><a href='/inventoryList/Add'>Add New Product</a></p>
    <hr width="80%">
    
    <!--<p>Search Product: <input type="text" /> <span class="glyphicon glyphicon-search"></span></p>-->
    
    {{ Form::open(['url'=>['/inventoryList/search'],'method'=>'post']) }}
    <div class="row">
        <div class="col-lg-12">
            <div class="input-group">
                {{ Form::text('lookfor',$search,['class' =>'form-control','required','placeholder' => 'Search product']) }}
                <span class="input-group-btn">
                    {{ Form::submit('Search',['class'=>'btn btn-default']) }}
                </span>                
            </div>
        </div>
    </div>
    {{ Form::close() }}
    
    <br/>
    <a href="/inventoryList">Show All</a>
    
    <table class="table-bordered table-hover table-responsive" width="80%" align="center">
        @if(count($products) <= 0)
        <p>Sorry, nothing to display.</p>
        @else
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
            </tr>        
        
            @foreach($products as $product)
                <tr>
                    <td></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>            
                    <td>
                        <a href="/inventoryList/{{$product->product_id}}"><span class="glyphicon glyphicon-search"></span></a>
                        <span class="glyphicon glyphicon-edit"></span>
                        <span class="glyphicon glyphicon-remove"></span>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>



@endsection