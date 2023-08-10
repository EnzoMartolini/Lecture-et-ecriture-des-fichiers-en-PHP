<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' action=''>
        <Label>Inscrivez vous à notre super newsletter !</Label></br></br>
        <input type="mail" name='email' placeholder="Entrez votre email"></br></br>
        <button type='submit'>S'inscrire</button>
    </form>

    <?php

    if (isset($_POST['email'])){
        $email=$_POST['email'];
        $file=__DIR__.DIRECTORY_SEPARATOR. date("m.d.y");
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
            echo <<<HTML
               <p style=color:green> Vous etes enregistré avec l'adresse email : $email</p>
HTML;
        else: echo <<<HTML
               <p style=color:red> $email n'est pas une adresse valide </p>
HTML;
    endif;
    }

    ?>
</body>
</html>