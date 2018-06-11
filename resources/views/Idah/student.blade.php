<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <form action="/add/student" method="post">
            {{csrf_field()}}

  <div class="form-group">
    <label for="student_number">Student Number</label>
    <input type="text" class="form-control" name="student_number" id="student_number"  placeholder="Enter student number">
    </div>
  <div class="form-group">
    <label for="FullName">Student Number</label>
    <input type="text" class="form-control" id="FullName "name="FullName"  placeholder="Enter full name">
    </div>
   <div class="form-group">
    <label for="DateofBirth">Date of Birth</label>
    <input type="date" class="form-control" name="DateofBirth" id="DateofBirth"  >
    </div>
    <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="Address" name="Address"  placeholder="Enter address">
    </div>
            <input type="submit" class="form-control" value="Add student">
  {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
