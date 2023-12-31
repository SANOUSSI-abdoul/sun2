<?php
include 'entete.php';
?>
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Commande</div>
                <div class="number"><?php echo getAllCommande()['nbre'] ?></div>
                <div class="indicator">
                    <i class="bx bx-up-arrow-alt"></i>
                    <span class="text">Depuis hier</span>
                </div>
            </div>
            <i class="bx bx-cart-alt cart"></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Sortie</div>
                <div class="number"><?php echo getAllsortie()['nbre'] ?></div>
                <div class="indicator">
                    <i class="bx bx-up-arrow-alt"></i>
                    <span class="text">Depuis hier</span>
                </div>
            </div>
            <i class="bx bxs-cart-add cart two"></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Article</div>
                <div class="number"><?php echo getAllArticle()['nbre'] ?></div>
                <div class="indicator">
                    <i class="bx bx-up-arrow-alt"></i>
                    <span class="text">Depuis hier</span>
                </div>
            </div>
            <i class="bx bx-cart cart three"></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">CA</div>
                <div class="number"><?php echo number_format(getCA()['prix'], 0, ',', ' ') ?></div>
                <div class="indicator">
                    <i class="bx bx-down-arrow-alt down"></i>
                    <span class="text">Aujourd'hui</span>
                </div>
            </div>
            <i class="bx bxs-cart-download cart four"></i>
        </div>
    </div>

    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Couts Sorties</div>
            <?php
            $sorties = getLastsortie();
            ?>
            <div class="sales-details">
                <ul class="details">
                    <li class="topic">Date</li>
                    <?php
                    foreach ($sorties as $key => $value) {
                    ?>
                        <li><a href="#"><?php echo date('d M Y', strtotime($value['date_sortie'])) ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="details">
                    <li class="topic">Recepteur</li>
                    <?php
                    foreach ($sorties as $key => $value) {
                    ?>
                        <li><a href="#"><?php echo $value['nom'] . " " . $value['prenom'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="details">
                    <li class="topic">Article</li>
                    <?php
                    foreach ($sorties as $key => $value) {
                    ?>
                        <li><a href="#"><?php echo $value['nom_article'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="details">
                    <li class="topic">Prix</li>
                    <?php
                    foreach ($sorties as $key => $value) {
                    ?>
                        <li><a href="#"><?php echo number_format($value['prix'], 0, ",", " ") . " F" ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="button">
                <a href="sortie.php">Voir Tout</a>
            </div> 
        </div>
        <div class="top-sales box">
            <div class="title">Article le plus sollicité</div>
            <ul class="top-sales-details">
                <?php
                $article = getMostsortie();
                foreach ($article as $key => $value) {
                ?>
                    <li>
                        <a href="#">
                            <!--<img src="images/sunglasses.jpg" alt="">-->
                            <span class="product"><?php echo $value['nom_article'] ?></span>
                        </a>
                        <span class="price"><?php echo number_format($value['prix'], 0, ",", " ") . " F" ?></span>
                    </li>
                <?php
                }
                ?>
                
            </ul>
        </div>
    </div>
</div>
</section>

<?php
include 'pied.php';
?>