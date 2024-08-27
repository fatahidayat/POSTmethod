<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    body{
    display:flex;
    justify-content: center;
    gap : 10px;
  }
  .childig{
    background-color: rgb(223, 68, 94);
    height: 620px;
    width: 350px;
    text-align: center;
    color:white;
    font-size:25px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius:20px;
  }
</style>
<body>
    <div class="childig">
        <br><br>
    <h2>Hasil Form contact</h2><br><br>
    <?php
   if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['pesan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    echo "Nama : " . $name . "<br>". "<br>";
    echo "Email : " . $email . "<br>". "<br>";
    echo "Pesan : " . $pesan . "<br>". "<br>";
    } 
    ?>
    </div>
</body> 
</html>