<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Superglobal</title>
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
    <h1>PHP Code Superglobal</h1>

    <div class="code-container">
        <h2>Kode PHP:</h2>
        <pre>
&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?"&gt;
  Name: &lt;input type="text" name="fname"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?&gt;
        </pre>
    </div>

    <div class="code-container">
        <h2>Hasil:</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          Name: <input type="text" name="fname">
          <input type="submit">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </div>
    
    <div class="code-container">
        <h2>Penjelasan Kode:</h2>
        <p>Kode PHP ini sangat sederhana...</p>
    </div>
</body>
</html>
