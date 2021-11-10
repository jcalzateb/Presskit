<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <?php
    include("estilo.php");
    ?>

    <title>Document</title>
</head>
<body class="portada">
    
</body>

<script type="text/javascript">
    $('.portada').click(function() {
        $("body").removeClass("portada");
        location.href = "codigoP.php"
    });
</script>
</html>