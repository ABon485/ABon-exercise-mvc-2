<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
   <!-- students.blade.php -->

<p>List of Students:</p><br>
@foreach ($students as $student)
    <div class="student">
        <h2>{{ $student->name }} in class: {{ $student->class }}, age: {{ $student->age }}</h2>
    </div>
@endforeach
</body>

</html>