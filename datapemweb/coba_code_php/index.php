<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Echo/Print</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>PHP Code Echo/Print</h1>

    <div class="code-container">
        <h2>Kode PHP:</h2>
        <textarea id="php-code" rows="4" cols="50">
&lt;?php
$teks = "Halo, dunia!";
echo $teks;
?&gt;
        </textarea>
        <button id="run-code">Jalankan Kode</button>
    </div>

    <div class="code-container">
        <h2>Hasil:</h2>
        <div id="result"></div>
    </div>

    <div class="code-container">
        <h2>Penjelasan Kode:</h2>
        <p>Kode PHP ini sangat sederhana. Echo dan Print kurang-lebih sama. Keduanya digunakan untuk mengeluarkan data ke layar. Perbedaannya kecil: echo tidak memiliki nilai balik, sedangkan print memiliki nilai balik 1 sehingga dapat digunakan dalam ekspresi. echo dapat menerima beberapa parameter (meskipun penggunaan seperti itu jarang terjadi), sedangkan print hanya menerima satu argumen. echo sedikit lebih cepat daripada print.</p>
    </div>

    <div>
        <h2>Laman Kode Lainnya:</h2>
        <ul>
            <li><a href="kode1.php">Kode PHP Operator</a></li>
            <li><a href="kode2.php">Kode PHP If Else</a></li>
            <li><a href="kode3.php">Kode PHP Switch</a></li>
            <li><a href="kode4.php">Kode PHP Loop</a></li>
            <li><a href="kode5.php">Kode PHP Function</a></li>
            <li><a href="kode6.php">Kode PHP Array</a></li>
            <li><a href="kode7.php">Kode PHP Superglobal</a></li>
        </ul>
    </div>

    <script>
    $(document).ready(function(){
        $("#run-code").click(function(){
            var code = $("#php-code").val();
            $.ajax({
                url: 'run_code.php',
                type: 'post',
                data: {code: code},
                success: function(response){
                    $("#result").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>
