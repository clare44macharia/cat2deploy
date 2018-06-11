
<html>
    <head>
        <title>Total Fees Report</title>
    </head>
    <body>
       
<table border=1>
<tr>

<td>Date_of_payment</td>
<td>Amount</td>
</tr>

@foreach ($fees as $fee)
<tr>

<td>{{$fee->date_of_payment}}</td>
<td>{{$fee->amount}}</td>


</tr>
@endforeach


</table>

<a href = "/">Back</a>
       
    </body>
</html>


