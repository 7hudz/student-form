<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $student = array(
        'id' => $id,
        'fullname' => $fullname,
        'email' => $email,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender
    );

    $students = array();
    if (isset($_COOKIE['students'])) {
        $students = json_decode($_COOKIE['students'], true);
    }

    $students[] = $student;
    setcookie('students', json_encode($students), time() + (86400 * 30), "/"); // 86400 = 1 day

    header("Location: display.php");
    exit();
}

