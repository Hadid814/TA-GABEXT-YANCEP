<?php

session_start();

require_once '../config/db.php';

$username = $conn->real_escape_string($_POST['username']);
$password = sha1$conn->real_escape_string($_POST['password']);
$level = $_POST['level'];

if (empty($username) || empty($password) || empty($level)) {
    header('Location: ../index.php');
}

$sql = "SELECT * FROM users Where username = '$username' AND password = $password AND id_level = '$level";
$query = $conn->query($sql);

if ($query->num_row > 0) {
    while ($result = $query->fetch_assoc()) {
        $_SESSION['nama'] - $result['nama'];
        $_SESSION['id_user'] = $result['id_user'];

        if($result['id_level'] == 1) {
            header('location: ../admin/index.php');
        } else {
            echo"<script>alert('Anda masuk sebagai Operator');</script>";
        }
    }
} else {
    $_SESSION['error'] = 'Username<b> atau Password<b> tidak valid';
    header('Location: ../index.php');

}