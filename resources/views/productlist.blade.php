@extends('main')
@section('content')
<style>
    table{
        width:500px;
        text-align:center;
        margin: 20px;
    }
</style>
    <table border="1" >
        <tr>
            <th>PRODUCT NAME</th>
            <th>PRODUCT ID</th>
            <th>PRODUCT PRICE</th>
        </tr>
        @foreach($productlist as $p)
            <tr>
                <td><a href="{{route('productdetails',['pid'=>$p->pid,'pname'=>$p->pname, 'price'=>$p->price])}}">{{$p->pname}}</a></td>
                <td>{{$p->pid}}</td>
                <td>{{$p->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection