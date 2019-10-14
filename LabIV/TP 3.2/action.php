<?php
$parameters = array();

if ($_SERVER['REQUEST_METHOD'] == "POST")
    $parameters = $_POST;
else
    $parameters = $_GET;
?>
<html>

<head>
    <title>LABORATORIO IV 2019</title>
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div>
        <table>
            <tbody>
                <th colspan="2">YOUR BASIC INFO</th>
                <tr>
                    <td>Name</td>
                    <td>
                        <?php
                        if(isset($parameters["name"]))
                        echo $parameters["name"];
                        else echo "Error";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <?php
                        if(isset($parameters["email"]))
                        echo $parameters["email"];
                        else echo "Error";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <?php
                            if(isset($parameters["password"]))
                            echo $parameters["password"];
                            else echo "Error";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td>
                        <?php
                            if(isset($parameters["bday"]))
                            echo $parameters["bday"];
                            else echo "Error";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>
                    <?php
                        if(isset($parameters["sex"]))
                        echo $parameters["sex"] == "male" ? "Masculino" : "Femenino";
                        else echo "[ Unspecified ]";
                    ?>
                    </td>
                </tr>
                <th colspan="2">YOUR PROFILE</th>
                <tr>
                    <td>About you</td>
                    <td>
                        <?php
                        if(isset($parameters["aboutYou"]) && $parameters != "")
                        echo $parameters["aboutYou"];
                        else echo "[ Unspecified ]";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <?php
                            echo $parameters["user_rol"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Interests</td>
                    <td>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a id="goBack" href="form.html">Go back</a>
    </div>
</body>

</html>