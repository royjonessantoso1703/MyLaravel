<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $mat = $_POST['mat'];
        $bio = $_POST['bio'];
        $fis = $_POST['fis'];
        $kim = $_POST['kim'];
        $bin = $_POST['bin'];
        $bing = $_POST['bing'];
        
        function huruf($nilaiHuruf){
            if($nilaiHuruf >= 85 && $nilaiHuruf <= 100){
                echo"A";
            }else if($nilaiHuruf >= 75 && $nilaiHuruf <= 84){
                echo"B";
            }else if($nilaiHuruf >= 65 && $nilaiHuruf <= 74){
                echo"C";
            }else if($nilaiHuruf >= 50 && $nilaiHuruf <= 64){
                echo"D";
            }else{
                echo"E";
            }
        }
        function rata($mat, $bio, $fis, $kim, $bin, $bing){
            $avg = ($mat + $bio + $fis + $kim + $bin + $bing)/6;
            return "$avg";
        }
    ?>
    <table border="1" cellpadding="10">
        <tr>
            <td>Mata Pelajaran</td>
            <td>Angka</td>
            <td>Huruf</td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>
                <?php 
                echo $mat;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($mat);
                ?>
            </td>
        </tr>
        <tr>
            <td>Biologi</td>
            <td>
                <?php 
                echo $bio;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($bio);
                ?>
            </td>
        </tr>
        <tr>
            <td>Fisika</td>
            <td>
                <?php 
                echo $fis;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($fis);
                ?>
            </td>
        </tr>
        <tr>
            <td>Kimia</td>
            <td>
                <?php 
                echo $kim;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($kim);
                ?>
            </td>
        </tr>
        <tr>
            <td>Bahasa Indonesia</td>
            <td>
                <?php 
                echo $bin;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($bin);
                ?>
            </td>
        </tr>
        <tr>
            <td>Bahasa Inggris</td>
            <td>
                <?php 
                echo $bing;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($bing);
                ?>
            </td>
        </tr>
        <tr>
            <td>Rata-rata</td>
            <td>
                <?php 
                $rata1 = (int)rata($mat, $bio, $fis, $kim, $bin, $bing);
                echo $rata1;
                ?>
            </td>
            <td>
                <?php 
                echo huruf($rata1);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>