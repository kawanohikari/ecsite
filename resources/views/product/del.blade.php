@extends('layouts.master')
@section('title','product del')
@section('stylesheet')
<style>
</style>
@endsection

@section('header')
<h1>商品削除</h1>
@endsection

@section('main')
<h2 class="red">下記データを削除します。よろしいですか。</h2>
<table>
	<form action="/product/del" method="POST">
		@csrf
		<tr>
			<th>ID</th>
			<td><input type="text" name="id" value="{{ $form->id }}" readonly></td>
		</tr>
		<tr>
			<th>品名</th>
			<td><input type="text" name="name" value="{{ $form->name }}" readonly></td>
		</tr>
		<tr>
			<th>説明</th>
			<td><input type="text" name="description" value="{{ $form->description }}" readonly></td>
		</tr>
		<tr>
			<th>売価</th>
			<td><input type="number" name="price" value="{{ $form->price }}" readonly></td>
		</tr>
		<tr>
			<th>原価</th>
			<td><input type="number" name="cost" value="{{ $form->cost }}" readonly></td>
		</tr>
		<tr>
			<th>在庫数</th>
			<td><input type="number" name="stock" value="{{ $form->stock }}" readonly></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="削除"></td>
		</tr>
	</form>
	<form action="/product" method="GET">
		@csrf
		<tr>
			<th></th>
			<td><input type="submit" value="キャンセル"></td>
		</tr>
	</form>
</table>
@endsection

@section('footer')
@endsection