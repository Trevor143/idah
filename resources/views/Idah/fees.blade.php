<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
    <div class="jumbotron">
            <form action="/search/studentnumber" method="post">
        <div class="form-group">
            <label for=""student_number>Enter tudent Number</label>
            <input type="text" class="form-control" name="student_number" id="student_number"  placeholder="Enter student number">
            <input type="submit" value="Search">


        </div>
            </form>


    </div>
    </body>
</html>
