<?php
    include 'konek.php'; //Mengambil file dari konek.php
     
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Berfungsi memeriksa apakah data sesuai atau tidak
    $query = mysql_query("SELECT * FROM admin where username='$username' and password='$password'");
    $cek = mysql_num_rows($query);
    
    //Jika data sesuai maka akan masuk ke bisa.php , jika salah akan tampil peringatan Data Salah!!!!
    if($cek==1){
        header("location:bisa.php");
    }
    else{
    ?>
        <script language="JavaScript">
            alert('Data Salah!!!!');
            document.location='./';
        </script>
    <?php
    }
?>