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
        <!--ANIMATE CSS LINK (REQUIRED)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    </head>
    
    <body>
       <header class="d-none d-lg-block custom-header">
            <div class="header-content">
                <a href="/" class="logo">Savor Germany</a>
                <ul>
            <?php foreach ($menuItems as $menuName => $menuLink): ?>
                <li>
                    <?php if (is_array($menuLink)): ?>
                        <a href="#"><?php echo $menuName; ?></a>
                        <ul class="submenu">
                            <?php foreach ($menuLink as $submenuName => $submenuLink): ?>
                                <li><a href="<?php echo $submenuLink; ?>"><?php echo $submenuName; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <a href="<?php echo $menuLink; ?>"><?php echo $menuName; ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
            </div>
        </header>

        <!-- New Navbar -->
        <div id="mySidenav" class="sidenav">
            <img src="/assets/images/savor-germany-icon.png" alt="savor germany" style="width:120px; padding-left:20px;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php renderSidenavMenu($menuItems); ?>
        </div>

        <span style="margin:10px;font-size:30px;cursor:pointer;" onclick="openNav()" class="mobile-menu"> 
            <div class="mobile-title" style="padding: 0px 10px; display: flex; font-size: 22px; color: black; text-align: left;">
                Savor Germany
            </div> 
            <div class="hamburger-menu" style="padding-left: 150px; display: flex;">
                <img src="/assets/images/hamburger-icon.svg" alt="hamburger icon" style="width: 40px;"> 
            </div>
        </span>
        <!-- End New Navbar -->