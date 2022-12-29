<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require ('../css/form-style.php'); ?>
    <title></title>
</head>
<body>

    <div id="navigationBar">

        <div id="menuController"></div>

        <a class="brandLogo" href="#">
            <img src="../icons/piebit202.png"></i> 
        </a>

        
        <ul id="sideMenu">
            <li class="menuItem"><a href="main.php"><i class="bi bi-building"></i> Marketplace </a></li>

            <li class="menuItem"><a href="#"><i class="bi bi-grid"></i> Dashboard </a></li>

            <li class="menuItem">
                <a class="iconOptionDropD" href="#"><i class="bi bi-bullseye icon5 iconOptionDropdown"></i> Escrow <i class="bi bi-chevron-right icon-right"></i></a>
                <ul class="sideMenudropdown">
                    <li><a href="buyer.com">Buyer</a></li>
                    <li><a href="#">Seller</a></li>
                </ul>
            </li>

            <li class="menuItem">
                <a class="iconOptionDropD" href="#"><i class="bi bi-card-text icon5 iconOptionDropdown"></i> Appeal <i class="bi bi-chevron-right icon-right"></i></a>
                <ul class="sideMenudropdown">
                    <li><a href="#">Buyer</a></li>
                    <li><a href="#">Seller</a></li>
                </ul>
            </li>

            <li class="menuItem"><a href="supports.php"><i class="bi bi-file-text"></i> Supports </a></li>  

            <li class="menuItem"><a href="#"><i class="bi bi-body-text"></i> About Us </a></li>

        </ul>



        <div class="darkLightSearchBox">
            
            <div class="darkLight">
                <i class='bi bi-moon moon'></i>
                <i class='bi bi-sun sun'></i>
            </div>

            <div class="searchBox">
                
                <div class="searchToggle">
                    <i class="bi bi-x-lg cancel"></i>
                    <i class='bi bi-search search'></i>
                </div>

                <div class="searchField">
                    <div class="sfInputBtn">
                        <input type="text" placeholder="Search..." required>
                        <i class='bi bi-search'></i>
                    </div>
                    <div class="sfSuggestion">
                        <h5>
                            What is programming
                        </h5>
                        <h5>
                            List of programming langs
                        </h5>
                        <h5>
                            Methods of Coding
                        </h5>
                        <h5>
                            PHP, The backend 
                        </h5>
                        <h5>
                            Government and Politics
                        </h5>
                        <h5>
                            What is programming
                        </h5>
                        <h5>
                            List of programming langs
                        </h5>
                        <h5>
                            Methods of Coding
                        </h5>
                        <h5>
                            PHP, The backend 
                        </h5>
                        <h5>
                            Government and Politics
                        </h5>
                        <h5>
                            What is programming
                        </h5>
                        <h5>
                            List of programming langs
                        </h5>
                        <h5>
                            Methods of Coding
                        </h5>
                        <h5>
                            PHP, The backend 
                        </h5>
                        <h5>
                            Government and Politics
                        </h5>
                    </div>
                </div> 

            </div>

        </div>


        <div class="profileContents">

            <img src="../images/luiza-senna-vPxMOmtegm0-unsplash.jpg">

            <ul class="profileLink">
                <li><a href="#"><i class="bi bi-person"></i>Profile</a></li>
                <li><a href="#"><i class="bi bi-person-circle"></i>Account</a></li>
                <li><a href="#"><i class='bx bx-cog'></i>Setting</a></li>
                <li><a href="#"><i class="bi bi-journal"></i>FAQs</a></li>
            </ul>

        </div>
        
    </div>

    <ul class="downButtonBar">

        <li class="dbItems">
            <a href="#">
                <i class='bi bi-arrow-repeat icon5C icon5B' ></i>
            </a>
        </li>

        <li class="dbItems">
            <a href="#">
                <i class='bi bi-bell icon5 icon5A' ></i> 
                <span class="badge5">5</span> 
            </a>
        </li>

        <li class="dbItems">
            <a href="#">
                <i class='bi bi-plus-lg icon6 icon5B' ></i>
            </a>
        </li>

        <li class="dbItems">
            <a href="#">
                <i class='bi bi-chat icon5 icon5A' ></i>
                <span class="badge5">8</span>
            </a>
        </li>

        <li class="dbItems">
            <a href="#">
                <i class="bi bi-gear icon5 icon5A"></i>
            </a>
        </li>

    </ul>


<script>

//MENU OPEN AND CLOSE 
const menuController = document.getElementById('menuController'),
      sideMenu = document.getElementById('sideMenu');

menuController.onclick = function() {
    menuController.classList.toggle('active');
    sideMenu.classList.toggle('active');
    
}

document.onclick = function(clickEvent) {
    if(clickEvent.target.id !== "sideMenu" && clickEvent.target.id !== "menuController") {
        menuController.classList.remove('active');
        sideMenu.classList.remove('active');
    }
}

</script>

<script src="../js/main.js"></script>
<script src="../js/script.js"></script>

</body>
</html>