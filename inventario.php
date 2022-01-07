<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Banpar</title>
</head>
<style>
    .titleBanpar {
        text-align: center;
        color: red;
    }

    .title {
        text-align: center;
        color: black;
    }

    form>label {
        display: block;
        color: black;
        font-size: 22px;
    }
</style>

<body>
    <h1 class="titleBanpar">Inventário Banpar</h1>
    <h2 class="title">Cadastre um novo produto no inventario</h2>

    <form method="POST" action="/controllers/validaInventario.php">
        <label>NOME DO PRODUTO</label>
        <input type="text" name="nome" required minlength="3" maxlength="100"><br><br>

        <label>QUANTIDADE</label>
        <input type="number" name="quanti" required><br><br>

        <label>DEPARTAMENTO</label>
        <select name=depar>
            <option value="0">SELECIONE O DEPARTAMENTO</option>
            <option value="1">OPERAÇÂO</option>
            <option value="2">CHECAGEM</option>
            <option value="3">CREDITO</option>
            <option value="4">COMERCIAL</option>
            <option value="5">JURIDICO</option>
            <option value="6">CONTROLADORIA</option>
            <option value="7">TI</option>
        </select><br><br>

        <label>MEMORIA RAM</label>
        <input type="number" name="ram" required><br><br>

        <label>SSD</label>
        SIM<input type="radio" name="ssd" value="True" checked>
        NÂO<input type="radio" name="ssd" value="False"><br><br>

        <label>Observação do item</label>
        <textarea type="text" name="obs"></textarea><br><br>

        <button type="submit">Cadastrar</button><br /><br>
    </form>
    <a href='controllers/validaLogin.php'>
        <button>Voltar</button>
    </a>
</body>

</html>