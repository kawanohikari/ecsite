@extends('layouts.master2')
@section('title','cart index')
@section('stylesheet')
<style>
	table {
		margin-bottom: 20px;
	}
</style>
@endsection

@section('header')
<h1>カートに商品が追加されました</h1>
@endsection

@section('main')
<table>
	<tr>
		<th>商品</th>
		<th>個数</th>
		<th>単価</th>
		<th>小計</th>
		<th></th>
	</tr>
	@foreach($carts as $cart)
	<form action="/cart/calc" method="GET">
		@csrf
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<img src="{{ asset($cart->product->image_url) }}" style="width: 120px;">
						</td>
					</tr>
					<tr>
						<td>{{ $cart->product->name }}</td>
					</tr>
				</table>
			</td>
			<td class="right"><input type="number" name="quantity" value="{{ $cart->quantity }}" style="width:40px;"></td>
			<td class="right">￥{{ number_format($cart->product->price) }}</td>
			<td class="right">￥{{ number_format($cart->product->price * $cart->quantity) }}</td>
			<td>
				<input type="hidden" name="id" value="{{ $cart->product->id }}">
				<input type="submit" value="再計算">
			</td>
		</tr>
	</form>
	@endforeach
</table>
<table>
	<tr>
		<td>
			<form action="/shop" method="GET">
				@csrf
				<input type="submit" value="商品一覧へ戻る">
			</form>
		</td>
		<td>
			<form action="/shop/reg" method="GET">
				@csrf
				<input type="submit" value="レジへ進む">
			</form>
		</td>
	</tr>
</table>
@endsection

@section('footer')
@endsection