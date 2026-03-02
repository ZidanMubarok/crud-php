<?php
include "conect.php";
// Tangkap data dari form
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$country = $_POST['country'];

$query = "INSERT INTO reg SET nama='$name', contact='$contact', email='$email', gender='$gender', city='$city', country='$country'";
$result = mysqli_query($con, $query);

if (!$result) {
?>
    <script>
        alert("Data gagal ditambahkan")
        location.href = 'index.php'
    </script>
<?php
}
header('Location:index.php');
