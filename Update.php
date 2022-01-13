<?php
include_once "StudentManager.php";
include_once "Student.php";
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $studentMG = new StudentManager();
    $students = $studentMG->loadData($id);
    $student1 = $students[$id];
}
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
    <h1>Update student</h1>
    <form action="#" method="post">
        <input type="text" name="name" value="<?php echo $student1['name']?>">
        <input type="text" name="age" value="<?php echo $student1['age'] ?>">
        <input type="text" name="email" value="<?php echo $student1['email'] ?>">
        <input type="text" name="address" value="<?php echo $student1['address'] ?>">
        <button type="submit">Update</button>
    </form>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new Student($_REQUEST["name"], $_REQUEST["age"], $_REQUEST["email"], $_REQUEST["address"]);
    $studentManager = new StudentManager();
    $studentManager->update($id ,$student);
    //khi tao thanh cong 1 student se chuyen ve trang index
    header("location:index.php");
}



