<?php
include 'entete.php';

if (!empty($_GET['id'])) {
    $vente = getsortie($_GET['id']);
}

?>
<div class="home-content">


    <button class="hidden-print" id="btnPrint" style="position: relative; left: 45%;"> <i class='bx bx-printer'></i> Imprimer</button>


    <div class="page">
        <div class="cote-a-cote">
            <h2>SC-Stock</h2>
            <div>
                <p>Reçu N° #: <?= $sortie['id'] ?> </p>
                <p>Date: <?= date('d/m/Y H:i:s', strtotime($sortie['date_sortie'])) ?> </p>
            </div>
        </div>

        <div class="cote-a-cote" style="width: 50%;">
            <p>Nom :</p>
            <p><?= $sortie['nom'] . " " . $sortie['prenom'] ?></p>
        </div>
        <div class="cote-a-cote" style="width: 50%;">
            <p>Tel :</p>
            <p><?= $sortie['telephone'] ?></p>
        </div>
        <div class="cote-a-cote" style="width: 50%;">
            <p>Adresse :</p>
            <p><?= $sortie['adresse'] ?></p>
        </div>
        
        <br>
        
        <table class="mtable">
            <tr>
                <th>Designation</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Prix total</th>
            </tr>

            <tr>
                <td><?= $sortie['nom_article'] ?></td>
                <td><?= $sortie['quantite'] ?></td>
                <td><?= $sortie['prix_unitaire'] ?></td>
                <td><?= $sortie['prix'] ?></td>
            </tr>

        </table>
    </div>


</div>
</section>

<?php
include 'pied.php';
?>
<script>

    var btnPrint = document.querySelector('#btnPrint');
    btnPrint.addEventListener("click", () => {
        window.print();
    });

    function setPrix() {
        var article = document.querySelector('#id_article');
        var quantite = document.querySelector('#quantite');
        var prix = document.querySelector('#prix');

        var prixUnitaire = article.options[article.selectedIndex].getAttribute('data-prix');

        prix.value = Number(quantite.value) * Number(prixUnitaire);
    }
  
    
</script>