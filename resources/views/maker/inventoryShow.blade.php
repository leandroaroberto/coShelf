<!DOCTYPE html>
@extends('layouts.app')
@section('content')

<div class="content">
<h1>{{$products['name']}}</h1>
<p>Category: <b>{{$products['category']}}</b></p>
<p>Price: <b>{{$products['price']}}</b></p>
<p>Description: <b>{{$products['description']}}</b></p>
<p>Special Requirements: <b>{{$products['requirements']}}</b></p>
<p><a href="#" onclick="window.history.back()">Voltar</a></p>
</div>
@endsection