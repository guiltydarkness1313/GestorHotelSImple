<html>
<head>

</head>
<body>
<h2>Bienvenido a hotel Luna del Sol</h2>
<form method="post" action="/resultado">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label>Ingresar cantidad de personas: <input type="text" name="personas"></label>
    <label>Ingresar el tipo de habitación: <input type="text" name="tipo"></label>
    <label>la cantidad de dias: <input type="text" name="dias"></label>
    <br>
    <input type="submit" value="Consultar">
</form>
</body>
</html>