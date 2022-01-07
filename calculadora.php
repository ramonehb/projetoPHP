<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .title {
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <form action="../controllers/validaCalculadora.php" method="POST">
            <h1 class="title">Calculadora</h1>
            <h2>
                <input type="number" name="s1" required> +
                <input type="number" name="s2" required>
                <button>somar</button>
            </h2>
        </form>
        <form action="../controllers/validaCalculadora.php" method="POST">
            <h2>
                <input type="number" name="m1" required> x
                <input type="number" name="m2" required>
                <button>multiplicar</button>
            </h2>
        </form>
        <form action="../controllers/validaCalculadora.php" method="POST">
            <h2>
                <input type="number" name="d1" required> /
                <input type="number" name="d2" required>
                <button>dividir</button>
            </h2>
        </form>
        <form action="../controllers/validaCalculadora.php" method="POST">
            <h2>
                <input type="number" name="ss1" required> -
                <input type="number" name="ss2" required>
                <button>subtrair</button><br />
            </h2>
        </form>
    </div>
</body>

</html>