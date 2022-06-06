@extends('main')
@section('content')
<style>
    h1{
        font-size: 30px;
        text-align: center;
        margin-bottom:50px;
    }
    form{
        text-align: center;
    }
</style>
<h1>CREATE A PRODUCT</h1>
<form action="" method="post">
   <!--NAME-->
  <label>NAME:</label><br>
  <input type="text"  name="name"><br>
  <!--ID-->
  <label>ID:</label><br>
  <input type="text"  name="id" ><br>
  <!--PRICE-->
  <label>Price:</label><br>
  <input type="text"  name="price"><br><br><br>
  <!--SUBMIT-->
  <input type="submit" value="Submit">
</form>
@endsection