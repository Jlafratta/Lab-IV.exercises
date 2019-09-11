<!DOCTYPE html>
<html>
    <head>
        <title>Laboratorio IV TP3.1</title>
        <link rel="stylesheet" href="allTextStyle.css">
    </head>
    <body>
        <?php
            
            echo "<h1>Ejercicio 1</h1>";
            echo "<br>";

            $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
            
            echo "String : " . $name;
            echo "<br><br>";
            
            $nameArray = explode(",", $name);

            echo "<strong> a) </strong>Elementos en el array (nameArray): ". count($nameArray);
            echo "<br><br>";

            for($i=0; $i<count($nameArray); $i++)
            {
                echo "Name: " . $nameArray[$i];
                echo "<br>";
            }

            sort($nameArray, 2); // funcion que ordena el array. El segundo parametro (2) define de 
                                 // que tipo son los elementos que contiene (numeros).
            echo "<br>";
            echo "<strong> b) </strong>Array ordenado de manera ascendente: ";
            echo "<br><br>";

            for($i=0; $i<count($nameArray); $i++)
            {
                echo "Name: " . $nameArray[$i];
                echo "<br>";
            }


            echo "<br>";
            echo "<strong> c) </strong>Primer letra de cada nombre en mayus (newArray): ";
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

            echo "<br><strong> d) </strong> Cantidad de valores de newArray : " . count($newArray);

            $keys = array();

            for($i=0; $i<count($newArray); $i++)
            {
                $keys[$i] = $i+1;
            }

            echo "<br><br>";
            echo "Arreglo keys : <br><br>";
            
            for($i=0; $i<count($keys); $i++)
            {
                echo $keys[$i];
                echo "<br>";
            }

            $arrayAssociative = array_combine($keys, $newArray);

            echo "<br><strong> e) </strong> arrayAssociative (keys + newArray) : <br><br>";

            foreach($arrayAssociative as $x => $x_value)
            {
                echo " | Key: " . $x . " |  Value: " . $x_value . "<br>";
            }

            echo "<hr/>";
            echo "<h1>Ejercicio 2</h1>";

            $valueToFound = "Andrea";

            echo "Array pasado por parametro => nameArray";
            echo "<br> Valor pasado por parametro => '$valueToFound' <br><br> ";

            function existsInArray($array, $element)
            {
                for($i=0; $i<count($array); $i++)
                {
                    if($array[$i] == $element)
                    {
                        return true;
                    }
                }
                return false;
            }

            if(existsInArray($nameArray, $valueToFound))
            {
                echo "El elemento '$valueToFound' se encuentra dentro del array";
            }else{
                echo "El elemento '$valueToFound' no se encuentra dentro del array";
            }


        ?>
    </body>
</html>