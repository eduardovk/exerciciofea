<html>
        <head>
                <title>Exercício 1 - Frameworks e APIs</title>
                <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        </head>
        <body>

                <h1><?php echo $title; ?></h1>
                <?php
                if(!empty($mensagem)){
                    echo '<h3>'.$mensagem.'</h3>';
                }
                 ?>
