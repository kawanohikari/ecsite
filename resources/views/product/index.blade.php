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
			<th colspan="2"></th>
		</tr>
		<tr>
			@foreach($items as $item)
			<td>ID</td>
			<td>メーカー</td>
			<td>品名</td>
			<td>説明</td>
			<td>売価</td>
			<td>原価</td>
			<td>在庫数</td>
			<td>
				<form action="/product/edit" method="POST">
					<input type="submit" value="編集">
				</form>
			</td>
			<td>
				<form action="/product/del" method="POST">
					<input type="submit" value="削除">
				</form>
			</td>
			@endforeach
		</tr>
		<tr>
			<th colspan="6"></th>
			<td colspan="2">
				<form action="/product/add" method="POST">
					<input type="submit" value="新規追加">
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection

@section('footer')
@endsection