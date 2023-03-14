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
        //our code
        $name = "Roy"; //string
        $firstname ="Roy";
        $lastname ="Jones";
        $age = 20; //integer
        $avgpoint = 98.8; //float, double
        $student = true; //boolean 
        //array
        $hobbies = array('travel', 'music', 1, true); //cara1
        // $hobbies = ['travel', 'music']; //cara2
        //string concatenation(gabung string)

        //statically type
       
    ?>
    <h1 id ="name"><?php echo $name?></h1>
    <h1><?php echo "$firstname $lastname"?></h1>
    <h1><?php echo '$firstname $lastname'?></h1>

    <ul>
        <?php
            $n = count($hobbies);
            for($i = 0; $i < $n; $i++){
                echo "<li>$hobbies[$i]</li>";
            } 

            //use foreach loop
            foreach ($hobbies as $hobby){
                echo "<li>$hobby</li>";
            }
        ?>
    </ul>

    <?php
        echo generateName($firstname, $lastname);
    ?>

    <!-- JavaScript -->
    <script>
        setTimeout(() => {
            document.querySelector("#name").innerHTML="Roy Jones Santoso"
        }, 3000);
    </script>
</body>
</html>

