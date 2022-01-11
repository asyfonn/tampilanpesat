<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_siswa');



function read($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function register ($data){
    global $conn;
    
    $nama = htmlspecialchars($data["nama"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $warga = htmlspecialchars($data["warga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $asal = htmlspecialchars($data["asal"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $penghasilan = htmlspecialchars($data["penghasilan"]);
    $foto = htmlspecialchars($data["foto"]);
    

    //cek username
    $result = mysqli_query($conn, " SELECT nama FROM data WHERE nama ='$nama'");

    if (mysqli_fetch_assoc($result)){
        echo" <script>
                alert ('nama sudah ada !');
                document.location.href ='database.php';
              </script>";

        exit;        
        }
    }
?>