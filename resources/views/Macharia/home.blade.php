<!DOCTYPE html>
<html>

<body>
<h2>Bidii School</h2>
<form action="students/search" method="get">
{{ csrf_field() }}
<input type="text" name="student_no" placeholder="Enter student_no">
<input type="submit" value="Search"><br><br>
</form>
<!-- {{action('StudentsController@search')}} -->


<a href = "Macharia/students">Add Student</a><br><br>
<a href = "Macharia/fees">Fees Payment</a><br><br>
<a href="Macharia/allStudents">All Students</a><br><br>
<a href="Macharia/allFees">Total Fees</a>



</html>