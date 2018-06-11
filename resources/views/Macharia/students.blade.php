<!DOCTYPE html>
<html>

<body>
<h2>Students</h2>

<form action="students/store" method="post">
{{ csrf_field() }}
  Student_no:<br>
  <input type="text" name="student_no" placeholder="Enter Student Number">
  <br>
  Full Name:<br>
  <input type="text" name="full_name" placeholder="Enter Full Name">
  <br>
  Date of Birth:<br>
  <input type="date" name="DOB" >
  <br>
  Address:<br>
  <input type="text" name="address" placeholder="Enter Address">
  <br><br>
  <input type="submit" value="Save">
</form> <br>
<a href = "/">Back</a>


</html>