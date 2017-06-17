<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<div class='content'>
    <h1>Product Inventory List</h1>
    <p><a href='#'>Manage Categories</a></p>
    <p><a href='#'>Add New Product</a></p>
    <hr width="80%">
    <p>Search Product: <input type="text" /> <span class="glyphicon glyphicon-search"></span></p>
    
    <table class="table-bordered table-hover table-responsive" width="80%" align="center">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>            
            <td>
                <span class="glyphicon glyphicon-search"></span>
                <span class="glyphicon glyphicon-edit"></span>
                <span class="glyphicon glyphicon-remove"></span>
            </td>
        </tr>
    </table>
</div>


@endsection