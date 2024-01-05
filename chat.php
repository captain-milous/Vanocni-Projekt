<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vanocni Projekt</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/chat.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="img/unknown.png" alt="Profilový Obrázek xd" />
                <div class="details">
                    <span>Miloš Tesař</span>
                    <p>Aktivní</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Zpráva</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/unknown.png" alt="Profilovka">
                    <div class="details">
                        <p>Zpráva</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" placeholder="Zpráva..">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>
</html>