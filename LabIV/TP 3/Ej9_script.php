<!DOCTYPE html>

<html>
    <head>
        <title>Script form Ej9</title>
        <link rel="stylesheet" href="formStyle.css">
    </head>

    <body>

    <?php
        $parameters = array();

        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $parameters = $_POST;
        }
        else
        {
            $parameters = $_GET;
        }

        foreach($parameters as $parameterName=>$parameterValue)
        {
            echo $parameterName . ': ' . $parameterValue . '<br>' ;
        }
        ?>
    </body>
</html>

