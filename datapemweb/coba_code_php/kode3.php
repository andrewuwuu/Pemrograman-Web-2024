<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Switch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .code-container {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>PHP Code Switch</h1>

    <div class="code-container">
        <h2>Kode PHP:</h2>
        <pre>
&lt;?php
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?&gt;
        </pre>
    </div>

    <div class="code-container">
        <h2>Hasil:</h2>
        <?php
        $favcolor = "blue";
        
        switch ($favcolor) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
    </div>
    
    <div class="code-container">
        <h2>Penjelasan Kode:</h2>
        <p>Kode PHP ini sangat sederhana...</p>
    </div>
</body>
</html>
