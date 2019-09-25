<html>
<head>
    <title>Variable</title>
</head>
<body>
    <h1>Nilai</h1>
    <form method='post' action='kendali.php'>
        <p>
            Masukkan Nilai (0-100) : <input type='text'name='nilai' size='3'>
        </p>
        <p>
            <input type='submit' value='proses' name='submit'>
        </p>
    </form>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nilai = $_POST['nilai'];
    $submit = $_POST['submit'];
    if($submit){
        if($nilai==''){
            $huruf='"Nilai kosong/belum diisi"';
        }
        elseif($nilai<=20){
            $huruf='E';
        }
        elseif($nilai<=40){
            $huruf='D';
        }
        elseif($nilai<=60){
            $huruf='C';
        }
        elseif($nilai<=80){
            $huruf='B';
        }
        elseif($nilai<=100){
            $huruf='A';
        }
        else{
            $huruf='"INPUT NGAWUR"';
        }
        echo"Nilai Angka adalah $nilai</br>";
        echo"Maka anda mendapatkan $huruf";
    }
    ?>
</body>
</html>