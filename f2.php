<html>
    <head><title>tugas 2</title></head>

    <body>
        <form method='post' action='tugas2.php'>
            masukan nilai <input type='number' name='nilai' size='20'></br>
            <input type='submit' name='submit' value='submit'></br>
        </form>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $nilai = $_POST['nilai'];
        $submit = $_POST['submit'];
        if($submit){
            if($nilai==''){
                echo"nilai tidak boleh kosong";
            }elseif($nilai % 2 == 0){
                echo"$nilai adalah bilangan genap";
            }elseif($nilai % 2 != 0){
                echo"$nilai adalah bilangan ganjil";
            }
        }
        ?>
    </body>
</html>