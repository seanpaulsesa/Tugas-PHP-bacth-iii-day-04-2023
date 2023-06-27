<?php
// kondisi jika tombol sumit memiliki value = send
if(isset($_POST['submit']) && $_POST['submit'] == 'send') {


    // buat variabel baru
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // menampilkan value yang tersimpann di dalam variabel
    echo '<div> Username :'.$username.'</div> 
          <div> Password:'. $password.'</div>
          ';
} else {
    echo "<h1>Oops!</h1> Something wrong!";
}
?>