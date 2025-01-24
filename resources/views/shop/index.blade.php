@extends('layouts.master2')
@section('title','shop index')
@section('stylesheet')
<style>
	.wrap {
		display: flex;
		flex-wrap: wrap;
	}

	.box {
		width: 200px;
		margin: 10px;
		border-radius: 15px;
		background-color: white;
		box-shadow: 0 0 8px rgba(0, 0, 0, 0.16);
	}
</style>
@endsection

@section('header')
<h1>ハンバーガーショップ</h1>
<img src="{{ asset('img\今だけダブチ食べ美.JPG') }}" style="width: 100%" ;">
@endsection

@section('main')
<table style="margin: 30px 0">
	<tr>
		<td>
			<form action="/cart" method="GET">
				<input type="submit" value="カートの中身を見る">
			</form>
		</td>
	</tr>
</table>
<h2>メニュー</h2>
<div class="wrap">
	@foreach($items as $item)
	<table class="box">
		<tr>
			<td style="text-align: center"><img src="{{ asset($item->image_url) }}" style="width: 110px;"></td>
		</tr>
		<tr>
			<td>{{ $item->name }}</td>
		</tr>
		<tr>
			<td>￥{{ number_format($item->price) }}</td>
		</tr>
		<tr>
			<td>
				<form action="/shop/cartin" method="GET">
					<input type="hidden" name="id" value="{{ $item->id }}">
					<select name="quantity">
						<option value="1" selected>1個</option>
						<option value="2">2個</option>
						<option value="3">3個</option>
						<option value="4">4個</option>
						<option value="5">5個</option>
					</select>
					<input type="submit" value="カートに入れる">
				</form>
			</td>
		</tr>
	</table>
	@endforeach
</div>
@endsection

@section('footer')
@endsection