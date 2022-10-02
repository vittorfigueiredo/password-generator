<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
  <title>Strong Password Generator</title>
</head>

<body>
  <header>
    <h1><a href="/">Strong Password Generator</a></h1>
  </header>
  <main>
    <div>
      <label for="length">Length:</label>
      <input type="number" name="lengthInput" id="lengthInput" value="10">
      <button onclick="generateButtonClicked()">Generate</button>

      <br><br>

      <label for="lastPasswordGenerated">Last Password Generated: </label>
      <input type="text" id="lastPasswordGenerated">
    </div>
  </main>

  <footer>
    <p>Developed by <a href="#">Vitor Figueiredo</a></p>
  </footer>

  <script src="/public/js/script.js"></script>
</body>

</html>
