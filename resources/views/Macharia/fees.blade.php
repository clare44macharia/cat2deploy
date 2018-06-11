<!DOCTYPE html>
<html>

<body>
<h2>Fees Payment</h2>

<form action="fees/store" method="post">
{{ csrf_field() }}
  Student_id:<br>
  <input type="text" name="student_id" placeholder="Enter Student Number">
  <br>
  Date_of_payment:<br>
  <input type="date" name="date_of_payment" >
  <br>
  Amount:<br>
  <input type="text" name="amount" placeholder="Enter Amount paid">
  <br><br>
  <input type="submit" value="Save">
</form> <br>
<a href = "/">Back</a>


</html>