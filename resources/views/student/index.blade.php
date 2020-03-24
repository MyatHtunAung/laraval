<html>
<head><title>View Student Records</title></head>
<body>
<a href='/student/create'>New Student</a><br/>
<table border=1>
<tr>
<td>ID</td>
<td>Name</td>
<td>College_id</td>
</tr>
@foreach ($student_objects as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->college_id}}</td>
</tr>
@endforeach
</table>
</body>
</html>