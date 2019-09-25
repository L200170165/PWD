<html>
<head>
    <title>Variable</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <form method='post' action='tugas1.php'>
        <p>
            Nilai A : <input type='text' name='nilaiA' size='5'>
        </p>
        <p>
            Nilai B : <input type='text' name='nilaiB' size='5'>
        </p>
        <p>
            <input type='submit' value='jumlahkan' name='submit'>
        </p>
    </form>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $a = $_POST['nilaiA'];
    $b = $_POST['nilaiB'];
    $submit = $_POST['submit'];
    if($submit){
        echo"</br>Nilai A  : $a";
        echo"</br>Nilai B  : $b";
        echo"</br>Hasilnya  : ";
        echo $b + $a;
    }
    ?>
</body>
</html>