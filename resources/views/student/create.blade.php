<html>
<head><title>Student Management | Add</title></head>
<body>
<form action="/student" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td><input type='text' name='name' /></td>
</tr>
<tr>
<td>College</td>
<td><input type='number' name='college_id' min='0' max='100' step='1' /></td>
</tr>
<tr>
<td colspan='2'><input type='submit' value="Add student" /></td>
</tr>
</table>
</form>
</body>
</html>