<html lang="utf-8">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="valeStyle.css">
    <title>Vale</title>
</head>

<body>
<div class="menu" id="menu">
    <h1 class="titulo">Vale</h1>
    <div class="row">
        <div class="coluna-vale">
            <h4 class="label-valor">VALE</h4>
        </div>
        <div class="coluna-dados-vale">
            <?php
            echo "VALE:     Nº" . $_POST["mumero-recibo"], "  R$ " . $_POST["valor"], "#";
            ?>
        </div>
    </div>
    <div class="row">
        <div class="coluna-nome">
            <?php
            echo "NOME: " . $_POST["nome"];
            ?>
        </div>
    </div>
    <div class="row">
        <div class="coluna-valor">
            <?php
            echo "VALOR: " . $_POST["valor"];;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="coluna-local-data">
            <?php
            echo "LOCAL/DATA: " . $_POST["cidade"], ", ", $_POST["data"];
            ?>
        </div>
    </div>
    <div class="borda-assinatura">
        <p class="assinatura-label">Assinatura</p>
    </div>
    <div class="row">
        <div class="coluna-dados-empresa">
            <?php
            echo $_POST["dados-empresa"];
            ?>
        </div>
    </div>
    <div class="botao-gerar-recibo">
        <button onclick="imprimir()">
         <span class="material-symbols-outlined">
                            description
                        </span>
            Gerar Recibo
        </button>
    </div>
    <script src="scriptBotao.js"></script>
</body>

</html>