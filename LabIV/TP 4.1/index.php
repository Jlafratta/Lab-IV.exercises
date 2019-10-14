<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="process.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="language" value="spanish"> Argentino
                    <input type="radio" name="language" value="english"> Ingles
                    <input type="radio" name="language" value="portuguese"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="message" value="sayHi"> Saludar
                    <input type="radio" name="message" value="sayGoodbye"> Despedirse
                    <input type="radio" name="message" value="other"> Otro Mensaje
                    <textarea name="msgText" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>