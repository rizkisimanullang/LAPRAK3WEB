<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
        $teks=$_POST['teks'];
        $panjang = strlen($teks);
        $input = str_split($teks);
        $a=0;
        $b=0;
        while($b<$panjang){
            echo strtoupper($input[$a]);
            for($i=1; $i<$panjang; $i++){
                echo strtolower($input[$a]);
            }
            $b++;
            $a++;
        }
    }
?>