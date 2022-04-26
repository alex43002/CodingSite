<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        Programming Languages
    </title>
    <meta charset="utf-8" http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <!-- import the webpage's stylesheet -->
    <link rel = "stylesheet" href = "/pages/home/hStyle.css"/>
    <link rel = "stylesheet" href = "/pages/languages/BodyInfo.css"/>
    <link rel = "stylesheet" href = "/pages/home/FooterInfo.css"/>
    <script type="text/javascript" src="/pages/home/LinkModule.js"></script>
</head>

<body>
<div>
        <!-- Top Menu -->
        <div style = float:left;>
	        <a id = "TopRef" href = "home">Home</a>
	        <a id = "TopRef" href = "languages">Languages</a>
            <a id = "TopRef" href = "career">Career Specializations</a>
            <a id = "TopRef" href = "help">Help</a>
        </div>
        <div style = float:right>
	        <a id = "TopRef" class = "loginButton" onclick="document.getElementById('login').style.display = 'block'" >Login Spacer</a>
            
            <!-- Login form -->
            <div id = "login" class = "modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">
                            &times;
                        </span>
                        <!-- Potential Image here -->
                    </div>

                    <div class="container">
                        <label for="uname">
                            <b>
                                Username
                            </b>
                        </label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw">
                            <b>
                                Password
                            </b>
                        </label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
        
                        <button type="submit">
                            Login
                        </button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> 
                                Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">
                            Cancel
                        </button>
                        <span class="psw">     
                            <a href="#">
                                Forgot Password?
                            </a>
                        </span>
                    </div>
                </form>
            </div>
            <!-- -->
        </div>
        <!-- End of top menu -->
    </div>

    <hr width = "100%">

    <!-- Body -->


    <div style = "height:1200px;"></div>

    <!-- End Body-->
    <hr width = "100%">
    <!-- Footer -->
    <footer class = "Referrals">
        <!-- Bottom Disclaimer -->
        <div id = "left">
            <li><a href = "creator">About Me</a></li>
        </div>
        <div id = "right">
            <li>
                <a href = "mailto:codinghelp.org?subject = Questions or Feedback">Email Me</a>
            </li>
            <li>
                <a href = "https://www.instagram.com/codinghelpforeveryone/">Instagram</a>
            </li>
            <li>
                <a href = "https://github.com/alex43002?tab=repositories">Github</a>
            </li>
            <li>
                <a href = "https://hub.docker.com/u/ajd27">Docker</a>
            </li>
        </div>
    </footer>
</body>