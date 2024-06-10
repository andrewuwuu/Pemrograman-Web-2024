<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Function</title>
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
    <h1>PHP Code Function</h1>

    <div class="code-container">
        <h2>Kode PHP:</h2>
        <pre>
&lt;?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?&gt;
        </pre>
    </div>

    <div class="code-container">
        <h2>Hasil:</h2>
        <?php
        function familyName($fname) {
          echo "$fname Refsnes.<br>";
        }
        
        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        ?>
    </div>
    
    <div class="code-container">
        <h2>Penjelasan Kode:</h2>
        <p>Kode PHP ini sangat sederhana...</p>
    </div>
</body>
</html>
