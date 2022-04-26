<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- NEW -->
    <title>
        Welcome Page - Intro to Computer Science
    </title>
    <meta charset="utf-8" http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <!-- import the webpage's stylesheet -->
    <link rel = "stylesheet" href = "/pages/home/hStyle.css"/>
    <link rel = "stylesheet" href = "/pages/home/SideBar.css"/>
    <link rel = "stylesheet" href = "/pages/home/BodyInfo.css"/>
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

    <!--  -->
    <div id="SidePanel" class="sidepanel" style = "width:7px; bottom:0;">
        <div class = "PanelDoor" onclick = "sideBarFunctionality(); scrollLink();"></div>
        <a href = "#First">Welcome</a>
        <a href = "#List" >General Topics</a>
    </div>
    <main class = "Info">
        <p class = "important" id = "First">Welcome</p>
        <!-- Main Body Content -->
        <div class = "textBody">
            <br>

            <p>I welcome everyone to <i>codinghelp.org</i>
            !! Whether you came here accidentally or not, I sincerely hope you enjoy the most out of your stay. This is a place where you can learn programming languages and concepts from my direct experience: No sugar coating concepts.
            </p>

            <p>
                I will be explaining concepts in as much detail as I can to help fill in those annoying blank spaces in your mind: Everything from the most beginner concepts to advanced concepts. The concepts and languages will be interconnected so there will be plenty of ways all of you readers can become more aware of where these concepts can be applicable. 
            </p>

            <p>
                And please be aware that I am only human, so if there is something that I have missed or even things to add onto or change then I would love it if you email me or contact me on my social media platforms.
            </p>

            <p>
                A general list of topics that I will be going over:
            </p>
            <div id = "List">
                <li>
                    What is Computer Science?
                </li>
                <li>
                    Programming Language Theory 
                </li>
                <li>
                    Computational Mathematics
                </li>
                <li>
                    Data Structures
                </li>
                <li>
                    Algorithms
                </li>
                <li>
                    Computer Architecture
                </li>
                <li>
                    Networking
                </li>
                <li>
                    Computer Graphics
                </li>
                <li>
                    Parallel Computing
                </li>
                <li>
                    Concurrency
                </li>
                <li>
                    Database Structures
                </li>
            </div>
            <br>
            <hr width = "60%">
            <br>
            <!-- Insert Image -->
            <p>
                As it is incredibly hard to condense such a massive subject while also giving comprehensive knowledge, the website will be split into a couple of different parts. The main parts are basic for any website you would see; which includes things like a login and multiple different pages that you are able to traverse. However there are additional parts such as built-in coding snippets that will let you test code on-the-go.
            </p>
            
            <p>
                There will also be sub-topics since it is so comprehensive, and the programming language examples used throughout will not be limited due to the nature of what computer science is and how all programming languages interconnect and the advantages and disadvantages for each.
            </p>
            
            <br>
        </div>
    </main>

    <hr width = "100%">
    <!-- -->
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