<html>
<head><title>View Product Records</title></head>
<body>
<a href='/product/create'>New Product</a><br/>
<table border=1>
<tr>
<td>ID</td>
<td>Name</td>
<td>brand</td>
<td>remark</td>
<td>price</td>

</tr>
@foreach ($product_objects as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->brand}}</td>
<td>{{ $product->remark}}</td>
<td>{{ $product->price}}</td>
</tr>
@endforeach
</table>
</body>
</html>