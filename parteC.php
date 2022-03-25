<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Parte C 😆</title>
</head>
<body>
    <?php
        $lenguages = [ 
            "English" => [ 
                "Basic"=>"25",
                "Intermediate"=>"15",
                "Advanced"=>"10"],
            "French" => [
                "Basic"=>"10",
                "Intermediate"=>"5",
                "Advanced"=>"2"], 
            "Chinese" => [
                "Basic"=>"8",
                "Intermediate"=>"4",
                "Advanced"=>"1"], 
            "Russian" => [
                "Basic"=>"12",
                "Intermediate"=>"8",
                "Advanced"=>"4"], 
            "Portuguese" => [
                "Basic"=>"30",
                "Intermediate"=>"15",
                "Advanced"=>"10"], 
            "Japanese" => [
                "Basic"=>"90",
                "Intermediate"=>"25",
                "Advanced"=>"67"]
            ];

        function views ( array $info1){
            $count_student = 0;
            foreach($info1 as $keys => $course){
                insertTitle($keys);
                foreach($course as $levels => $students){
                    insertStudent($levels, $count_student, $students);
                    $count_student++;
                }
                $count_student = 0;
                 //NOTE: End of tables container.
                echo "</div>";
            };
        }

        function insertTitle ($key){
            //NOTE: Start of tables container.
            echo "<div class=\"lenguages_container\">";
            echo "<div class=\"item lenguages_title\"><h1>$key</h1></div>";
        }

        function insertStudent ($level, $count,$student){
            echo "<div class=\"item lenguage_$count\"><p>$level</p></div>";
            echo "<div class=\"item lenguage_number$count\"><p>" . $student . "</p></div>";
        }

        views($lenguages);

    ?>
</body>
</html>