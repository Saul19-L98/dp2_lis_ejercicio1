<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Pare A 🙄</title>
</head>
<body>
    <?php
        $lenguages = [ 
            "English" => ["25","15","10"], 
            "French" => ["10","5","2"], 
            "Chinese" => ["8","4","1"], 
            "Russian" => ["12","8","4"], 
            "Portuguese" => ["30","15","10"], 
            "Japanese" => ["90","25","67"]];


        $count_student = 0;

            foreach($lenguages as $keys => $course){
                insertTitle($keys);
                foreach($course as $levels => $students){
                    insertStudent($levels,$students);
                    $count_student++;
                }
                $count_student = 0;
                 //NOTE: End of tables container.
                echo "</div>";
            };

            function insertTitle ($key){
                //NOTE: Start of tables container.
                echo "<div class=\"lenguages_container\">";
                echo "<div class=\"item lenguages_title\"><h1>$key</h1></div>";
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

    ?>
</body>
</html>