<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
table,tr,td{
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Phone</td>
<td>Quantity</td>
<td>Gender</td>
<td>Hobbies</td>
<td>Images</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->firstname }}</td>
<td>{{ $user->lastname }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->qunatity }}</td>
<td>{{ $user->gander }}</td>
<td>{{ $user->hobbies }}</td>
<td>{{ $user->images }}</td>
</tr>
@endforeach
</table>
</body>
</html>



