<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Dicee</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster" rel="stylesheet">

</head>


<body>

    <div class="container">
        <h1>Refresh Me</h1>

        <div class="dice">
            <p>Player 1</p>
            <img class="img1" src="">
        </div>

        <div class="dice">
            <p>Player 2</p>
            <img class="img2" src="">
        </div>

    </div>


</body>
<script>
    v1 = Math.floor(Math.random() * 6) + 1;
    s1 = "images/dice" + String(v1) + ".png";
    v2 = Math.floor(Math.random() * 6) + 1;
    s2 = "images/dice" + String(v2) + ".png";
    document.querySelectorAll("img")[0].setAttribute("src", s1);
    document.querySelectorAll("img")[1].setAttribute("src", s2);
    if (v1 > v2) {
        document.querySelector("h1").innerHTML = "🚩 Player 1 Wins!";
    } else {
        if (v2 > v1) {
            document.querySelector("h1").innerHTML = "Player 2 Wins! 🚩";
        } else {
            document.querySelector("h1").innerHTML = "Draw";
        }
    }
</script>
<footer>
    
</footer>

</html>