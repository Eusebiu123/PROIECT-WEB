<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Results</title>
    <link rel = "stylesheet" href = "training.css">
</head>
<body>
    <img src="poze/logo.jpg" class="logo">

    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
                <li><a href = "classment.php">CLASAMENT</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>

    <section class = "training__container">
        <h1 class = "training__title">FELICITĂRI! ANTRENAMENT ÎNCHEIAT!</h1>
        <p>Ați ars 9.4 kcal!</p>
        <a class = "training__btn" href = "statistics.php">Spre pagina de statistici</a>
        <a class = "training__btn" href = "classment.php">Spre clasament</a>
    </section>

    <script>
        var menuBtn =document.getElementById("menuBtn")
        var sideNav =document.getElementById("sideNav")
        var menu =document.getElementById("menu")
        sideNav.style.right = "-250px";
        
        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right = "0";
                menu.src="poze/close.png";
            }
            else{
                 sideNav.style.right = "-250px";
                menu.src="poze/menu.png";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true
    });    
    </script>
</body>
</html>