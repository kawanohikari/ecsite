@extends('layouts.master')
@section('title','shop index')
@section('stylesheet')
<style>
</style>
@endsection


@section('header')
<h1>ハンバーガーショップ</h1>
@endsection

@section('main')
<table>
	<tr>
		@foreach($items as $item)
		<td>
			<img src="{{ asset($item->url) }}">
		</td>
		<td class="right">{{ number_format($item->id) }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $item->description }}</td>
		<td class="right">￥{{ number_format($item->price) }}</td>

		<form action="/product/edit" method="GET">
			<td>
				<input type="hidden" name="id" value="{{ $item->id }}">
				<input type="submit" value="編集">

			</td>
		</form>
		<td>
			<form action="/product/del" method="GET">
				<input type="hidden" name="id" value="{{ $item->id }}">
				<input type="submit" value="削除">
			</form>
		</td>
	</tr>
	@endforeach
	<tr>
		<th colspan="6"></th>
		<td colspan="2">
			<form action="/product/add" method="GET">
				<input type="submit" value="新規追加" style="width:105px">
			</form>
		</td>
	</tr>
</table>
@endsection

@section('footer')
@endsection