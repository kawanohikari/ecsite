@extends('layouts.master')
@section('title','product index')
@section('stylesheet')
<style>
</style>
@endsection


@section('header')
<h1>商品管理</h1>
@endsection

@section('main')
<table>
	<tr>
		<th>ID</th>
		<th>品名</th>
		<th>説明</th>
		<th>売価</th>
		<th>原価</th>
		<th>在庫数</th>
		<th colspan="2"></th>
	</tr>
	<tr>
		@foreach($items as $item)
		<td class="right">{{ number_format($item->id) }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $item->description }}</td>
		<td class="right">¥{{ number_format($item->price) }}</td>
		<td class="right">¥{{ number_format($item->cost) }}</td>
		<td class="right">{{ number_format($item->stock) }}</td>
		<td>
			<input type="hidden" name="id" value="{{ $item->id }}">
			<form action="/product/edit" method="POST">
				<input type="submit" value="編集">
			</form>
		</td>
		<td>
			<input type="hidden" name="id" value="{{ $item->id }}">
			<form action="/product/del" method="POST">
				<input type="submit" value="削除">
			</form>
		</td>
	</tr>
	@endforeach
	<tr>
		<th colspan="6"></th>
		<td colspan="2">
			<form action="/product/add" method="POST">
				<input type="submit" value="新規追加" style="width:105px">
			</form>
		</td>
	</tr>
</table>
@endsection

@section('footer')
@endsection