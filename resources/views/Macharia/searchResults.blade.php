
<html>
    <head>
        <title>Students</title>
    </head>
    <body>
       
<table border=1>
<tr>


<td>Student No.</td>
<td>Full_name</td>
<td>D.O.B</td>
<td>Address</td>
</tr>

@foreach ($students as $student)
<tr>

<td>{{$student->student_no}}</td>
<td>{{$student->full_name}}</td>
<td>{{$student->DOB}}</td>
<td>{{$student->address}}</td>

</tr>
@endforeach


</table>

<a href = "/">Back</a>
       
    </body>
</html>


