<?php require ('../links/link.php'); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
        text-decoration: none;
        list-style: none;
        outline: none;
        border: none;
    }

    :root {

        /* ===== Transition Effect ===== */
        --tran-02: all 0.2s ease;
        --tran-03: all 0.3s ease;
        --tran-04: all 0.4s ease;
        --tran-05: all 0.5s ease;
        --tran-06: all 0.6s ease;

        /* ===== Pygram Colors ===== */
        --body-color-grey: #F1F0F6;
        --bar-color-light: #FFF;
        --primary-color-light-blue: #D0E4FF;
        --secondary-color-blue: #1775F1;
        --tertiary-color-dark-blue: #0C5FCD;
        --intermidary-color-thick-blue: #002147;
        --non-color-dark: #8D8D8D;
        --toggle-color: #DDD;
        --text1-color-dark-grey: #000;
        --input-text-color: #CCC;
        --alert-color-red: #FC3B56;
        --hover-color: #FFF;
        --border: 1px solid var(--non-color-dark);
        --box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;;
        --box-shadow-second: 0 .5rem 1rem rgba(0, 0, 0, .1);
        --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, .3);
    }

    body {
        background: var(--body-color-grey);
    }

    body.dark {
        --body-color-grey: ;
        --bar-color-light: brown;
        --primary-color-light-blue: ;
        --secondary-color-blue: ;
        --tertiary-color-dark-blue: ;
        --intermidary-color-thick-blue: ;
        --non-color-dark: ;
        --toggle-color: ;
        --text1-color-dark-grey: ;
        --background-border-color: ;
        --alert-color-red: ;
        --hover-color: ;
        --light: #0C0C1E;
        --grey: #060714;
        --dark: #FBFBFB;
    }

    body.dark #navigationBar {
        background: gold;
    }

    html {
        scroll-behavior: smooth;
    }

    html::-webkit-scrollbar {
        width: 6px;
    }

    html::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    html::-webkit-scrollbar-thumb {
        background: #888;
    }

    html::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    button,
    input {
        -webkit-appearance: none;
        outline: none;
        font-family: 'Open Sans', sans-serif;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    h1, h2, h3, h4, h5, h6 {
        margin: 0;
        font-weight: 500;
    }

    h1 {
        font-size: 40px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-size: 20px;
    }

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 16px;
    }

    h6 {
        font-size: 14px;
    }

    p {
        margin: 0;
        color: #666;
        font-size: 16px;
        line-height: 25px;
        opacity: 0.6;
    }

    .alert {
        padding: 1rem;
        border-radius: 5px;
        color: white;
        margin: 1rem 0;
    }

    .alert-success {
        background-color: #42ba96;
    }

    .alert-danger {
        background-color: #fc5555;
    }

    .alert-info {
        background-color: #2e9afe;
    }

    .alert-warning {
        background-color: #ff9966;
    }

    .buttonForm1 button {
        align-items: center;
        justify-content: center;
        display: flex;
        gap: 10px;
        margin-top: 1rem;
    }

    button {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        border: 1px solid var(--body-color-grey);
        padding: 10px;
        font-size: 20px;
        font-weight: 300;
        width: 80%;
        position: relative;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
        border-radius: 10px;
    }

    button:hover {
        background: var(--bar-color-light);
        color: var(--text1-color-dark-grey);
        border: 1px solid var(--tertiary-color-dark-blue);

    }

    .btn-lg {
        padding: 1.1rem 2rem;
        font-size: 1.2rem;
    }



    /* ========================================================== FORGET PASSWORD STARTS ============*/
    /* It uses login code */

    /* ========================================================== EMAIL VERIFICATION STARTS ============*/
    /* It uses login code */

    /* ========================================================== CHANGE PASSWORD STARTS ============*/
    /* It uses login code */

    /* ==========================================================  MENU SECTION STARTS ============*/

    #navigationBar { 
        background: var(--bar-color-light);
        position: fixed;
        display: flex;
        /* width: 1400px; */
        width: 100vw;
        transition: var(--tran-03);
        align-items: center;
        text-align: center;
        justify-content: space-evenly;
        height: 55px;
        box-shadow: var(--box-shadow-second);
        z-index: 400;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    #navigationBar #menuController {
        position: relative;
        align-items: center;
        justify-content: center;
        transition: var(--tran-03);
        background: var(--body-color-grey);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        pointer-events: none;
        cursor: none;
        display: none;
    }

    #navigationBar #menuController::before {
        content: "";
        position: absolute;
        width: 25px;
        height: 4px;
        transform: translateY(-8px);
        transition: var(--tran-04);
        background: var(--text1-color-dark-grey);
        border-radius: 15px;
    }

    #navigationBar #menuController::after {
        content: "";
        position: absolute;
        width: 25px;
        height: 4px;
        background: var(--text1-color-dark-grey);
        box-shadow: 0 8px 0 0 var(--text1-color-dark-grey);
        transition: var(--tran-04);
        border-radius: 15px;
    }

    #navigationBar .brandLogo {
        display: block;
        justify-content: center;
        align-items: center;
        transition: var(--tran-03) ease;
        position: relative;
        border-radius: 50%;
    }

    .brandLogo img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        display: block;
        cursor: pointer;
        border-radius: 50%;
    }

    #navigationBar #sideMenu {
        position: relative;
        display: flex;
        gap: 5px;
        align-items: center;
        justify-content: space-evenly;
        transition: all 0.3s ease;
        background: var(--bar-color-light);
    }

    #sideMenu i {
        min-width: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }

    #sideMenu a {
        display: flex;
        align-items: center;
        font-size: 20px;
        color: var(--text1-color-dark-grey);
        transition: all 0.3s ease-in-out;
        border-radius: 5px;
        white-space: nowrap;
        padding: 5px 8px 5px 4px;
        list-style: none;
        text-decoration: none;
        background: var(--bar-color-light);
    }

    #sideMenu a:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        transform: scale(0.8);
    }

    #sideMenu  .icon-right {
        margin-left: 1px;
        transition: var(--tran-03);
        font-size: 15px;
        margin-top: 2px;
    }

    #navigationBar #sideMenu > li > a.active,
    #navigationBar #sideMenu > li > a.active:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        transform: scale(0.8);
    }

    #navigationBar #sideMenu > li > a.active .icon-right {
        transform: rotateZ(90deg);
    }

    #sideMenu .sideMenudropdown {
        position: absolute;
        margin-left: 0.4rem;
        margin-top: 12px;
        padding: 2px 5px;
        display: grid;
        gap: 3px;
        align-items: center;
        justify-content: center;
        background: var(--bar-color-light);
        box-shadow: var(--box-shadow);
        border-radius: 12px;
        width: 120px;
        display: block;
        opacity: 0;
        pointer-events: none;
    }

    #sideMenu .sideMenudropdown.view {
        opacity: 1;
        pointer-events: visible;
    }

    #sideMenu .sideMenudropdown a {
        align-items: center;
        justify-content: center;
        padding: 2px 25px;
        font-size: 18px;
        margin: 5px 0;
    }

    #sideMenu .sideMenudropdown a:hover {
        color: var(--bar-color-light);
    }

    /*============ VIEW MODE AND SEARCHING ============*/
    #navigationBar .darkLightSearchBox {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 10%;
    }

    .darkLightSearchBox .darkLight,
    .darkLightSearchBox .searchToggle {
        display: flex;
        align-items: center;
        position: relative;
    }

    .darkLight i {
        position: absolute;
        color: var(--text1-color-dark-grey);
        font-size: 20px;
        cursor: pointer;
        transition: var(--tran-03);
        background: var(--body-color-grey);
        border-radius: 50%;
        padding: 2px 7px;
        left: 0;
    }

    .searchToggle i {
        position: absolute;
        color: var(--text1-color-dark-grey);
        font-size: 20px;
        cursor: pointer;
        transition: var(--tran-03);
        background: var(--body-color-grey);
        border-radius: 50%;
        padding: 2px 7px;
        right: 0;
    }

    .darkLight i.sun {
        opacity: 0;
        pointer-events: none;
    }

    .darkLight.active i.sun {
        opacity: 1;
        pointer-events: auto;
    }

    .darkLight.active i.moon {
        opacity: 0;
        pointer-events: none;
    }

    .searchToggle i.cancel {
        opacity: 0;
        pointer-events: none;;
    }

    .searchToggle.active i.cancel {
        opacity: 1;
        pointer-events: auto;
    }

    .searchToggle.active i.search {
        opacity: 0;
        pointer-events: none;
    }

    .darkLightSearchBox .searchBox {
        position: relative;
    }

    .searchBox .searchField {
        position: absolute;
        right: 0;
        height: 350px;
        width: 300px;
        display: block;
        gap: 10rem;
        background-color: var(--bar-color-light);
        padding: 3px;
        border-radius: 6px;
        box-shadow: var(--box-shadow);;
        opacity: 0;
        pointer-events: none;
        transition: var(--tran-03);
        font-size: 20px;
        top: 35px;
    }

    .searchToggle.active~.searchField {
        opacity: 1;
        pointer-events: auto;
    }

    .searchField::before {
        content: '';
        position: absolute;
        right: 8px;
        top: -5px;
        height: 12px;
        width: 12px;
        background-color: var(--bar-color-light);
        transform: rotate(-45deg);
        z-index: -1;
    }

    .searchField .sfInputBtn {
        position: relative;
        background: var(--primary-color-light-blue);
        align-items: center;
        justify-content: flex-start;
        padding: 3px;
        height: 12%;
        display: flex;
        margin: 0.3rem 0;
        border-radius: 5px 10px 10px 5px;
    }

    .sfInputBtn input {
        height: 100%;
        width: 88%;
        padding: 0 45px 0 15px;
        outline: none;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        color: var(--text1-color-dark-grey);
        background-color: var(--bar-color-light);
        border-color: 1px solid var(--alert-color-red);
    }

    body.dark .sfInputBtn input {
        color: var(--text1-color-dark-grey);
    }

    .sfInputBtn i {
        position: absolute;
        color: var(--text1-color-dark-grey);
        font-size: 20px;
        cursor: pointer;
        right: 3px;
        padding: 1px 5px;
        border-radius: 50%;
        background: var(--bar-color-light);
    }

    .sfInputBtn i:hover {
        color: var(--secondary-color-blue);
        background: var(--bar-color-light);
        transform: scale(0.8);
    }

    .searchField .sfSuggestion {
        position: relative;
        background: var(--body-color-grey);
        margin: 0.3rem 0;
        padding: 0.2rem 2rem 4rem 0.5rem;
        display: block;
        text-align: start;
        height: 85%;
        overflow-y: auto;
        scrollbar-width: none;
        transition: var(--tran-05);
        cursor: pointer;
    }

    .searchField .sfSuggestion::-webkit-scrollbar {
        display: none;
    }
    
    .sfSuggestion h5 {
        line-height: 25px;
        font-weight: 200;
        color: var(--non-color-dark);
    }

    /*============ PROFILE ============*/
    #navigationBar .profileContents {
        position: relative;
        justify-content: center;
        align-items: center;
    }

    .profileContents img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        cursor: pointer;
    }

    .profileContents img:hover {
        border: 1px solid var(--secondary-color-blue);
    }

    .profileContents .profileLink {
        position: absolute;
        margin-top: calc(100% - 20px);
        right: 0;
        background: var(--bar-color-light);
        padding: 10px 0;
        box-shadow: var(--box-shadow);
        border-radius: 10px;
        width: 160px;
        opacity: 0;
        pointer-events: none;
        transition: var(--tran-03);
    }
    
    .profileContents .profileLink::before {
        content: '';
        position: absolute;
        right: 14px;
        top: -5px;
        height: 12px;
        width: 12px;
        background-color: var(--bar-color-light);
        transform: rotate(-45deg);
        z-index: -1;
    }

    .profileContents .profileLink.show {
        opacity: 1;
        pointer-events: visible;
        top: 100%;

    }

    .profileLink a {
        padding: 8px 16px;
        display: flex;
        font-size: 17px;
        color: var(--text1-color-dark-grey);
        align-items: center;
        transition: var(--tran-03);
        border-radius: 5px;
        margin: 5px;
        position: relative;
    }

    .profileLink a:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        padding-left: 25px;
    }

    .profileLink i {
        font-size: 18px;
        margin-left: 0.1rem;
        width: 40px;
    }

    .downButtonBar {
        background: var(--bar-color-light);
        position: fixed;
        right: 0.5rem;
        bottom: 0.3rem;
        display: flex;
        padding: 0.4rem 0.2rem;
        width: 280px;
        align-items: center;
        transition: var(--tran-06);
        z-index: 200;
        box-shadow: var(--box-shadow);
        pointer-events: auto;
        justify-content: center;
        border-radius: 10px;
    }

    .downButtonBar a {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: var(--text1-color-dark-grey);
        background: var(--bar-color-light);
        transition: all 0.3s ease-in-out;
        white-space: nowrap;
        padding: 6px;
        border-radius: 10px;
        width: 50px;
    }

    .downButtonBar a:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        transform: scale(0.8);
    }

    .downButtonBar a .badge5 {
        position: absolute;
        margin-bottom: 1.2rem;
        margin-left: 1.0rem;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid var(--bar-color-light);
        background: var(--alert-color-red);
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--bar-color-light);
        font-size: 10px;
        font-weight: 700;
    }



    @media only screen and (max-width: 1180px) {

        #sideMenu a {
            padding: 5px 4px 5px 0px;
        }

        #navigationBar .darkLightSearchBox {
            width: 8%;
        }

    }


    @media only screen and (max-width: 1050px) {
        #navigationBar #sideMenu {
            background: var(--bar-color-light);
            position: fixed;
            left: -1000%;
            gap: 0;
            display: block;
            width: 0;
            height: 100vh;
            overflow-y: auto;
            scrollbar-width: none;
            transition: var(--tran-06);
            z-index: 200;
            pointer-events: none;
            padding: 0.4rem 0.4rem 10rem 0.4rem;
            top: 3.5rem;
            box-shadow: none;
            border-right: 1px solid var(--non-color-dark);
        }

        #navigationBar #sideMenu::-webkit-scrollbar {
            display: none;
        }

        #navigationBar #sideMenu.active {
            left: 0;
            width: 300px;
            pointer-events: auto;
        }

        #sideMenu i {
            font-size: 25px;
            margin: 0 1rem;
            margin-left: 1.2rem;
            margin-right: 2.5rem;
        }

        #sideMenu  .icon-right {
            font-size: 18px;
            margin-top: 2px;
            margin-left: 3.5rem;
        }

        #sideMenu a {
            font-size: 17px;
            margin: 5px 0rem;
            padding: 10px 1.5rem;
            background: var(--body-color-light);
            color: var(--text1-color-dark-grey);
            display: flex;
            gap: 0;
            align-items: center;
            position: relative;
        }
        
        #sideMenu a:hover {
            transform: scale(0.95);
        }

        #sideMenu .sideMenudropdown.view {
            max-height: 1000px;
            margin: 10px 0;
        }

        #sideMenu .sideMenudropdown {
            position: relative;
            margin-left: 0;
            margin-top: -5px;
            padding: 0;
            display: block;
            gap: 0;
            align-items: center;
            justify-content: center;
            background: var(--body-color-grey);
            box-shadow: none;
            border-radius: 0;
            width: 100%;
            display: block;
            opacity: 0;
            pointer-events: none;
            max-height: 0;
        }

        #sideMenu .sideMenudropdown::before {
            display: none;
        }

        #sideMenu .sideMenudropdown a {
            align-items: center;
            justify-content: center;
            padding: 5px 0;
            font-size: 18px;
            margin: 5px 0;
            background: var(--body-color-grey);
            display: flex;
        }

        #sideMenu .sideMenudropdown a:hover {
            color: var(--tertiary-color-dark-blue);
            transform: scale(1.0);
        }

        #navigationBar #menuController {
            display: flex;
            cursor: pointer;
            pointer-events: auto;
        }

        #navigationBar #menuController.active::before {
            transform: rotate(45deg);
            background: var(--secondary-color-blue);
        }

        #navigationBar #menuController.active::after {
            transform: rotate(-45deg);
            box-shadow: none;
            background: var(--secondary-color-blue);
        }

        #navigationBar .brandLogo {
            display: none;
        }

        .brandLogo img {
            display: none;
            cursor: none;
        }

        #navigationBar .darkLightSearchBox {
            width: 20%;
        }
        .searchBox .searchField {
            width: 270px;
            right: -6rem;
        }

        .searchField::before {
            display: none;
        }

        .downButtonBar {
            display: grid;
            width: 55px;
        }


    }


    @media only screen and (max-width: 850px) {

        #navigationBar { 
            height: 40px;
        }

        #navigationBar #menuController {
            width: 35px;
            height: 35px;
        }

        #navigationBar #menuController::before {
            width: 20px;
        }

        #navigationBar #menuController::after {
            width: 20px;
        }

        #navigationBar #sideMenu {
            width: 0;
            left: -1000%;
            pointer-events: none;
            top: 2.5rem;
            box-shadow: none;
            border-right: 1px solid var(--non-color-dark);
        }

        #navigationBar #sideMenu.active {
            left: 0;
            width: 280px;
            pointer-events: auto;
        }

        #sideMenu i {
            font-size: 18px;
            margin: 0 0.9rem;
        }

        #sideMenu a {
            font-size: 17px;
            margin: 5px 0rem;
            padding: 10px 1.5rem;
            background: var(--body-color-light);
            color: var(--text1-color-dark-grey);
        }

        #sideMenu  .icon-right {
            font-size: 15px;
            margin-left: 1rem;
            margin-top: 2px;
        }

        .darkLight i {
            font-size: 17px;
        }

        .searchToggle i {
            font-size: 17px;
        }

        .profileContents img {
            width: 30px;
            height: 30px;
        }

        #navigationBar .darkLightSearchBox {
            width: 30%;
        }

        .downButtonBar {
            width: 100%;
            padding: 0.2rem 0.2rem;
            right: unset;
            border-radius: 20px 20px 0 0;
            bottom: 0;
            display: flex;
            justify-content: space-evenly;
        }

        .downButtonBar a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text1-color-dark-grey);
            background: var(--bar-color-light);
            transition: all 0.3s ease-in-out;
            white-space: nowrap;
            font-size: 22px;
            padding: 2px 8px;
            border-radius: 10px;
            width: 50px;
        }

        .downButtonBar a:hover {
            background: var(--bar-color-light);
            color: var(--secondary-color-blue);
            transform: scale(0.9);
        }

    }

    @media only screen and (max-width: 300px) {

        #navigationBar #sideMenu.active {
            width: 95%;
        }

        .searchBox .searchField {
            width: 180px;
            right: -3rem;
        }

    }

    @media only screen and (max-width: 270px) {

        #navigationBar .darkLightSearchBox {
            width: 40%;
        }

    }




 /* ========================================================== OPEN MASSAGE CHAT STARTS ============*/

     .aboutChatBox {
        background: var(--body-color-grey);
        display: flex;
        position: relative;
        justify-content: center;
        align-items: start;
        height: 100vh;
        width: 100%;
        gap: 2rem;
        padding: 4rem 0 2rem 0;
     }

     .messageContainer {
        height: 585px;
        padding-bottom: 2rem;
        background: var(--body-color-grey);
        box-shadow: var(--box-shadow);
     }

    .messageContainer .postChatHead {
        background: white;
        display: flex;
        top: 0;
        padding: 0.2rem 0.5rem;
        justify-content: space-between;
        align-items: center;
        position: relative;
        background: #e7feff;
        border: 2px solid var(--bar-color-light);
    }

    .postChatHead img {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        border: 1px solid var(--non-color-dark);
        margin: 0 0.1rem;
        cursor: pointer;
    }

    .postChatHead .pCHSearchBox {
        display: flex;
        padding: 0.3rem 0.3rem 0.3rem 0.4rem;
        align-items: center;
        background: var(--body-color-grey);
        border-radius: 15px;
        width: 80%;
        justify-content: space-around;
        border: 1px solid var(--bar-color-light);
    }

    .pCHSearchBox input {
        border-radius: 5px 0 0 5px;
        background: var(--body-color-grey);
        color: var(--text1-color-dark-grey);
        padding: 0 0.4rem;
        font-size: 19px;
        width: 100%;
    }

    .pCHSearchBox input::placeholder {
        color: var(--secondary-color-blue);
    }

    .pCHSearchBox i {
        color: var(--secondary-color-blue);
        font-size: 17px;
        background: var(--bar-color-light);
        padding: 0.2rem;
        margin: 0.2rem;
        border-radius: 50%;
    } 

    .pCHSearchBox i:hover {
        color: var(--bar-color-light);
        background: var(--secondary-color-blue);
    } 

    .messageContainer .postChatBody {
        padding: 0.4rem;
        overflow: hidden;
        overflow-y: auto;
        scrollbar-width: none;
        transition: all 0.6s ease;
        pointer-events: auto;
        display: block;
        gap: 0.4rem;
        height: 505px;
        transition: var(--tran-06);
        background: var(--bar-color-light);
        border-top: 1px solid var(--non-color-dark);
        border-bottom: 1px solid var(--non-color-dark);
    }

    .messageContainer .postChatBody::-webkit-scrollbar {
        width: 6px;
    }

    .messageContainer .postChatBody::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .messageContainer .postChatBody::-webkit-scrollbar-thumb {
        background: var(--primary-color-light-blue);
        border-radius: 15px;
    }

    .messageContainer .postChatBody::-webkit-scrollbar-thumb:hover {
        background: #bcd4e6;
    }

    .postChatBody .postCBContainer {
        display: flex;
        align-items: center;
        border-radius: 25px;
        transition: var(--tran-03);
        cursor: pointer;
        padding: 0.3rem 0;
        margin: 0.3rem 0;
    }

    .postChatBody .postCBContainer:hover {
        background: var(--primary-color-light-blue);
        color: var(--bar-color-light);
    }

    .postCBContainer .imgCont {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0.5rem;
        border-radius: 50%;
    }

    .imgCont img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .imgCont .onlineIcon {
        position: absolute;
        height: 15px;
	    width: 15px;
        background: var(--secondary-color-blue);
        border-radius: 50%;
        bottom: -0.1rem;
        right: 0;
        border: 1px solid var(--bar-color-light);
    }

    .imgCont .offlineIcon {
        background: #c23616;
        position: absolute;
        height: 15px;
	    width: 15px;
        border-radius: 50%;
        bottom: -0.1rem;
        right: 0;
        border: 1px solid var(--bar-color-light);
    }

    .postCBContainer .userInfo {
        display: block;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: start;
    }

    .userInfo span {
        font-size: 15px;
        font-weight: 400;
    }

    .userInfo p {
        font-size: 12px;
        line-height: 15px;
    }



    .openChatContainer {
        width: 700px;
        height: 585px;
        background: yellow;
        position: relative;
        display: block;
        box-shadow: var(--box-shadow);
    }

    .openChatContainer .openChatHead {
        display: flex;
        top: 0;
        justify-content: space-between;
        align-items: center;
        background: var(--primary-color-light-blue);
        width: 100%;
    }

    .openChatHead .goBackIcon2 {
        font-size: 35px;
        padding: 0;
        margin: 0 0.3rem;
        cursor: pointer;
    }

    .goBackIcon2 a {
        color: var(--text1-color-dark-grey);
    }

    .openChatHead .imgContuserInfo {
        display: flex;
        position: relative;
        padding: 0.5rem 0.2rem;
        align-items: center;
        width: 95%;
    }

    .imgContuserInfo .imgConttt2 {
        display: block;
        justify-content: center;
        align-items: center;
        padding-right: 0.3rem;
    }

    .imgConttt2 img {
        height: 55px;
        width: 55px;
        border-radius: 50%;
        border: 1px solid var(--non-color-dark);
    }

    .imgConttt2 .onlineIcon3B {
        position: absolute;
        height: 15px;
	    width: 15px;
        background: var(--secondary-color-blue);
        border-radius: 50%;
        top: 3rem;
        left: 2.5rem;
        border: 1px solid var(--bar-color-light);
    }

    .imgContuserInfo .userInfo2R {
        display: block;
        align-items: center;
        justify-content: center;
        padding-left: 0.3rem;
    }

    .userInfo2R h4 {
        font-size: 18px;
        font-weight: 500;
    }

    .userInfo2R p {
        font-size: 12px;
        line-height: 15px;
        font-weight: 500;
    }

    .openChatHead .userOption2R {
        display: block;
        align-items: center;
        position: relative;
        justify-content: center;
        padding: 0 1rem;
    }

    .userOption2R i {
        font-size: 25px;
        cursor: pointer;
    }

    .openChatContainer .openChatBody {
        display: grid;
        gap: 2rem;
        padding: 1rem 1rem 4rem 1rem;
        background: var(--bar-color-light);
        position: relative;
        overflow-x: auto;
        scrollbar-width: none;
        transition: var(--tran-06);
        top: 0;
        cursor: pointer;
        height: 415px;
        min-height: 10%;
        border-top: 1px solid var(--non-color-dark);
        border-bottom: 1px solid var(--non-color-dark);
    }

    .openChatContainer .openChatBody::-webkit-scrollbar {
        display: none;
    }

    .openChatBody .openChatBodyFirst {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: flex-end;
    }

    .openChatBodyFirst .chatWriteUp2 {
        margin-right: 3.5rem;
        display: block;
        align-items: center;
        position: relative;
    }

    .chatWriteUp2 h5 {
        border: 5px solid var(--primary-color-light-blue);
        display: flex;
        padding: 0.7rem 1.2rem;
        font-size: 17px;
        font-weight: 400;
        border-radius: 20px 20px 0 20px;
    }

    .chatWriteUp2 p {
        color: var(--text1-color-dark-grey);
        align-items: center;
        position: relative;;
        display: flex;
        justify-content: flex-end;
        padding-right: 1rem;
        font-size: 15px;
    }

    .openChatBodyFirst .chatProfileImg2 {
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .chatProfileImg2 img {
        height: 45px;
        width: 45px;
        border-radius: 50%;
        border: 1px solid var(--non-color-dark);
        object-fit: cover;
    }

    .openChatBody .openChatBodySecond {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: flex-start;
    }

    .openChatBodySecond .chatWriteUp2B {
        margin-left: 3.5rem;
        display: block;
        align-items: center;
        position: relative;
    }

    .chatWriteUp2B h5 {
        border: 5px solid #fdd5b1;
        display: flex;
        padding: 0.7rem 1.2rem;
        font-size: 17px;
        font-weight: 400;
        border-radius: 20px 20px 20px 0px;
    }

    .chatWriteUp2B p {
        color: var(--text1-color-dark-grey);
        align-items: center;
        position: relative;;
        display: flex;
        justify-content: flex-start;
        padding-left: 1rem;
        font-size: 15px;
    }

    .openChatBodySecond .chatProfileImg2B {
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .chatProfileImg2B img {
        height: 45px;
        width: 45px;
        border-radius: 50%;
        border: 1px solid var(--non-color-dark);
        object-fit: cover;
    }

    .openChatContainer .openChatFoot {
        display: flex;
        background: var(--primary-color-light-blue);
        align-items: center;
        justify-content: space-evenly;
        padding: 0.5rem 0;
    }

    .openChatFoot .sendImageBtn2 {
        display: block;
        position: relative;
        align-items: center;
    }

    .sendImageChatBtn2 i {
        font-size: 25px;
        align-items: center;
        color: var(--tertiary-color-dark-blue);
        cursor: pointer;
    }

    .sendImageChatBtn2 i:hover {
        color: var(--secondary-color-blue);
    }

    .sendImageChatBtn2 .messageSendBtn2J {
        transform: rotate(300deg);
    }

    .openChatFoot .typeChatSec2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 80%;
        border-radius: 12px;
    }

    .typeChatSec2 textarea {
        padding: 0.2rem 1rem;
        font-size: 18px;
        font-weight: 300;
        background: var(--bar-color-light);
        color: var(--text1-color-dark-grey);
        box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 1px;
        border: 1px solid var(--bar-color-light);
        border-radius: 12px;
        margin: 0.45rem 0;
        min-height: 70px;
        max-height: 150px;
        width: 100%;
        overflow: hidden;
        overflow-y: auto;
        scrollbar-width: none;
        cursor: pointer;
        position: relative;
        transition: var(--tran-06);
        border-bottom-right-radius: 0;
    }

    .typeChatSec2 textarea::-webkit-scrollbar {
        display: none;
    }

    .typeChatSec2 textarea:hover {
        border: 1px solid var(--secondary-color-blue);
    }

    .typeChatSec2 textarea::placeholder {
        color: #ccc;
    }

    .openChatFoot .sendChatBtn2 {
        display: block;
        position: relative;
        align-items: center;
    }
    
    @media only screen and (max-width: 1050px) {
        .openChatContainer {
            margin: 3rem 0  3rem 0;
        }

    }

    @media only screen and (max-width: 600px) {
        /* .openChatContainer {
            width: 97%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            margin: 4rem 0;
        }  
        
        .openChatContainer .openChatBody {
            height: 80vh;
     
        } */
    }

    @media only screen and (max-width: 400px) {
        /* .openChatHead .imgContuserInfo {
            gap: 0.7rem;
            padding: 0.5rem 0rem;
        }

        .imgContuserInfo .imgConttt2 {
            padding-right: 0.3rem;
        }

        .imgContuserInfo .userInfo2R {
            padding-left: 0.3rem;
        }

        .openChatHead .userOption2R {
            padding: 0 0.5rem;
        }

        .openChatContainer .openChatBody {
            padding: 1rem 0.3rem 4rem 0.3rem;
        }

        .openChatBodyFirst .chatWriteUp2 {
            margin-right: 3rem;
        }

        .chatWriteUp2 h5 {
            padding: 0.7rem 0.8rem;
        }

        .chatWriteUp2 p {
            padding-right: 0.4rem;
        }

        .openChatBodySecond .chatWriteUp2B {
            margin-left: 3rem;
        }

        .chatWriteUp2B h5 {
            padding: 0.7rem 0.8rem;
        }

        .chatWriteUp2B p {
            padding-left: 0.4rem;
        } */

    }

    /* ========================================== SUPPORTS STARTS ============*/

    .supportContainer {
        background: var(--bar-color-light);
        position: absolute;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1px;
        font-size: 1rem;
        height: 100vh;
        width: 100%;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
        align-items: center;
        justify-content: center;
        padding: 3rem 1rem 1rem 1rem;
    }

    .supportRPath {
        padding: 0 1rem;
    }

    .supportRPath .svgSupport {
        height: 20vh;
        width: 30vw;
    }

    .supportRPath h2 {
        color: var(--secondary-color-blue);
    }

    .supportRPath p {
        margin: 1rem 0 2rem;
        color: var(--text1-color-dark-grey);
    }

    .p svg {
        display: block;
        height: 50vh;
    }

    .socialHandles {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        gap: 12px;
        width: 50%;
    }   

    .socialHandles i {
        color: var(--secondary-color-blue);
        font-size: 30px;
        transition: all 400ms ease;
    }

    .socialHandles i:hover {
        color: var(--text1-color-dark-grey);
    }

    .supportForm {
        display: flex;
        flex-direction: column;
        margin-top: 0rem;
        padding: 0 1rem;
    }

    .supportForm input {
        padding: 1rem;
        font-size: 18px;
        background: var(--bar-color-light);
        box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 1px;
        border: 1px solid var(--body-color-grey);
        border-radius: 10px;
        margin: 0.45rem 0;
    }

    .supportForm textarea {
        padding: 1rem;
        font-size: 18px;
        background: var(--bar-color-light);
        box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 1px;
        border: 1px solid var(--body-color-grey);
        border-radius: 10px;
        margin: 0.45rem 0;
        min-height: 200px;
        max-height: 300px;
        overflow: hidden;
        overflow-y: auto;
        cursor: pointer;
    }

    .supportForm textarea::-webkit-scrollbar {
        display: none;
    }

    .supportForm input::placeholder {
        color: #ccc;
    }

    .supportForm textarea::placeholder {
        color: #ccc;
    }

    .supportForm input:focus {
        color: var(--text1-color-dark-grey);
        border: 1px solid var(--secondary-color-blue);
    }

    .supportForm textarea:focus {
        color: var(--text1-color-dark-grey);
        border: 1px solid var(--secondary-color-blue);
    }

    @media only screen and (max-width: 1050px) {

        .supportContainer {
            position: relative;
            grid-template-columns: 1fr;
            padding: 7rem 0.1rem 10rem 7rem;
            height: 100%;        
            gap: 3rem;
            overflow: hidden;
            overflow-y: scroll;
        }

    }

    @media only screen and (max-width: 600px) {
        
        .supportContainer {
            padding: 7rem 0.1rem 10rem 0.1rem;
        }

        .socialHandles {
            width: 80%;
        }   

    }


    /* ========================================== MARKETPLACE POSTS STARTS ============*/

    .mainPartView {
        display: flex;
        position: relative;
        justify-content: center;
        gap: 0.5rem;
    }

    @media only screen and (max-width: 850px) {
        .mainPartView {
            gap: 0.2rem;
        }
    }

    @media only screen and (max-width: 650px) {
        .mainPartView {
            display: grid;
            gap: 0;
            justify-items: center;
        }
    }

    .postContainer {
        width: 965px;
        height: 100%;
        transition: var(--tran-06);
        pointer-events: auto;
        padding: 3.7rem 0 2rem 0;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        justify-content: center;
        position: relative;
        box-shadow: var(--box-shadow);
        background: var(--bar-color-light);
    }

    .postContainer .wrapper {
        width: 305px;
        background: var(--bar-color-light);
        padding: 0.2rem 0;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
    }

    .wrapper .headPost {
        display: flex;
        padding: 3px 5px;
        align-items: center;
        position: relative;
    }

    .headPost img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid var(--primary-color-light-blue);
        margin-right: 0.3rem;
        cursor: pointer;
    }

    .headPost .postNameEvent {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 90%;
    }

    .postNameEvent .postName {
        width: 75%;
    }

    .postNameEvent .postEvent {
        display: flex;
    }

    .postNameEvent .postName h5 {
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
    }

    .postNameEvent .postName h6 {
        font-size: 11px;
        opacity: 0.9;
        cursor: pointer;
    }

    .postEvent p {
        line-height: 15px;
        font-size: 12px;
        cursor: pointer;
        opacity: 0.9;
    }

    .wrapper .bodyPost  {
        display: flex;
        text-decoration: none;
        color: var(--text1-color-dark-grey);
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        padding: 1px;
        margin: 0 1px;
        background: var(--non-color-dark);
    }

    .bodyPost .vgallery {
        width: 50%;
        display: flex;
        position: relative;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin-right: 0.5px;
        border-radius: 8px;
    }

    .vimage img {
        width: 220px;
        height: 100px;
        vertical-align: middle;
        transition: var(--tran-03);
        cursor: pointer;
        padding: 0px;
    }

    .vgallery .vimage:hover img {
        transform: scale(1.05);
    }

    .bodyPost .bodyPostText {
        width: 50%;
        display: block;
        margin-left: 0.5px;
        border-radius: 6px;
        background: var(--bar-color-light);
    }

    .bodyPostText .headerBPText {
        align-items: center;
        display: flex;
        justify-content: space-evenly;
        position: relative;
        padding: 0 2px;
        border-bottom: 1px solid var(--non-color-dark);
    }

    .headerBPText p {
        font-size: 12px;
        opacity: 0.9;
        line-height: 20px;
    }

    .headerBPText .divider {
        width: 1px;
        background: var(--non-color-dark);
        height: 10px;
        display: block;
        margin: 0 5px;
    }

    .bodyPostText .postWritten {
        height: 79px;
        overflow: hidden;
        overflow-y: auto;
        cursor: pointer;
        transition: var(--tran-06);
        padding: 3px 5px;
        text-align: start;
    }

    .postWritten::-webkit-scrollbar {
        display: none;
    }

    .postWritten h4 {
        font-size: 11px;
        padding-bottom: 1rem;
    }

    .wrapper .footPostW {
        display: flex;
        position: relative;
        justify-content: flex-start;
        align-items: center;
        height: 18px;
    }

    .footPostW .footerLocationIcon {
        display: block;
        position: relative;
        margin: 0 5px;
    }

    .footerLocationIcon i {
        font-size: 14px;
        color: goldenrod;
        align-items: center;
        font-weight: 900;
    }

    .footerLocationName p {
        display: flex;
        font-size: 11px;
        line-height: 0;
        opacity: 0.9;
    }

    .wrapper .footPost {
        background: var(--bar-color-light);
        display: flex;
        justify-content: space-around;
        position: relative;
        padding: 0.2rem 0;
    }

    .footPost div {
        display: flex;
        align-items: center;
        color: var(--text1-color-dark-grey);
        cursor: pointer;
    }

    .footPost div i {
        margin-right: 1.5px;
        font-size: 14px;
    }

    .footPost div h5 {
        margin-left: 1.5px;
        font-size: 12px;
    }

    @media only screen and (max-width: 1180px) {
        .postContainer {
           width: 650px;
        }
    }

    @media only screen and (max-width: 970px) {
        .postContainer {
           width: 330px;
        }

        .postContainer .wrapper {
            width: 325px;
        }

    }

    @media only screen and (max-width: 850px) {
        .postContainer {
            padding: 2.5rem 0 2.4rem 0;
        }
    }

    @media only screen and (max-width: 650px) {
        .postContainer {
           grid-row: 2;
           grid-column: 1;
           padding: 0rem 0 2.5rem 0;
           width: 100%;
           scrollbar-width: none;
           display: flex;
           justify-content: center;
           place-content: center;
           position: relative;
           box-shadow: none;
           gap: 0;
        }

        .postContainer .wrapper {
            width: 340px;
        }
    }
    @media only screen and (max-width: 400px) {
        .postContainer {
           width: 100vw;
           display: flex;
        }

        .postContainer .wrapper {
            width: 100%;
        }

        .vimage img {
            height: 120px;
        }

        .bodyPostText .postWritten {
            height: 99px;
        }

    }



    #leftContentPlus {
        width: 305px;
        height: 650px;
        padding: 4rem 2px 2rem 2px; 
        justify-content: center;
        display: grid;
        position: relative;
        background: var(--bar-color-light);
        justify-items: center;
    }

    #leftContentPlus .categoryViewer a {
        background: var(--bar-color-light);
        display: none;
        pointer-events: none;
        justify-content: space-between;
        align-items: center;
        position: relative;
        width: 298px; 
        height: 38px;
        padding: 0.8rem 0.8rem;
        box-shadow: var(--box-shadow);
        color: var(--text1-color-dark-grey);
    }

    #leftContentPlus .categoryViewer a h5 {
        font: 15px;
        opacity: 7;
    }

    #leftContentPlus .categoryViewer a .icon-first {
        font-size: 17px;
        transition: all .3s ease;
    }

    #leftContentPlus .categoryViewer > a:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        border: 1px solid var(--primary-color-light-blue);
    }
    #leftContentPlus .categoryViewer > a.active .icon-first {
        transform: rotateZ(90deg);
    }
    #leftContentPlus .categoryViewer > a.active,
    #leftContentPlus .categoryViewer > a.active:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        border: 1px solid var(--primary-color-light-blue);
    }

    #leftContentPlus .categoriesBox {
        background: var(--bar-color-light);
        transition: var(--tran-06);
        pointer-events: auto;
        box-shadow: var(--box-shadow);
        position: fixed;
        display: block;
        height: 360px;
        width: 298px;
        overflow: hidden;
        overflow-y: auto;
        scrollbar-width: none;
        padding-bottom: 2rem;   
        border-bottom: 1rem solid var(--body-color-grey);
    }

    #leftContentPlus .categoriesBox::-webkit-scrollbar {
        width: 6px;
    }

    #leftContentPlus .categoriesBox::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    #leftContentPlus .categoriesBox::-webkit-scrollbar-thumb {
        background: var(--primary-color-light-blue);
        border-radius: 15px;
    }

    #leftContentPlus .categoriesBox::-webkit-scrollbar-thumb:hover {
        background: #bcd4e6;
    }

    #leftContentPlus .categoriesBox a {
        display: flex;
        align-items: center;
        padding: 0.2rem 0.5rem;
        transition: all .3s ease;
        border-radius: 10px;
        margin: 4px 0.8rem;
        white-space: nowrap;
        color: var(--text1-color-dark-grey);
        background: var(--bar-color-light);
    }

    #leftContentPlus .categoriesBox a img {
        height: 50px;
        width: 50px;
        margin-right: 0.4rem;
    }

    #leftContentPlus .categoriesBox a h4 {
        font-size: 15px;
    }

    #leftContentPlus .categoriesBox a h6 {
        opacity: 0.7;
    }

    #leftContentPlus .categoriesBox a .icon-right {
        margin-left: auto;
        transition: all .3s ease;
    }

    #leftContentPlus .categoriesBox > li > a:hover {
        background: var(--primary-color-light-blue);
        color: var(--secondary-color-blue);
    }

    #leftContentPlus .categoriesBox > li > a.active .icon-right {
        transform: rotateZ(90deg);
    }

    #leftContentPlus .categoriesBox > li > a.active,
    #leftContentPlus .categoriesBox > li > a.active:hover {
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
    }

    #leftContentPlus .cateDropDownOpt {
        padding: 0.2rem;
        margin: 0.2rem 2rem;
        max-height: 0;
        border-radius: 12px;
        overflow: hidden;
        overflow-y: hidden;
        scrollbar-width: none;
        transition: all .15s ease;
        background: var(--bar-color-light);
        display: none;
        border: 2px solid var(--body-color-grey);
    }

    #leftContentPlus .cateDropDownOpt.show {
        max-height: 1500px;
        display: block;
    }

    #leftContentPlus .cateDropDownOpt a:hover {
        background: var(--primary-color-light-blue);
        color: var(--secondary-color-blue);
        transform: scale(1.1);
    }

    #leftContentPlus .cateDropDownOpt a {
        justify-content: flex-start;        
    }

    #leftContentPlus .cateDropDownOpt a img {
        height: 40px;
        width: 40px;
    }

    #leftContentPlus .cateDropDownOpt a h4 {
        font-size: 12px;
        opacity: 0.9;
        font-weight: 400;
    }

    #leftContentPlus .cateDropDownOpt a h6 {
        font-size: 12px;
    }

    @media only screen and (max-width: 970px) {
        #leftContentPlus {
            width: 300px;
        } 

        #leftContentPlus .categoriesBox {
            height: 88%;
            width: 295px;
        }

    }

    @media only screen and (max-width: 850px) {
        #leftContentPlus {
            padding: 2.8rem 2px 2rem 2px; 
        } 
    }

    @media only screen and (max-width: 650px) {
        #leftContentPlus {
            width: 100%;
            padding: 2.9rem 0px 0.1rem 0px;
            justify-content: center;
            align-items: start;
            grid-row: 1;
            grid-column: 1;
            height: unset;
            scrollbar-width: none;
        } 

        #leftContentPlus .categoryViewer a {
            display: flex;
            pointer-events: auto;
            width: 340px;
        }

        #leftContentPlus .categoriesBox {
            position: relative;
            height: 100%;
            display: none;
            pointer-events: none;
            width: 100vw;
            scrollbar-width: none;
        }

        #leftContentPlus .categoriesBox.view {
            display: block;
            pointer-events: auto;
        }
    }

    @media only screen and (max-width: 400px) {
        #leftContentPlus .categoryViewer a {
            width: 100vw;
        }
        #leftContentPlus .categoriesBox {
            width: 100vw;
        }
    }



    /* ========================================== PROFILE EDIT STARTS ============*/

    .profileAContainer {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 750px;
        background: var(--bar-color-light);
        overflow: hidden;
        border-radius: 5px;
        box-shadow: var(--box-shadow);
        margin: 2rem 0;
    }

    
    .profileAContainer .profileAHead {
        position: relative;
        display: inline-flex;
        align-items: center;
        left: 50%;
        transform: translateX(-50%);
    }

    .profileAHead .pAHImage {
        display: block;
    }

    .pAHImage img {
        height: 120px;
        width: 120px;
        border-radius: 50%;
        border: 5px solid var(--body-color-grey);
    }

    .profileAHead img:hover {
        border: 5px solid var(--primary-color-light-blue);
    }

    .profileAHead .pAHEditImage {
        padding: 2px 0.5px 0 0;
        position: relative;
        margin-left: -1.8rem;
        margin-top: 4.5rem;
        background: var(--primary-color-light-blue);
        border-radius: 50%;
    }

    .pAHEditImage i {
        font-size: 25px;
        align-items: center;
        justify-content: center;
        position: relative;
        display: flex;
        color: var(--secondary-color-blue);
    }

    .profileAHead i:hover {
        color: var(--tertiary-color-dark-blue);
        transform: scale(0.8);
    }

    .profileAContainer form {
        margin: 20px 30px 30px 30px;
    }

    .profileAContainer .profileABody {
        display: flex;
        margin-bottom: 15px;
        justify-content: space-between;
    }

    .profileAContainer .profileABox {
        margin-top: 1rem;
    }

    .profileABody .profileABodyItem {
        height: 50px;
        display: flex;
        position: relative;
        width: calc(100% / 2 - 13px);
    }

    .profileABody .profileABodyItem input {
        width: 100%;
        height: 100%;
        outline: none;
        padding: 0 18px 0 20px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 15px;
    }

    .profileABodyItem input::placeholder {
        color: #ccc;
    }

    .profileABodyItem input:focus {
        padding-left: 20px;
        border-color: var(--secondary-color-blue);
    }

    .profileABox .profileAButton {
            padding: 1rem 0;
    }

    @media only screen and (max-width: 1050px) {
        
        .profileAContainer {
            left: 54%;
            top: 50%;
            transform: translate(-46%, -50%);
            width: 80%;
        }

        .profileAContainer form {
            margin: 35px 15px;
        }

        .profileABody .profileABodyItem {
            width: calc(100% / 2 - 5px);
        }

    }

    @media only screen and (max-width: 600px) {

        .profileAContainer {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            margin-top: 4rem;
            margin-bottom: 2rem;
        }

        .profileAContainer  form {
            margin: 20px 0.5rem 5px 0.5rem;
        }

        .profileAContainer  .profileABody {
            display: block;
            margin-bottom: 10px;
        }

        .profileABody .profileABodyItem {
            width: calc(200% / 2 - 0px);
            margin-bottom: 10px;
        }

    }

    @media only screen and (max-width: 300px) {

        .profileAContainer {
            left: 50%;
            top: 60%;
            transform: translate(-50%, -40%);
            width: 95%;
            margin-top: 0rem;
            margin-bottom: 0rem;
        }
    }


    /* ========================================== PROFILE-INFO STARTS ============*/

    .profileInfo {
        position: relative;
        padding: 4rem 0 2rem 0;
        background: var(--bar-color-light);
    }       

    .profileInfo .profileInfoBox {
        padding: 0.5rem 0;
    }

    .profileInfoBox .profileIBhead {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 0;
    }

    .profileIBhead .profilePicture02 {
        height: 120px;
        width: 120px;
        border-radius: 50%;
        border: 5px solid var(--body-color-grey);
        margin: 0 0.2rem;
    }

    .profileIBhead .profilePicture02:hover {
        border: 5px solid var(--primary-color-light-blue);
    }

    .profileIBhead .profileEngagement {
        display: grid;
        grid-template-columns: 1fr;
        gap: 0.4rem;
        align-items: center;
        margin:  0 0.2rem;
    }

    .profileEngagement {
        font-size: 15px;
    }

    .profileEngagement .peDetails {
        display: flex;
        align-items: center;
    }

    .peDetails p {
        margin-right: 0.1rem;
        line-height: 5px;
    }

    .peDetails h5 {
        margin-left: 0.1rem;
    }

    .profileInfoBox .profileIBio {
        justify-content: center;
        position: relative;
        display: flex;
        width: 400px;
        left: 50%;
        transform: translateX(-50%);
        padding: 0.5rem 1.5rem;
        border-radius: 12px;
        border: 1px solid var(--body-color-grey);
        margin: 0.4rem 0;
    }

    .profileInfoBox .tabs {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.8rem 0;
    }

    .profileInfoBox .tabs .tab {
        display: block;
        margin: 0 10px;
    }

    .profileInfoBox .tabs .tab a[data-switcher] {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 0.3rem 0.5rem;
        border: 1px solid var(--primary-color-light-blue);
        border-radius: 0.3rem;
    }

    .profileInfoBox .tabs .tab:hover a[data-switcher] {
        background: var(--primary-color-light-blue);
    }

    .profileInfoBox .tabs .tab.is-active a[data-switcher] {
        border: 2px solid var(--primary-color-light-blue);
        border-bottom: 2px solid var(--tertiary-color-dark-blue);
        transform: scale(0.8);
    }

    .profileInfoBox .profileIBNeck {
        justify-content: center;
        align-items: center;
        display: flex;
        font-size: 20px;
        padding: 1rem 0;
    }

    .profileIBNeck li {
        margin: 0 0.5rem;
        background: var(--secondary-color-blue);
        color: var(--bar-color-light);
        display: inline;
        padding: 0.2rem 1.2rem 0.4rem 1.2rem;
        border: 1px solid transparent;
        cursor: pointer;
        transition: all 400ms ease;
        border-radius: 0.25rem;
        align-items: center;
        justify-content: center;
    }

    .profileIBNeck li:hover {
        background: var(--primary-color-light-blue);
        color: var(--text1-color-dark-grey);
    }

    .profileIBNeck li h5 {
        font-size: 20px;
    }

    .profileInfo  .pages {
        position: relative;
        justify-content: center;
    }

    .pages .postContainer {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 910px;
        padding: 1rem 1rem;
        background: var(--bar-color-light);
        box-shadow: none;
    }

    .postContainer .wrapper {
        margin: 0.3rem 0.5rem;
        box-shadow: var(--box-shadow);
    }

    .profileInfo .pages .page {
        display: none;
    }

    .profileInfo .pages .page.is-active {
        display: grid;
    }

    .page .listOfViewers {
        width: 450px;
        left: 50%;
        transform: translateX(-50%);
        position: relative;
        display: grid;
        gap: 0.5rem;
        padding: 1rem;
        height: 400px;
        overflow: hidden;
        overflow-y: auto;
        scrollbar-width: none;        
    }

    .page .listOfViewers::-webkit-scrollbar {
        width: 6px;
    }

    .page .listOfViewers::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .page .listOfViewers::-webkit-scrollbar-thumb {
        background: var(--primary-color-light-blue);
        border-radius: 15px;
    }

    .page .listOfViewers::-webkit-scrollbar-thumb:hover {
        background: #bcd4e6;
    }


    .listOfViewers .eachViewer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .eachViewer .eachViewerContents {
        display: flex;
        align-items: center;
    }

    .eachViewerContents img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right:  0.2rem;
        cursor: pointer;
    }

    .eachViewerContents span {
        margin: 0 0.2rem;
    }

    .eachViewerContents span h5 {
        cursor: pointer;
    }

    .eachViewerContents span p {
        line-height: 20px;
        cursor: pointer;
        font-size: 15px;
    }

    .eachViewer .eachViewerVbtn {
        background: var(--secondary-color-blue);
        padding: 0.4rem 1.2rem;
        color: var(--bar-color-light);
        border-radius: 12px;
        cursor: pointer;
        transition: var(--tran-05);
        border: 1px solid var(--body-color-grey);
    }

    .eachViewer .eachViewerVbtn:hover {
        background: var(--bar-color-light);
        color: var(--tertiary-color-dark-blue);
        border: 1px solid var(--non-color-dark);
    }
 











</style>