<html>
<head><title>Product Management | Add</title></head>
<body>
<form action="/product" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td><input type='text' name='name' /></td>
</tr>

<td>Brand</td>
<td><input type='text' name='brand' /></td>
</tr>
<td>remark</td>
<td><input type='text' name='remark' /></td>
</tr>
<tr>
<td>Price</td>
<td><input type='number' name='price' min='0' max='1000' step='1' /></td>
</tr>
<tr>
<td colspan='2'><input type='submit' value="Add product" /></td>
</tr>
</table>
</form>
</body>
</html>