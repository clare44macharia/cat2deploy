<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bidii School</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #E9967A;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
         

            <div class="content">
                <div class="title m-b-md">
                    Fees Module
                </div>
                  <div>
 <form action="students/search" method="POST" role="search">
               {{ csrf_field() }}
        <input type="text" name="searchValue"
            placeholder="Search student"> <span class="input-group-btn">
            <input type="submit" value="Search">
               
            <br><br>
    
</form>
                </div>

                <div class="links">
                <a href = "Macharia/students">Add Student</a>
 <a href = "Macharia/fees">Fees Payment</a>
<a href="Macharia/allStudents">All Students</a>
<a href="Macharia/totalFees">Total Fees</a>

                </div>
            </div>
        </div>
    </body>
</html>
