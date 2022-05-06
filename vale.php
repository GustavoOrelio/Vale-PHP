<html lang="utf-8">

<head>
    <meta charset="UTF-8">
    <title>Vale</title>
</head>

<body>
<div>
    <h1>Vale</h1>
    <div>
        <div>
            <h4>VALE</h4>
        </div>
        <div>
            <?php
            echo "VALE:     Nº" . $_POST["mumero-recibo"], "  R$ " . $_POST["valor"], "#";
            ?>
        </div>
    </div>
    <div >
        <div >
            <?php
            echo "NOME: " . $_POST["nome"];
            ?>
        </div>
    </div>
    <div>
        <div>
            <?php
            echo "VALOR: " . $_POST["valor"];;
            ?>
        </div>
    </div>
    <div>
        <div>
            <?php
            echo "LOCAL/DATA: " . $_POST["cidade"], ", ", $_POST["data"];
            ?>
        </div>
    </div>
    <div >
        <p >Assinatura</p>
    </div>
    <div >
        <div >
            <?php
            echo $_POST["dados-empresa"];
            ?>
        </div>
    </div>
    <div >
        <button onclick="">
            Gerar Recibo
        </button>
    </div>

</body>

</html>