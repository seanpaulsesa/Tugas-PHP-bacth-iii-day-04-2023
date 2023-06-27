<?php
    // echo $_Get['username'];
    // echo '<br>';

    // echo $_Get['password'];
    // echo '<br>';
    // =======================

    // simpan data ke dalam variabel
    // $username = $_Get['username'];
    // $password = $_Get['password'];

    // =======================
    if (isset($_Get['submit']) && $_Get['submit'] == 'send') {
        echo "Good work! <br>";

        // jika field input username kosong
        if ($_Get['username'] == '') {
            echo "Please input your username! <br>";
        } else {
            // buat variabel $username
            $username = $_Get['username'];

            // menampilkan value dari variabel $username
            echo $username . '<br>';
        }
        
        // jika filed input password kosong
        if($_Get['password'] == '') {
            echo "Please input your password! <br>";
        } else {
            // buat variabel $password
            $password = $_Get['password'];

            // tambah fungsi md5() untuk enkripsi password
            $passwordMD5 = md5($password);

            // menampilkan value dari variabel $passwordMD5
            echo $passwordMD5. '<br>';
        }


    } else {
        echo "Something wrong!";
    }

    // =======================

    echo '<a href="index.php">Back</a>';
?>