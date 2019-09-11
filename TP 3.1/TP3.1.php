<!DOCTYPE html>
<html>
    <head>
        <title>Laboratorio IV TP3.1</title>
    </head>
    <body>
        <?php
            $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
            
            echo "String : " . $name;
            echo "<br><br>";
            echo "Cantidad de palabras : " . str_word_count($name);
            echo "<br><br>";
            
            $nameArray = explode(",", $name);

            echo "Cantidad de elementos en el array : ". count($nameArray);
            echo "<br><br>";

            for($i=0; $i<count($nameArray); $i++)
            {
                echo "Name: " . $nameArray[$i];
                echo "<br>";
            }

            sort($nameArray, 2);

            echo "<br>";
            echo "Array ordenado de manera ascendente: ";
            echo "<br><br>";

            for($i=0; $i<count($nameArray); $i++)
            {
                echo "Name: " . $nameArray[$i];
                echo "<br>";
            }


            echo "<br>";
            echo "Primer letra de cada nombre en mayus (newArray): ";
            echo "<br><br>";

            $newArray;

            for($i=0; $i<count($nameArray); $i++)
            {
                $newArray[$i] = ucfirst($nameArray[$i]);
            }

            for($i=0; $i<count($newArray); $i++)
            {
                echo "Name: " . $newArray[$i];
                echo "<br>";
            }
        ?>
    </body>
</html>