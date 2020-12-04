<html>
<head>
    <meta charset="UTF-8">
    <title> Pomodoro </title>
    <link ref="icon" href="Ampulheta.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <h1><em> cronometro de Estudos </em></h1>
</head>

<body>
    <form method="POST" action="inicio.php">
        <div class="formCronometro">
            <label for="horas">Horas</label>
            <input type="number" min="00" max="23" class="formResposta" id="horas">
        </div>
        <div class="formCronometro">
            <label for="min">Minutos</label>
            <input type="number" min="00" max="59" class="formResposta" id="min">
        </div>
        <div class="formCronometro">
            <label for="seg">Segundos</label>
            <input type="number" min="00" max="59" class="formResposta" id="seg">
        </div>
        <div class="formCronometro">
            <button type="submit">Iniciar</button>
            <button type="reset">Zerar</button>
        </div>
        </div>
    </form>

</body>

</html>