<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
include 'config.php';

$res = mysqli_query($mysqli, "SELECT * FROM tbldoctor WHERE username='$username' AND password='$password'");
$row = mysqli_fetch_array($res);
$count = mysqli_num_rows($res); // if uname/pass correct, it should return 1 row

if ($count == 1 && $row['password'] == $password) {
    $_SESSION['doctor'] = $row['id'];
    header("Location: doctor.php");
} else {
    $res = mysqli_query($mysqli, "SELECT * FROM tbladmin WHERE user_name='$username' AND user_pass='$password'");
    $row = mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);

    if ($count == 1 && $row['user_pass'] == $password) {
        $_SESSION['admin'] = $row['user_id'];
        header("Location: admin/admin.php");
    } else {
        $res = mysqli_query($mysqli, "SELECT * FROM tblpatient WHERE username='$username' AND password='$password'");
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res);

        if ($count == 1 && $row['password'] == $password) {
            $_SESSION['patient'] = $row['id'];
            header("Location: patient");
        } else {
            Print '<script>alert("Incorrect credentials!");</script>';
            Print '<script>window.location.assign("index.php");</script>';
        }
    }
}
?>
