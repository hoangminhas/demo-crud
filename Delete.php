<?php
include_once "StudentManager.php";
include_once "Student.php";

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $studentMG = new StudentManager();
    $studentMG->delete($id);
    header('location:index.php');
}
