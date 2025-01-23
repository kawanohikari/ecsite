@extends('layouts.master')
@section('title','product edit')
@section('stylesheet')
<style>
</style>
@endsection

@section('header')
<h1>商品編集</h1>
@endsection

@section('main')
<table>
	<form action="/product/edit" method="POST">
		@csrf
		<tr>
			<th>ID</th>
			<td><input type="text" name="id" value="{{ $form->id }}" readonly></td>
		</tr>
		@error('name')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>品名</th>
			<td><input type="text" name="name" value="{{ $form->name }}"></td>
		</tr>
		@error('description')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>説明</th>
			<td><input type="text" name="description" value="{{ $form->description }}"></td>
		</tr>
		@error('price')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>売価</th>
			<td><input type="number" name="price" value="{{ $form->price }}"></td>
		</tr>
		@error('cost')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>原価</th>
			<td><input type="number" name="cost" value="{{ $form->cost }}"></td>
		</tr>
		@error('stock')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>在庫数</th>
			<td><input type="number" name="stock" value="{{ $form->stock }}"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="更新">
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