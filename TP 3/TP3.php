<!DOCTYPE html>
<html>

<head>

</head>

<body>
    
<?php

    $miNumero = 123;
    $numeroEnString = "123";

    $suma = $miNumero + $numeroEnString;

    echo "-------------------------------------------<br>1.<br><br>";
    echo "a) $suma";
    echo "<br>";

    $resta = $miNumero - $numeroEnString;

    echo "b) $resta";
    echo "<br>";

    $numeroConcat = $miNumero.$numeroEnString;

    echo "c) $numeroConcat";
    echo "<br><br>";

    echo "-------------------------------------------<br>2. <br><br>";

    /*
        a.	1 == ”1”
        b.	1 === ”1”
        c.	! null 
        d.	! false 
        e.	“” 
        f.	“ “ 
        g.	“testeando” 
        h.	1-1
    */

    echo "a)";
    if(1 == "1")
    {
        echo "Es correcto";
    }

    echo "<br>";
    
    echo "b)";
    if(1 === "1")
    {
        echo "Es correcto";
    }

    echo "<br>";
    
    echo "c)";
    if(!null)
    {
        echo "Es correcto";
    }
    
    echo "<br>";
    
    echo "d)";
    if(!false)
    {
        echo "Es correcto";
    }
    
    echo "<br>";
    
    echo "e)";
    if("")
    {
        echo "Es correcto";
    }
    
    echo "<br>";
    
    echo "f)";
    if(" ")
    {
        echo "Es correcto";
    }
    
    echo "<br>";
    
    echo "g)";
    if("testeando")
    {
        echo "Es correcto";
    }
    
    echo "<br>";
    
    echo "h)";
    if(1-1)
    {
        echo "Es correcto";
    }

    echo "<br><br>";

    function multiply($valorA, $valorB)
    {
        return $valorA*$valorB;
    }

    echo "-------------------------------------------<br>3. <br><br> ";

    echo "Multiplicacion  ->  2 * 8 = ".multiply(2, 8);
    echo "<br><br>";

    function divide($valorA, $valorB)
    {
        return $valorA/$valorB;
    }

    echo "Division  -> 8 / 2 = ".divide(8, 2);

    echo "<br><br>";

    $array = [  
        1     => "first value",
        "1"  => "second value",    
        1.2  => "tirth value",    
        true => "fourth value",    
        1+0.2 => "fifth value",    
        false !== null => "sixth value", 
    ];

    echo "-------------------------------------------<br>4. <br>";
    echo "<br>".$array[1];
    echo "<br>".$array["1"];
    echo "<br>".$array[1.2];
    echo "<br>".$array[true];
    echo "<br>".$array[1+0.2];
    echo "<br>".$array[false !== null];

    echo "<br><br>";
    echo "El array contiene 1 solo elemento, debido a que en la declaracion todos los indices
    son = 1, o variantes, y por ende se superpone. El ultimo elemento superpuesto es '[ sixth value ]'. ";
    echo "<br>";

    echo "-------------------------------------------<br>5. <br>";
    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    $arrayLength = count($people);

    


?>

</body>


</html>