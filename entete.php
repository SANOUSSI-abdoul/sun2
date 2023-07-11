<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>
        <?php
        echo ucfirst(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));
        ?>
    </title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="sidebar hidden-print">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus"></i>
            <span class="logo_name">SC-INVENTORY</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="dashboard.php" ? "active" : "" ?> ">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Menu</span>
                </a>
            </li>
            <li>
                <a href="sortie.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="sortie.php" ? "active" : "" ?> ">
                    <i class='bx bx-shopping-bag'></i>
                    <span class="links_name">sortie</span>
                </a>
            </li>
            <li>
                <a href="recepteur.php" class="<?php echo basename($_SERVER['PHP_SELF'])=="recepteur.php" ? "active" : "" ?> ">
                    <i class="bx bx-user"></i>
                    <span class="links_name">recepteur</span>
                </a>
            </li>
            <li>
                <a href="article.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="article.php" ? "active" : "" ?> ">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Article</span>
                </a>
            </li>
            <li>
                <a href="fournisseur.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="fournisseur.php" ? "active" : "" ?> ">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Fournisseur</span>
                </a>
            </li>
            <li>
                <a href="commande.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="commande.php" ? "active" : "" ?> ">
                    <i class="bx bx-book-alt"></i>
                    <span class="links_name">Commandes</span>
                </a>
            </li>
            <li>
                <a href="categorie.php"  class="<?php echo basename($_SERVER['PHP_SELF'])=="categorie.php" ? "active" : "" ?> ">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Catégorie</span>
                </a>
            </li>
         
            <li>
                <a href="stock.php">
                    <i class="bx bx-coin-stack"></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
          <!--  <li>
                <a href="#">
                    <i class="bx bx-book-alt"></i>
                    <span class="links_name">Tout les commmandes</span>
                </a>
            </li> -->
            <li>
                <a href="utilisateur.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Utilisateurs</span>
                </a>
            </li>
            <!-- <li>
          <a href="#">
            <i class="bx bx-message" ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart" ></i>
            <span class="links_name">Fav</span>
          </a>
        </li> -->
            <li>
                <a href="configuration.php">
                    <i class="bx bx-cog"></i>
                    <span class="">Configuration</span>
                </a>
            </li>
            <li class="log_out">
                <a href="deconnexion.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav class="hidden-print">
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="Menu">
                    <?php
                    echo ucfirst(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));
                    ?>
                </span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Recherche..." />
                <i class="bx bx-search"></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name"><?php echo $utilisateur; ?> </span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>