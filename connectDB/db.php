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

?>