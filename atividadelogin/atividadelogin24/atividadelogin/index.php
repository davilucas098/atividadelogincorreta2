<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <form method="post" action="./src/model/autenthicar.php">
        <label for="email">Email:</label>
          <input type="name" id="email" name="email" required>
          <br>
        <label for="password">Senha:</label>
           <input type="password" id="password" name="password" required>
           <br>
           <button type="submit">Login</button>
    </form>
</body>
</html>