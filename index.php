<!Doctype html>
<?php 
    include_once 'User.class.php';
?>
<html>
    <head>
        <title>Xanin</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Testando Classe no PHP</h1>
        <?php 
            $objUser= new User();
            $objUser->name="Gabriel Guedes";
            $objUser->email="gguedes10@gmail.com";
        ?>
        <p>Exibindo os valores dos atributos</p>
        <p>Nome: <?php echo $objUser->name;?></p>
        <p>Email: <?php  echo $objUser->email; ?></p>
    </body>
</html>