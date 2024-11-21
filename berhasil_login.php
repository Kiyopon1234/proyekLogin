<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login berhasil!</title>
</head>
<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat datang <?php echo $_SESSION['username']; ?>!</h1>
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
</body>
<Style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
 
 * {
     margin-bottom: 0;
     padding: 0;
     box-sizing: border-box;
 }
  
 body {
     width: 100%;
     min-height: 100vh;
     background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(images/gambar.jpg);
     background-position: center;
     background-size: cover;
     display: flex;
     justify-content: center;
     align-items: center;
     font-family: 'Poppins', sans-serif;
     color: #111;
 }
  
 .container {
     width: 400px;
     min-height: 400px;
     background: #FFF;
     border-radius: 5px;
     box-shadow: 0 0 5px rgba(0, 0, 0, .3);
     padding: 40px 30px;
 }
  
 .container-logout {
     width: 500px;
     min-height: 200px;
     background: #FFF;
     border-radius: 5px;
     box-shadow: 0 0 5px rgba(0, 0, 0, .3);
     padding: 40px 30px;
 }
  
 h1 {
     font-weight: 500;
     font-size: 1.1rem;
     text-align: center;
     margin-bottom: 20px;
     display: block;
     text-transform: capitalize;
 }
  
 .input-group {
     width: 100%;
     margin-bottom: 25px;
 }
  
 .input-group input {
     width: 100%;
     height: 50px;
     border: 2px solid #e7e7e7;
     padding: 15px 20px;
     font-size: 1rem;
     border-radius: 30px;
     background: transparent;
     outline: none;
     transition: .3s;
 }
  
 .input-group input:focus, .input-group input:valid {
     border-color: #a29bfe;
 }
  
 .input-group .btn {
     display: block;
     width: 100%;
     padding: 15px 20px;
     text-align: center;
     border: none;
     background: #a29bfe;
     outline: none;
     border-radius: 30px;
     font-size: 1.2rem;
     color: #FFF;
     cursor: pointer;
     transition: .3s;
 }
  
 .input-group .btn:hover {
     transform: translateY(-5px);
     background: #6c5ce7;
 }
  
 .login-register-text, .login-register-text a {
     color: #111;
     font-weight: 600;
     text-decoration: none;
 }
  
 .login-register-text a {
     color: #6c5ce7;
 }
  
 @media (max-width: 430px) {
     .container {
         width: 300px;
     }
 }
</Style>
</html>
</html>