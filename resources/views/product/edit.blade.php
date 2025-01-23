@extends('layouts.master')
@section('title','product edit')
@section('stylesheet')
<style>
</style>
@endsection

@section('header')
<h1>商品追加</h1>
@endsection

@section('main')
<form action="/product/edit" method="POST">
	@csrf
	<table>
		<tr>
			<th>ID</th>
			<td>
				<input type="text" name="id" value="{{ $form->id }}" readonly>
			</td>
		</tr>
		@error('name')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>品名</th>
			<td><input type="text" name="name" value="{{ $form->name }}">
		</tr>
		@error('description')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>説明</th>
			<td><input type="text" name="description" value="{{ $form->description }}">
		</tr>
		@error('price')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>売価</th>
			<td><input type="text" name="price" value="{{ $form->price }}">
		</tr>
		@error('cost')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>原価</th>
			<td><input type="text" name="cost" value="{{ $form->cost }}">
		</tr>
		@error('stock')
		<tr>
			<th></th>
			<td class="red">{{ $message }}</td>
		</tr>
		@enderror
		<tr>
			<th>在庫数</th>
			<td><input type="text" name="stock" value="{{ $form->stock }}">
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="更新">
		</tr>
	</table>
</form>
@endsection

@section('footer')
@endsection