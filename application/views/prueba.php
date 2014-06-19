<html>
<head>
<title>DEMO</title>
</head>
<body>
    <h1>Probando...</h1>
    <?php
     //   echo form_open('prueba/save', array('name' => 'prueba'));     //prueba/sabe es controlador/metodo
     echo form_open('prueba/save'); 
    ?>
        <table>

            <tr>
                <td>Name :</td>
                <td><input type="text" name="deujhdeujdeude" value="probando esto"></input></td>
                <td>Password: </td>
                <td><input type="text" name="contrasenna"></input></td>
            </tr>    
            <tr>
                <td><input type="submit" name="submit" value="submit"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>