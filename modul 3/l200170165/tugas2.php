<html>
<head>
    <title>Variable</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <form method='post' action='tugas2.php'>
        <p>
            masukkan nilai : <input type='text' name='nilai' size='5'>
        </p>
        <p>
            <input type='submit' value='submit' name='submit'>
        </p>
    </form>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nilai = $_POST['nilai'];
    $submit = $_POST['submit'];
    if($submit){
        if($nilai%2 == 0)
        {echo "bilangan anda adalah $nilai Bilangan Genap<br>";}
        else
        {echo "bilangan anda adalah $nilai  Bilangan Ganjil<br>";}
    }
    ?>
</body>
</html>