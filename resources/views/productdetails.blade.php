@extends('main')
@section('content')
<style>
    h1{
        font-size: 30px;
        text-align: center;
    }
    table{
        width:500px;
        text-align:center;
        margin: 20px;
    }
</style>
<h1> PRODUCT DETAILS</h1>
<table border="1" >
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRODUCT ID</th>
        <th>PRODUCT PRICE</th>
    </tr>
    <tr>
        <td>{{$pname}}</td>
        <td>{{$pid}}</td>
        <td>{{$price}}</td>
    </tr>
</table>
@endsection