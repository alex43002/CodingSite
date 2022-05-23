<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1920, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/language-main-site.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/launchpad-static/launchpad.js"></script>
    <link rel="stylesheet" type="text/css" href="/pages/languages/css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="/pages/languages/css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="language-main-site" />
    <div class="container-center-horizontal">
      <div class="language-main-site animate-enter screen">
        <div class="overlap-group2">
          <div class="footer-group">
            <a href="https://example.com/"><div class="about-me arial-regular-normal-white-16px">About me</div> </a
            ><a href="#header" class="align-self-flex-start">
              <div class="up">
                <div class="overlap-group">
                  <div class="component-6-1"></div>
                  <div class="rectangle-130"></div>
                  <div class="component-1"></div>
                </div></div></a
            ><a href="https://example.com/"><div class="email-me arial-regular-normal-white-16px">Email Me</div> </a
            ><a href="https://example.com/"><div class="instagram arial-regular-normal-white-16px">Instagram</div> </a
            ><a href="https://example.com/"><div class="git-hub arial-regular-normal-white-16px">GitHub</div> </a
            ><a href="https://example.com/"><div class="docker arial-regular-normal-white-16px">Docker</div> </a>
          </div>
          <div class="main-body"></div>
          <img class="image-1" src="/pages/languages/img/image-1-1x-png@1x.png" />
          <div class="language-list-component">
            <div class="menu"></div>
            <div class="languages">Languages</div>
          </div>
          <img class="line-2" src="/pages/languages/img/line-1-1x-png@1x.png" />
          <div class="concept-list-component">
            <div class="menu"></div>
            <div class="languages">Languages</div>
          </div>
        </div>
        <div class="header" id="header">
          <div class="overlap-group1">
            <div class="header-1"></div>
            <img class="line-1" src="/pages/languages/img/line-1-1x-png@1x.png" />
            <a href="https://example.com/"><div class="help arial-regular-normal-white-16px">Help</div> </a
            ><a href="https://example.com/"
              ><div class="specialization arial-regular-normal-white-16px">Specializations</div> </a
            ><a href="https://example.com/"><div class="career arial-regular-normal-white-16px">Career</div> </a
            ><a href="https://example.com/"><div class="languages-1 arial-regular-normal-white-16px">Languages</div> </a
            ><a href="https://example.com/"><div class="place arial-regular-normal-white-16px">Home</div> </a
            ><a href="https://example.com/"><div class="login arial-regular-normal-white-16px">Login</div> </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      function ShowOnScroll() {
        this.toShow = [];
        this.nextEventY = undefined;
      }

      ShowOnScroll.prototype.show = function (e) {
        e.style.display = "";
      };

      ShowOnScroll.prototype.hide = function (e) {
        e.style.display = "none";
      };

      ShowOnScroll.prototype.getTop = function (e) {
        if (e.Top != undefined && e.Top != 0) {
          return e.Top;
        }
        var top = 0;
        var iter = e;
        do {
          top += iter.offsetTop || 0;
          iter = iter.offsetParent;
        } while (iter);
        e.Top = top;
        return top;
      };

      ShowOnScroll.prototype.onScroll = function () {
        var screenBottom = window.pageYOffset + window.innerHeight;
        if (this.nextEventY == undefined || this.nextEventY > screenBottom) {
          return;
        }
        this.nextEventY = undefined;
        for (var i = 0; i < this.toShow.length; i++) {
          var e = this.toShow[i];
          var top = this.getTop(e);
          if (top < screenBottom) {
            this.show(e);
            this.toShow.shift();
            i--;
          } else {
            this.nextEventY = top;
            break;
          }
        }
      };

      ShowOnScroll.prototype.resetScrolling = function () {
        // Clear state
        var screenBottom = window.pageYOffset + window.innerHeight;
        for (var i = 0; i < this.toShow.length; i++) {
          var e = this.toShow[i];
          this.show(e);
        }
        this.toShow = [];
        this.nextEventY == undefined;

        // Collect items
        var itemsToShowOnScroll = Array.prototype.slice.call(document.getElementsByTagName("*"));
        itemsToShowOnScroll = itemsToShowOnScroll.filter(function (e) {
          return e.getAttribute("show-on-scroll") != undefined;
        });
        var getTop = this.getTop;
        itemsToShowOnScroll.sort(function (a, b) {
          return getTop(a) - getTop(b);
        });
        for (var i = 0; i < itemsToShowOnScroll.length; i++) {
          var e = itemsToShowOnScroll[i];
          var top = this.getTop(e);
          if (top < screenBottom) {
            continue;
          }
          this.toShow.push(e);
          this.hide(e);
          this.nextEventY = this.nextEventY != undefined ? this.nextEventY : top;
        }
      };

      ShowOnScroll.prototype.handleEvent = function (e) {
        switch (e.type) {
          case "scroll":
            this.onScroll();
            break;
          case "resize":
            this.resetScrolling();
            break;
        }
      };

      ShowOnScroll.prototype.init = function () {
        this.resetScrolling();
        window.addEventListener("scroll", this);
        window.addEventListener("resize", this);
      };

      // After anima-src
      setTimeout(function () {
        var instShowOnScroll = new ShowOnScroll();
        instShowOnScroll.init();
      }, 250);
    </script>
  </body>
</html>
