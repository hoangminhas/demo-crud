
<?php
include "Student.php";
include "StudentManager.php";
$studentMG = new StudentManager();
//Tao mang lay du lieu
$students = $studentMG->loadData();
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
<a href="Create.php">Create</a>
<h1>Danh sach hoc sinh</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Address</th>
<!--        colspan: gop 3 cot -->
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student): ?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['age']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['address']?></td>
        <td><a href="Detail.php?id=<?php echo $key ?>">Detail</a></td>
        <td><a href="Update.php?id=<?php echo $key ?>">Update</a></td>
        <td><a href="Delete.php?id=<?php echo $key ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
