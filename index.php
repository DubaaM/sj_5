<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php
        echo "vypis";
        // echo ("vypis");
        
        $meno = "peter";
        
        echo "$meno <br>";
        echo $meno."<br>";
        
        var_dump($meno)."<br"; 
        
        $farby = array("cervena","zelena","modra");
        
        echo $farby[2]."<br>";

        foreach($farby as $farba){
            echo "farba: ".$farba."<br>";
        }
        foreach($farby as $farba){
            $data = array("Peter" =>25,
                            "Jana" =>30,
                            "Marek" =>20);
        };
        foreach($data as $name => $age){
            echo "$name ma $age rokov <br>";
        };


        
        
        //uloha
        $pole = array("jeden","dva","tri","styri");
        foreach($pole as $cisla){
            echo "cisla: ".$cisla."<br>";
        };


    
    ?>
</body>
</html>