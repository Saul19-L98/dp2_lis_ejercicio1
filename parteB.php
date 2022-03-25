<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Parte B 😅</title>
</head>
<body>
    <?php
        $lenguages = array(array("25","15","10"),array("10","5","2"),array("8","4","1"),array("12","8","4"),array("30","15","10"),array("90","25","67"));

        function views ( array $info1){
            $count_student = 0;
            foreach($info1 as $keys => $course){
                insertTitle($keys);
                foreach($course as $levels => $students){
                    insertStudent ($levels,$students);
                }
                //NOTE: End of tables container.
                echo "</div>";
            };
        };

        function insertTitle ($key){
            //NOTE: Start of tables container.
            echo "<div class=\"lenguages_container\">";
            if($key == 0){
                echo "<div class=\"item lenguages_title\"><h1>English</h1></div>";
            }elseif($key == 1){
                echo "<div class=\"item lenguages_title\"><h1>French</h1></div>";
            }elseif($key == 2){
                echo "<div class=\"item lenguages_title\"><h1>Chinese</h1></div>";
            }elseif($key == 3){
                echo "<div class=\"item lenguages_title\"><h1>Russian</h1></div>";
            }elseif($key == 4){
                echo "<div class=\"item lenguages_title\"><h1>Portuguese</h1></div>";
            }elseif($key == 5){
                echo "<div class=\"item lenguages_title\"><h1>Japanese</h1></div>";
            }
        }
    
        function insertStudent ($level,$student){
            if( $level == 0){
                echo "<div class=\"item lenguage_$level\"><p>Basic</p></div>";
            }elseif($level == 1){
                echo "<div class=\"item lenguage_$level\"><p>Intermediate</p></div>";
            }elseif($level == 2){
                echo "<div class=\"item lenguage_$level\"><p>Advanced</p></div>";
            }
            echo "<div class=\"item lenguage_number$level\"><p>" . $student . "</p></div>";
        }

        views($lenguages);
    ?>
</body>
</html>