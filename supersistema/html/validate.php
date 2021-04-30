<head>
        <title>Super sistema fail2ban</title>
        <style>
        .button {
          font: bold 11px Arial;
          text-decoration: none;
          background-color: #EEEEEE;
          color: #333333;
          padding: 2px 6px 2px 6px;
          border-top: 1px solid #CCCCCC;
          border-right: 1px solid #333333;
          border-bottom: 1px solid #333333;
          border-left: 1px solid #CCCCCC;
          width: 100%;
        }
        </style>
</head>

<body>
        <div style="
                max-width: 300px;
                width: 300px;
                border: 1px solid black;
                border-radius: 20px;
                padding: 1.5em;
                margin: 0 auto;
        ">
        <h2>
        <?php
                if ( $_POST["user"] == "tuxtux" && $_POST["password"] == "linux" ) echo "¡Bienvenid@!";
                else {
                        echo "<span style='color:red'>Password incorrecto de ".$_SERVER['REMOTE_ADDR']."</span>";
                        exec("logger -p auth.warning -t 'supersistema' 'Incorrect login from ".$_SERVER['REMOTE_ADDR']."'");
                }
        ?>
        </h2>
        <p>
        <a href="/index.php" class="button">Reintentar</a>
        </p>
        </div>
</body>

