@extends('layouts.master')
@section('title','product add')
@section('stylesheet')
<style>
</style>
@endsection

@section('header')
<h1>商品追加</h1>
@endsection

@section('main')
<form action="/product/add" method="POST">
    @csrf
    <table>
        @error('name')
        <tr>
            <th></th>
            <td class="red">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
            <th>品名</th>
            <td><input type="text" name="name" value="{{ old('name') }}"></td>
        </tr>
        @error('description')
        <tr>
            <th></th>
            <td class="red">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
            <th>説明</th>
            <td><input type="text" name="description" value="{{ old('description') }}"></td>
        </tr>
        @error('price')
        <tr>
            <th></th>
            <td class="red">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
            <th>売価</th>
            <td><input type="number" name="price" value="{{ old('price') }}"></td>
        </tr>
        @error('cost')
        <tr>
            <th></th>
            <td class="red">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
            <th>原価</th>
            <td><input type="number" name="cost" value="{{ old('cost') }}"></td>
        </tr>
        @error('stock')
        <tr>
            <th></th>
            <td class="red">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
            <th>在庫数</th>
            <td><input type="number" name="stock" value="{{ old('stock') }}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="追加"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
@endsection