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
    <script src="scripts/signup.js" defer></script>

</head>
<body>
    
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat App</header>
            <form id="form" action="#" enctype="multipart/form-data">
                <div id="error" class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Jméno</label>
                        <input type="text" name="fname" placeholder="Pepa" required>
                    </div>
                    <div class="field input">
                        <label>Přijmení</label>
                        <input type="text" name="lname" placeholder="Novák" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="pepa.novak@email.cz" required>
                </div>
                <div class="field input">
                    <label>Heslo</label>
                    <input id="password" name="password" type="password" placeholder="Heslo" required>
                    <i class="fas fa-eye"  id="show-hide"></i>
                </div>
                <div class="field image" name="image" required>
                    <label>Profilový obrázek</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input id="submit-btn" type="submit" placeholder="Zaregistrovat se">
                </div>
            </form>
            <div class="link">Už jste zaregistrován? <a href="login.php">Přihlásit se</a></div>
        </section>
    </div>
</body>
</html>