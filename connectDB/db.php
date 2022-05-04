<?php 

$conn = mysqli_connect("localhost", "root", "", "kalijaga_web");

function query($query){
    global $conn; 
    $result = mysqli_query($conn, $query);
    $rows = [];
    
    while( $row = mysqli_fetch_assoc($result) ){ 
        $rows[] = $row;
    } 
    return $rows;
}

function registrasi($data){
    global $conn;
    
    $nama_depan = htmlspecialchars($data["nama_depan"]);
    $nama_belakang = htmlspecialchars($data["nama_belakang"]);
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $keterangan = htmlspecialchars("Customer");

    // cek password apabila tidak sama
    if ($password !== $password2) {
        echo "
            <script>
                alert('Password Tidak Sama')
            </script>
            ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    $query = "INSERT INTO akun
                VALUES    
              (default, '$email', '$password', '$keterangan', '$nama_depan', '$nama_belakang')
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function masuk($data){
    global $conn;

    $email = $data["email"];
    $password = $data["password"];

    $hasil = mysqli_query($conn, "SELECT * FROM akun WHERE
        email = '$email'");
    $baris_data = mysqli_fetch_assoc($hasil);
    
    var_dump($baris_data);
    die;

    if($baris_data["keterangan"] == "Admin"){
        // cek email "Admin"
        if( mysqli_num_rows($hasil) == 1 ){

            // cek password "Admin"
            if($password == $baris_data["password"]){
                return 1;
            }
        }
    } else if ($baris_data["keterangan"] == "Customer"){
        // cek email "Password"
        if( mysqli_num_rows($hasil) == 1 ) {
    
            // cek password "Password"
            if(password_verify($password, $baris_data["password"])){
                return 2;
            }
        }
    }

}

function ubahAkunAdmin($data){
    global $conn;

    $id = $data["idAkun"];
    $namaDepan = $data["namaDepan"];
    $namaBelakang = $data["namaBelakang"];
    $noTelepon = $data["noTelepon"];
    $email = $data["email"];
    $password = $data["password"];

    $query = "UPDATE akun SET
            email = '$email',
            password = '$password',
            nama_depan = '$namaDepan',
            nama_belakang = '$namaBelakang',
            no_telepon = '$noTelepon'
            WHERE id_akun = $id;";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function unggahDataGambar(){
    global $conn;

    $namaFile = $_FILES["gambarProduk"]["name"];
    $ukuranFile = $_FILES["gambarProduk"]["size"];
    $error = $_FILES["gambarProduk"]["error"];
    $tmpName = $_FILES["gambarProduk"]["tmp_name"];

    // cek apakah tidak ada gambar yang diupload 
    /*if ( $error === 4 ) {
        echo "
            <script>
                alert('pilih gambar terlebih dahulu');
            </script>
        ";
    }*/

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = end($ekstensiGambar);
    $ekstensiGambar = strtolower($ekstensiGambar);
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "
            <script>
                alert('file anda bukan gambar!');
            </script>
        ";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ( $ukuranFile > 1200000 ) {
        echo "
            <script>
                alert('ukuran gambar terlalu besar');
            </script>
        ";
        return false;
    }
    
    
    // sesuai kriteria, gambar di upload di sistem
    // menghindari nama gambar sama
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;
    move_uploaded_file($tmpName, '../img/'.$namaFileBaru);

    return $namaFileBaru;
}

function tambahProduk($data){
    global $conn;

    $namaProduk = htmlspecialchars($data["namaProduk"]);
    $stokProduk = htmlspecialchars($data["stokProduk"]);
    $hargaProduk = htmlspecialchars($data["hargaProduk"]);
    $deskripsiProduk = htmlspecialchars($data["deskripsiProduk"]);

    $akses1 = ""; 
    $aksesPengiriman1 = "";
    $akses2 = ""; 
    $aksesPengiriman2 = "";
    $akses3 = ""; 
    $aksesPengiriman3 = "";
    $akses4 = ""; 
    $aksesPengiriman4 = "";
    $akses5 = ""; 
    $aksesPengiriman5 = "";
    $akses6 = ""; 
    $aksesPengiriman6 = "";
    $akses7 = ""; 
    $aksesPembayaran1 = "";
    $akses8 = ""; 
    $aksesPembayaran2 = "";
    $akses9 = ""; 
    $aksesPembayaran3 = "";
    $akses10 = ""; 
    $aksesPembayaran4 = "";
    $akses11 = ""; 
    $aksesPembayaran5 = "";
    $akses12 = ""; 
    $aksesPembayaran6 = "";

    // data jasa pengiriman
    if(isset($data["SICEPAT"])){
        $akses1 = $data["SICEPAT"];
        $aksesPengiriman1 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses1'");
        $aksesPengiriman1 = mysqli_fetch_assoc($aksesPengiriman1);
        $aksesPengiriman1 = $aksesPengiriman1["id_pengiriman"];
    } else {
        $data["SICEPAT"] = "";
        $akses1 = $data["SICEPAT"];
        $aksesPengiriman1 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses1'");
        $aksesPengiriman1 = mysqli_fetch_assoc($aksesPengiriman1);
    }

    if(isset($data["JNE"])) {
        $akses2 = $data["JNE"];
        $aksesPengiriman2 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses2'");
        $aksesPengiriman2 = mysqli_fetch_assoc($aksesPengiriman2);
        $aksesPengiriman2 = $aksesPengiriman2["id_pengiriman"];
    } else {
        $data["JNE"] = "";
        $akses2 = $data["JNE"];
        $aksesPengiriman2 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses2'");
        $aksesPengiriman2 = mysqli_fetch_assoc($aksesPengiriman2);
    }

    if(isset($data["Anteraja"])) {
        $akses3 = $data["Anteraja"];
        $aksesPengiriman3 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses3'");
        $aksesPengiriman3 = mysqli_fetch_assoc($aksesPengiriman3);
        $aksesPengiriman3 = $aksesPengiriman3["id_pengiriman"];
    } else {
        $data["Anteraja"] = "";
        $akses3 = $data["Anteraja"];
        $aksesPengiriman3 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses3'");
        $aksesPengiriman3 = mysqli_fetch_assoc($aksesPengiriman3);
    }
    
    if(isset($data["Grab"])) {
        $akses4 = $data["Grab"];
        $aksesPengiriman4 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses4'");
        $aksesPengiriman4 = mysqli_fetch_assoc($aksesPengiriman4);
        $aksesPengiriman4 = $aksesPengiriman4["id_pengiriman"];
    } else {
        $data["Grab"] = "";
        $akses4 = $data["Grab"];
        $aksesPengiriman4 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses4'");
        $aksesPengiriman4 = mysqli_fetch_assoc($aksesPengiriman4);
    }

    if(isset($data["J&T"])) {
        $akses5 = $data["J&T"];
        $aksesPengiriman5 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses5'");
        $aksesPengiriman5 = mysqli_fetch_assoc($aksesPengiriman5);
        $aksesPengiriman5 = $aksesPengiriman5["id_pengiriman"];
    } else {
        $data["J&T"] = "";
        $akses5 = $data["J&T"];
        $aksesPengiriman5 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses5'");
        $aksesPengiriman5 = mysqli_fetch_assoc($aksesPengiriman5);
    }

    if(isset($data["Gojek"])) {
        $akses6 = $data["Gojek"];
        $aksesPengiriman6 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses6'");
        $aksesPengiriman6 = mysqli_fetch_assoc($aksesPengiriman6);
        $aksesPengiriman6 = $aksesPengiriman6["id_pengiriman"];
    } else {
        $data["Gojek"] = "";
        $akses6 = $data["Gojek"];
        $aksesPengiriman6 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses6'");
        $aksesPengiriman6 = mysqli_fetch_assoc($aksesPengiriman6);
    }

    // data opsi pembayaran
    if(isset($data["BCA"])) {
        $akses7 = $data["BCA"];
        $aksesPembayaran1 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses7'");
        $aksesPembayaran1 = mysqli_fetch_assoc($aksesPembayaran1);
        $aksesPembayaran1 = $aksesPembayaran1["id_pembayaran"];
    } else {
        $data["BCA"] = "";
        $akses7 = $data["BCA"];
        $aksesPembayaran1 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses7'");
        $aksesPembayaran1 = mysqli_fetch_assoc($aksesPembayaran1);
    }

    if(isset($data["BRI"])) {
        $akses8 = $data["BRI"];
        $aksesPembayaran2 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses8'");
        $aksesPembayaran2 = mysqli_fetch_assoc($aksesPembayaran2);
        $aksesPembayaran2 = $aksesPembayaran2["id_pembayaran"];
    } else {
        $data["BRI"] = "";
        $akses8 = $data["BRI"];
        $aksesPembayaran2 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses8'");
        $aksesPembayaran2 = mysqli_fetch_assoc($aksesPembayaran2);
    }

    if(isset($data["Mandiri"])) {
        $akses9 = $data["Mandiri"];
        $aksesPembayaran3 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses9'");
        $aksesPembayaran3 = mysqli_fetch_assoc($aksesPembayaran3);
        $aksesPembayaran3 = $aksesPembayaran3["id_pembayaran"];
    } else {
        $data["Mandiri"] = "";
        $akses9 = $data["Mandiri"];
        $aksesPembayaran3 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses9'");
        $aksesPembayaran3 = mysqli_fetch_assoc($aksesPembayaran3);
    }

    if(isset($data["BNI"])) {
        $akses10 = $data["BNI"];
        $aksesPembayaran4 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses10'");
        $aksesPembayaran4 = mysqli_fetch_assoc($aksesPembayaran4);
        $aksesPembayaran4 = $aksesPembayaran4["id_pembayaran"];
    } else {
        $data["BNI"] = "";
        $akses10 = $data["BNI"];
        $aksesPembayaran4 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses10'");
        $aksesPembayaran4 = mysqli_fetch_assoc($aksesPembayaran4);
    }

    if(isset($data["BI"])) {
        $akses11 = $data["BI"];
        $aksesPembayaran5 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses11'");
        $aksesPembayaran5 = mysqli_fetch_assoc($aksesPembayaran5);
        $aksesPemabayaran5 = $aksesPembayaran5["id_pembayaran"];
    } else {
        $data["BI"] = "";
        $akses11 = $data["BI"];
        $aksesPembayaran5 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses11'");
        $aksesPembayaran5 = mysqli_fetch_assoc($aksesPembayaran5);
    }

    if(isset($data["Panin"])){
        $akses12 = $data["Panin"];
        $aksesPembayaran6 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses12'");
        $aksesPembayaran6 = mysqli_fetch_assoc($aksesPembayaran6);
        $aksesPembayaran6 = $aksesPembayaran6["id_pembayaran"];
    } else {
        $data["Panin"] = "";
        $akses12 = $data["Panin"];
        $aksesPembayaran6 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses12'");
        $aksesPembayaran6 = mysqli_fetch_assoc($aksesPembayaran6);
    }

    // upload gambar
    $gambar = unggahDataGambar();
    if(!$gambar){
        return false;
    }

    // kueri tambah produk di table produk
    $query = "INSERT INTO produk 
                VALUES(
                    NULL,
                    '$namaProduk',
                    '$stokProduk',
                    '$hargaProduk',
                    '$deskripsiProduk',
                    '$gambar'
                )";
    mysqli_query($conn, $query);

    // dapatkan id produk terbaru
    // untuk dimasukkan ke dalam akses pengiriman dan pembayaran
    $idProduk = mysqli_query($conn,"SELECT id_produk FROM produk WHERE nama_produk = '$namaProduk'");
    $idProduk = mysqli_fetch_assoc($idProduk);
    $idProduk = $idProduk["id_produk"];

    // kueri di table akses_pengiriman
    $query2 = "INSERT INTO akses_pengiriman (id_akses_pengiriman, id_produk, id_pengiriman) 
                VALUES
                (NULL,'$idProduk','$aksesPengiriman1'),
                (NULL,'$idProduk','$aksesPengiriman2'),
                (NULL,'$idProduk','$aksesPengiriman3'),
                (NULL,'$idProduk','$aksesPengiriman4'),
                (NULL,'$idProduk','$aksesPengiriman5'),
                (NULL,'$idProduk','$aksesPengiriman6');";
    mysqli_query($conn, $query2);

    // kueri di table akses_pembayaran
    $query3 = "INSERT INTO akses_pembayaran (id_akses_pembayaran, id_produk, id_pembayaran) 
                VALUES
                (NULL,'$idProduk','$aksesPembayaran1'),
                (NULL,'$idProduk','$aksesPembayaran2'),
                (NULL,'$idProduk','$aksesPembayaran3'),
                (NULL,'$idProduk','$aksesPembayaran4'),
                (NULL,'$idProduk','$aksesPembayaran5'),
                (NULL,'$idProduk','$aksesPembayaran6');";
    mysqli_query($conn, $query3);

    return mysqli_affected_rows($conn);
}

// -- belum selesai 
function ubahProduk($data){
    global $conn;

    $idProduk = htmlspecialchars($data["id_produk"]);
    $namaProduk = htmlspecialchars($data["namaProduk"]);
    $stokProduk = htmlspecialchars($data["stokProduk"]);
    $hargaProduk = htmlspecialchars($data["hargaProduk"]);
    $deskripsiProduk = htmlspecialchars($data["deskripsiProduk"]);

    $akses1 = ""; 
    $aksesPengiriman1 = "";
    $akses2 = ""; 
    $aksesPengiriman2 = "";
    $akses3 = ""; 
    $aksesPengiriman3 = "";
    $akses4 = ""; 
    $aksesPengiriman4 = "";
    $akses5 = ""; 
    $aksesPengiriman5 = "";
    $akses6 = ""; 
    $aksesPengiriman6 = "";
    $akses7 = ""; 
    $aksesPembayaran1 = "";
    $akses8 = ""; 
    $aksesPembayaran2 = "";
    $akses9 = ""; 
    $aksesPembayaran3 = "";
    $akses10 = ""; 
    $aksesPembayaran4 = "";
    $akses11 = ""; 
    $aksesPembayaran5 = "";
    $akses12 = ""; 
    $aksesPembayaran6 = "";

    // AMBIL DATA
    // data jasa pengiriman
    if(isset($data["SICEPAT"])){
        $akses1 = $data["SICEPAT"];
        $aksesPengiriman1 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses1'");
        $aksesPengiriman1 = mysqli_fetch_assoc($aksesPengiriman1);
        $aksesPengiriman1 = $aksesPengiriman1["id_pengiriman"];
    } else {
        $data["SICEPAT"] = "";
        $akses1 = $data["SICEPAT"];
        $aksesPengiriman1 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses1'");
        $aksesPengiriman1 = mysqli_fetch_assoc($aksesPengiriman1);
    }

    if(isset($data["JNE"])) {
        $akses2 = $data["JNE"];
        $aksesPengiriman2 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses2'");
        $aksesPengiriman2 = mysqli_fetch_assoc($aksesPengiriman2);
        $aksesPengiriman2 = $aksesPengiriman2["id_pengiriman"];
    } else {
        $data["JNE"] = "";
        $akses2 = $data["JNE"];
        $aksesPengiriman2 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses2'");
        $aksesPengiriman2 = mysqli_fetch_assoc($aksesPengiriman2);
    }

    if(isset($data["Anteraja"])) {
        $akses3 = $data["Anteraja"];
        $aksesPengiriman3 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses3'");
        $aksesPengiriman3 = mysqli_fetch_assoc($aksesPengiriman3);
        $aksesPengiriman3 = $aksesPengiriman3["id_pengiriman"];
    } else {
        $data["Anteraja"] = "";
        $akses3 = $data["Anteraja"];
        $aksesPengiriman3 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses3'");
        $aksesPengiriman3 = mysqli_fetch_assoc($aksesPengiriman3);
    }
    
    if(isset($data["Grab"])) {
        $akses4 = $data["Grab"];
        $aksesPengiriman4 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses4'");
        $aksesPengiriman4 = mysqli_fetch_assoc($aksesPengiriman4);
        $aksesPengiriman4 = $aksesPengiriman4["id_pengiriman"];
    } else {
        $data["Grab"] = "";
        $akses4 = $data["Grab"];
        $aksesPengiriman4 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses4'");
        $aksesPengiriman4 = mysqli_fetch_assoc($aksesPengiriman4);
    }

    if(isset($data["J&T"])) {
        $akses5 = $data["J&T"];
        $aksesPengiriman5 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses5'");
        $aksesPengiriman5 = mysqli_fetch_assoc($aksesPengiriman5);
        $aksesPengiriman5 = $aksesPengiriman5["id_pengiriman"];
    } else {
        $data["J&T"] = "";
        $akses5 = $data["J&T"];
        $aksesPengiriman5 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses5'");
        $aksesPengiriman5 = mysqli_fetch_assoc($aksesPengiriman5);
    }

    if(isset($data["Gojek"])) {
        $akses6 = $data["Gojek"];
        $aksesPengiriman6 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses6'");
        $aksesPengiriman6 = mysqli_fetch_assoc($aksesPengiriman6);
        $aksesPengiriman6 = $aksesPengiriman6["id_pengiriman"];
    } else {
        $data["Gojek"] = "";
        $akses6 = $data["Gojek"];
        $aksesPengiriman6 = mysqli_query($conn, "SELECT id_pengiriman FROM jasa_pengiriman WHERE nama_jasa = '$akses6'");
        $aksesPengiriman6 = mysqli_fetch_assoc($aksesPengiriman6);
    }

    // data opsi pembayaran
    if(isset($data["BCA"])) {
        $akses7 = $data["BCA"];
        $aksesPembayaran1 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses7'");
        $aksesPembayaran1 = mysqli_fetch_assoc($aksesPembayaran1);
        $aksesPembayaran1 = $aksesPembayaran1["id_pembayaran"];
    } else {
        $data["BCA"] = "";
        $akses7 = $data["BCA"];
        $aksesPembayaran1 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses7'");
        $aksesPembayaran1 = mysqli_fetch_assoc($aksesPembayaran1);
    }

    if(isset($data["BRI"])) {
        $akses8 = $data["BRI"];
        $aksesPembayaran2 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses8'");
        $aksesPembayaran2 = mysqli_fetch_assoc($aksesPembayaran2);
        $aksesPembayaran2 = $aksesPembayaran2["id_pembayaran"];
    } else {
        $data["BRI"] = "";
        $akses8 = $data["BRI"];
        $aksesPembayaran2 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses8'");
        $aksesPembayaran2 = mysqli_fetch_assoc($aksesPembayaran2);
    }

    if(isset($data["Mandiri"])) {
        $akses9 = $data["Mandiri"];
        $aksesPembayaran3 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses9'");
        $aksesPembayaran3 = mysqli_fetch_assoc($aksesPembayaran3);
        $aksesPembayaran3 = $aksesPembayaran3["id_pembayaran"];
    } else {
        $data["Mandiri"] = "";
        $akses9 = $data["Mandiri"];
        $aksesPembayaran3 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses9'");
        $aksesPembayaran3 = mysqli_fetch_assoc($aksesPembayaran3);
    }

    if(isset($data["BNI"])) {
        $akses10 = $data["BNI"];
        $aksesPembayaran4 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses10'");
        $aksesPembayaran4 = mysqli_fetch_assoc($aksesPembayaran4);
        $aksesPembayaran4 = $aksesPembayaran4["id_pembayaran"];
    } else {
        $data["BNI"] = "";
        $akses10 = $data["BNI"];
        $aksesPembayaran4 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses10'");
        $aksesPembayaran4 = mysqli_fetch_assoc($aksesPembayaran4);
    }

    if(isset($data["BI"])) {
        $akses11 = $data["BI"];
        $aksesPembayaran5 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses11'");
        $aksesPembayaran5 = mysqli_fetch_assoc($aksesPembayaran5);
        $aksesPemabayaran5 = $aksesPembayaran5["id_pembayaran"];
    } else {
        $data["BI"] = "";
        $akses11 = $data["BI"];
        $aksesPembayaran5 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses11'");
        $aksesPembayaran5 = mysqli_fetch_assoc($aksesPembayaran5);
    }

    if(isset($data["Panin"])){
        $akses12 = $data["Panin"];
        $aksesPembayaran6 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses12'");
        $aksesPembayaran6 = mysqli_fetch_assoc($aksesPembayaran6);
        $aksesPembayaran6 = $aksesPembayaran6["id_pembayaran"];
    } else {
        $data["Panin"] = "";
        $akses12 = $data["Panin"];
        $aksesPembayaran6 = mysqli_query($conn, "SELECT id_pembayaran FROM opsi_pembayaran WHERE opsi = '$akses12'");
        $aksesPembayaran6 = mysqli_fetch_assoc($aksesPembayaran6);
    }

    // ambil id_pengiriman di table akses_pengiriman
    $query0 = mysqli_query($conn, "SELECT id_pengiriman FROM akses_pengiriman WHERE id_produk = $idProduk");
    // $query0 = mysqli_fetch_all($query0,MYSQLI_ASSOC);

    var_dump($query0);
    die;
    // upload gambar
    $gambar = unggahDataGambar();
    if(!$gambar){
        return false;
    }

    // kueri ubah produk di table produk
    $query = "UPDATE produk
                SET
                nama_produk = '$namaProduk',
                stok_produk = '$stokProduk',
                harga_produk = '$hargaProduk',
                deskripsi_produk = '$deskripsiProduk',
                gambar = '$gambar'
                WHERE
                id = '$idProduk'
            ";
    mysqli_query($conn, $query);

    // dapatkan id produk terbaru
    // untuk dimasukkan ke dalam akses pengiriman dan pembayaran
    $idProduk = mysqli_query($conn,"SELECT id_produk FROM produk WHERE nama_produk = '$namaProduk'");
    $idProduk = mysqli_fetch_assoc($idProduk);
    $idProduk = $idProduk["id_produk"];

    // kueri di table akses_pengiriman
    $query2 = mysqli_query($conn, "UPDATE akses_pengiriman SET id_pengiriman=$aksesPengiriman1 WHERE id_produk=$idProduk AND id_pengiriman=$query[0]");

    // kueri di table akses_pembayaran
    $query3 = "";
    mysqli_query($conn, $query3);

    return mysqli_affected_rows($conn);
}
// -- akhir belum selesai

function ambilDataProduk($query){
    global $conn;
    
    $hasil = query($query);

    return $hasil;
}

?>