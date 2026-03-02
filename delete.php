<?php
include "conect.php";

// Tangkap id lewat url
$id = $_GET['id'];
// Query untuk hapus data berdasarkan id
$query = "DELETE FROM reg WHERE id = '$id'";
$result = mysqli_query($con, $query);
if ($result) {
    header("location: index.php");
    exit;
} else {
?>
    <script>
        alert('Data gagal di hapus');
        document.location.href = 'index.php';
    </script>
<?php
}
?>