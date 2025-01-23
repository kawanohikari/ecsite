@extends('layouts.master')
@section('title','product index')
@section('stylesheet')
    <style>
    </style>
@endsection

@section('main')
<div style="container">


<table>
    <tr>
        <th>ID</th>
        <th>メーカー</th>
        <th>品名</th>
        <th>説明</th>
        <th>売価</th>
        <th>原価</th>
        <th>在庫数</th>


    </tr>


</table>

@foreach($items as $item)
@endforeach
@endsection

@section('footer')
@endsection

