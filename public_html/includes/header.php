<?php 
include __DIR__ . '/../config/config.php';
include __DIR__ . '/../config/classes.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title><?php echo $title ?? "$website"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description ?? $defaultDescription; ?>">
        <meta name="keywords" content="<?php echo $keywords ?? $defaultKeywords; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
        <link rel="icon" type="image/png" href="/assets/images/favicon.png">
        <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
        <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
 
        <script>
  (function(w, d, t, h, s, n) {
    w.FlodeskObject = n;
    var fn = function() {
      (w[n].q = w[n].q || []).push(arguments);
    };
    w[n] = w[n] || fn;
    var f = d.getElementsByTagName(t)[0];
    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
    var sm = d.createElement(t);
    sm.async = true;
    sm.type = 'module';
    sm.src = h + s + '.mjs' + v;
    f.parentNode.insertBefore(sm, f);
    var sn = d.createElement(t);
    sn.async = true;
    sn.noModule = true;
    sn.src = h + s + '.js' + v;
    f.parentNode.insertBefore(sn, f);
  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
</script>

    </head>
    
    <body>
    <header class="d-none d-lg-block custom-header">
        <div class="header-content">
                <a href="https://recipemeister.com" class="logo">Savor Germany</a>
                <div style="width:250px;"></div>
                    <div class="dropdown">
                        <div class="dropbtn"><a href="https://recipemeister.com" class="menu-items">2025 Tours</a></div>
                        <div class="dropdown-content">
                            <a href="/bavaria-franconia-2025" class="dropdown-menu-items">Bavaria & Franconia 2025</a>
                            <a href="/oktoberfest-2025" class="dropdown-menu-items">Oktoberfest Munich 2025</a>
                            <a href="/oktoberfest-beyond-2025" class="dropdown-menu-items">Oktoberfest & Beyond 2025</a>
                        </div>
                    </div>
                <a href="/gallery" class="menu-items">Gallery</a>
                <a href="/your-hosts" class="menu-items">Your Hosts</a>
                <a href="/contact-us" class="menu-items">Contact</a>
        </div>
            
           
    </header>

        
            <!--Mobile Navbar-->
        <div id="mySidenav" class="sidenav">
                <img src="/assets/images/savor-germany-icon.png" alt="savor germany" style="width:120px; padding-left:20px;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="container mobile-menu-box">
                            <ul class="mobile-menu-list">
                                <li>
                                    <a href="/index">Home</a>
                                </li>
                                <li class="dropdown-mobile">
                                    <a aria-expanded="false" data-toggle="collapse" data-target="#li-About">2025 Tours <span class="caret"></span></a>
                                    <ul class="dropdown-mobile-menu dropdown-mobile-intial level-1 list-1 panel-collapse collapse" id="li-About">
                                        <li>
                                            <a href="/bavaria-franconia-2025">Bavaria & Franconia</a>
                                        </li>
                                        <li>
                                        <a href="/oktoberfest-2025">Munich Oktoberfest</a>
                                    </li>
                                    <li>
                                        <a href="/oktoberfest-beyone-2025">Oktoberfest & Beyond</a>
                                    </li>
                                    </ul>
                                </li>
                            
                                <li>
                                    <a href="/gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="/about-us">Who We Are</a>
                                </li>
                                <li>
                                    <a href="/contact-us">Contact Us</a>
                                </li>
                            </ul>
                    </div>
        </div>

              <span id="mobile-menu-toggle" style="margin:10px;font-size:30px;cursor:pointer;" onclick="openNav()" class="mobile-menu"> 
                <div class="mobile-title" style="padding: 0px 10px;display:flex;;font-size:22px;color:black;text-align:left;">Savor Germany</div> 
                <div class="hamburger-menu" style="padding-left:150px;display:flex;"><img src="/assets/images/hamburger-icon.svg" alt="hamburger icon" style="width:40px;"> </div>
            </span>
    
            <button onclick="topFunction()" id="myBtn" title="Go to top">
    <img src="/assets/images/angle-up-solid.png" alt="Go to top" id="angle-up" />
</button>
           
            
