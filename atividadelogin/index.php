<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        label{
           display: block;
           font-weight: bold;
           margin-bottom: 5px;

        }

        input[type="text"],
     input[type="password"] {
          width: 100%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2></h2>
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