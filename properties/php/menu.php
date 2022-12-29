<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../php/style.php"> -->
</head>

<style>

*{
    margin: 0;
    padding: 0;
}

body {
    background: rgb(98, 0, 255);
    font-family: sans-serif;
}

#icon {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 50px;
    height: 50px;
    /* background: rgb(255, 255, 255); */
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
}

#icon::before {
    content: "";
    position: absolute;
    width: 25px;
    height: 4px;
    background: rgb(255, 255, 255);
    transform: translateY(-10px);
    transition: .4s;
}

#icon::after {
    content: "";
    position: absolute;
    width: 25px;
    height: 4px;
    background: rgb(255, 255, 255);
    box-shadow: 0 10px 0 0 #fff;
    transition: .4s;
}

.active#icon::before {
    transform: rotate(45deg);
    background: rgb(255, 0, 0);
}

.active#icon::after {
    transform: rotate(-45deg);
    box-shadow: none;
    background: rgb(255, 0, 0);
}

#menu {
    position: fixed;
    top: 0;
    left: -400px;
    width: 400px;
    height: 100vh;
    background: rgb(50, 0, 97);
}

#menu ul {
    position: relative;
    margin-top: 80px;
    overflow: hidden;
}

#menu ul li {
    list-style: none;
    color: white;
    padding: 15px 40px;
    font-size: 1.2rem;
    font-weight: 600;
    cursor: pointer;
}

#menu ul li:hover {
    background: rgb(167, 60, 255);
}

.active#menu {
    left: 0;
    transition: all 0.8s ease-in-out;
}

</style>

<body>
    <div id="icon"></div>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li>Services</li>
            <li>About us</li>
            <li>Contact us</li>
            <li>Help</li>
        </ul>
    </div>


<script>

    const icon = document.getElementById('icon');
    const menu = document.getElementById('menu');

    icon.onclick = function() {
        icon.classList.toggle('active');
        menu.classList.toggle('active');
    }

    document.onclick = function(clickEvent) {
        if(clickEvent.target.id !== "menu" && clickEvent.target.id !== "icon") {
            icon.classList.remove('active');
            menu.classList.remove('active');
        }
    }

</script>



</body>
</html>