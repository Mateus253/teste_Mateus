<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<h2>Formulario</h2>

<form action="/enviar" method="POST">
  @csrf <!--{(csrf_field())}-->
  <label for="codigo">Codigo Produto:</label><br>
  <input type="number" name="codigo"><br><br>
  <label for="nome">Nome Produto:</label><br>
  <input type="text" name="nome"><br><br>
  <label for="categoria">Categoria:</label><br>
  <input type="text" name="categoria"><br><br>
  <label for="preco">Preco unitario:</label><br>
  <input type="number" name="preco"><br><br>
  <label for="descricao">Descricao:</label><br>
  <input type="text" name="descricao"><br><br>
  <input type="submit" value="Submit">  
  <input type="reset" value="Reset">  
  
</form> 

</body>
</html>


</html>
