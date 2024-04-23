<?php
$input = '';
$email = '';
$result = ''; 

if(isset($_POST['input'])){
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

if(isset($_POST['email'])){
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = "Nama: " . $input . "<br>Email yang valid: " . $email;
    }else{
        $result = "Nama: " . $input . "<br>Email tidak valid.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post" action="">
        <label for="input">Masukkan nama:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br>
        
        <label for="email">Masukkan email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>"><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if(!empty($result)){
        echo "<p>" . $result . "</p>";
    }
    ?>
</body>
</html>