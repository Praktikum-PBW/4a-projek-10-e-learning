<?php
if(isset($_POST['submit'])){
    include '../aset/lib/koneksi.php';

    $id_user = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $review = htmlentities(htmlspecialchars(strip_tags(trim($_POST['review']))));

    $query = mysqli_query($koneksi, "INSERT INTO review VALUES (null, '$id_user', '$review')");
    if($query){
        header("Location: index.php?page=review");
    }else{
        echo "gagal";
    }
}
?>