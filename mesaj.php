<?php
$nume = $_POST['nume'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$mesaj = $_POST['mesaj'];

$conn = new mysqli('localhost', 'root', '', 'mesaje_coffeshop');
if(!$conn)
{
    echo "Am intampinat o problema in conectarea la baza de date";
}
else{
    $query = "INSERT INTO `mesaj_utilizator`(`Nume`, `Email`, `Telefon`, `Mesaj`) VALUES ('$nume', '$email', '$telefon', '$mesaj')";
    $insert = mysqli_query($conn, $query);
    if(!$insert){
        echo "Au aparut probleme la trimiterea mesajului tau";
    }
    else{
        echo "<script> alert('Mesajul tau a fost trimis!');</script>";
    }
}
?>