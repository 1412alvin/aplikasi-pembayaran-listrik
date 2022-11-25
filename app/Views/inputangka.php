<!DOCTYPE html>

<head>
    <title>input angka</title>
</head>

<body>
    <div class="container">
        <label class="fs-1" for="angka">masukan jumlah angka</label>
        <input type="number" name="inputan">
    </div>
    <div class="container" <?php foreach ($data as $d) { ?>>
        <input type="number" name="hasilinputan">
    </div>
    <<?php } ?> </body>