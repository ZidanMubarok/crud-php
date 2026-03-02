<?php
include "conect.php";
$id = htmlspecialchars($_POST['id']);
$nama = htmlspecialchars($_POST['nama']);
$contact = htmlspecialchars($_POST['contact']);
$email = htmlspecialchars($_POST['email']);
$city = htmlspecialchars($_POST['city']);
$gender = htmlspecialchars($_POST['gender']);
$country = htmlspecialchars($_POST['country']);

$update = mysqli_query($con, "UPDATE reg SET nama='$nama', contact='$contact', email='$email', gender='$gender', city='$city', country='$country' WHERE id='$id'");

if ($update) {
    header("location: index.php");
    exit;
} else {
?>
    <script>
        alert('Data siswa gagal di edit');
        document.location.href = 'index.php';
    </script>
<?php
}
?>