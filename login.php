<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vanocni Projekt</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/signup.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <script src="scripts/pass-show-hide.js" defer></script>
    <script src="scripts/login.js" defer></script>

</head>
<body>
    
    <div class="wrapper">
        <section class="form login">
            <header>Realtime chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="field input">
                    <label>Heslo</label>
                    <input id="password" type="password" placeholder="Heslo">
                    <i class="fas fa-eye" id="show-hide"></i>
                </div>
                <div class="field button">
                    <input type="submit" placeholder="Přihlásit se">
                </div>
            </form>
            <div class="link">Ještě nejste zaregistrován? <a href="index.php">Zaregistrovat se</a></div>
        </section>
    </div>
</body>
</html>