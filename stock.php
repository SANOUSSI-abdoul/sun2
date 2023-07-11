<?php
include 'entete.php';
if (!empty($_GET['id'])) {
    $article = getArticle($_GET['id']);
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 20; // Nombre d'articles par page
$offset = ($page - 1) * $limit;
?>


<div class="home-content">
    
        <div class="box">

        </div>
        <div style="display: block;" class="box">
           
            <br>
            <table class="mtable">
                <tr>
                    <th>Nom article</th>
                    <th>Catégorie</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Date fabrication</th>
                    <th>Date expiration</th>
                    <th>Image</th>
                   
                </tr>
                <?php
                $total_articles = 0;
                $total_pages = 0;
                if (!empty($_GET['s'])) {
                    $articles = getArticle(null, $_GET, $limit, $offset);

                    $count = countArticle($_GET);
                    $total_articles = $count['total'];
                    $total_pages = ceil($total_articles / $limit);
                } else {
                    $articles = getArticle(null, null, $limit, $offset);

                    $count = countArticle(null);
                    $total_articles = $count['total'];
                    $total_pages = ceil($total_articles / $limit);
                }



                if (!empty($articles) && is_array($articles)) {
                    foreach ($articles as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['nom_article'] ?></td>
                            <td><?= $value['libelle_categorie'] ?></td>
                            <td><?= $value['quantite'] ?></td>
                            <td><?= $value['prix_unitaire'] ?></td>
                            <td><?= date('d/m/Y H:i:s', strtotime($value['date_fabrication'])) ?></td>
                            <td><?= date('d/m/Y H:i:s', strtotime($value['date_expiration'])) ?></td>
                            <td><img width="100" height="100" src="<?= $value['images'] ?>" alt="<?= $value['nom_article'] ?>"></td>
                          
                        </tr>
                <?php

                    }
                }
                ?>
            </table>
            <?php

            echo "<div class='pagination'>";
            // $active = "";
            // echo "<pre>";
            // var_dump($total_pages, $limit, $total_articles);
            // echo "</pre>";
            // Lien vers la page précédente
            if ($page > 1) {
                $prev_page = $page - 1;
                echo "<a href='?page=$prev_page'>&laquo; Précédent</a> ";
            }
            
            for ($i = 1; $i <= $total_pages; $i++) {
                
                if($i==$page) $active = "active"; else $active = "";
                echo "<a class='$active' href='?page=$i'>$i</a> ";
            }

            

            // Lien vers la page suivante
            if ($page < $total_pages) {
                $next_page = $page + 1;
                echo "<a href='?page=$next_page'>Suivant &raquo;</a> ";
            }
            echo "</div>";

            ?>
        </div>
    

</div>
</section>

<?php
include 'pied.php';
?>