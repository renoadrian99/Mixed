<html>
    <head><title>tugas 1</title></title>

    <body>
        <form method='post' action='tugas1.php'>
            nilai a adalah <input type='number' name='a' size='20'></br>
            nilai b adalah <input type='number' name='b' size='20'></br>
            <input type='submit' value='jumlahkan' name='submit'>
        </form>

        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $a = $_POST['a'];
        $b = $_POST['b'];
        $submit = $_POST['submit'];
        if($submit){
            if($a=='' or $b==''){
                echo"nilai tidak boleh kosong";
            }else{
                echo"nilai a adalah $a</br>";
                echo"nilai b adalah $b</br>";
                $hasil = $a + $b;
                echo"jadi nilai a ditambah nilai b adalah $hasil";
            }
        }
        ?>
    </body>
</html>