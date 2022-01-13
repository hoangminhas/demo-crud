<?php
include_once "StudentManager.php";
include_once "Student.php";
$studentMG = new StudentManager();
$students = $studentMG->loadData();
$tudent = $students[$_REQUEST['id']];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>TTCT</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $tudent['name']?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo $tudent['age']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $tudent['email']?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $tudent['address']?></td>
    </tr>
</table>
<button><a href="index.php">Back</a></button>
</body>
</html>
