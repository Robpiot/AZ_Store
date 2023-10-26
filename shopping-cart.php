
<!-- Delete Button : beginnin -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    function getProductsFromJson($jsonFilePath) {
        // si le fichier JSON existe
        if (file_exists($jsonFilePath)) {
            // contenu du fichier JSON
            $jsonContents = file_get_contents($jsonFilePath);
            // vérifie si la lecture du fichier a réussi
            if ($jsonContents !== false) {
                // renvoie/décode le contenu JSON en un tableau
                $products = json_decode($jsonContents, true);
                // vérifie si la conversion en tableau a réussi
                if ($products !== null) {
                    return $products; // Retourne le tableau de produits
                }
            }
        }
        // Si quelque chose ne s'est pas déroulé comme prévu, retourne une valeur par défaut (ex: un array vide)
        return array();
    }
    // obtenir les produits depuis JSON
    $products = getProductsFromJson('products.json');
    //$jsonProd = ".AZ_Store/Data/products.json"; // ?cherche les données de .json ?

    session_start();//= démarre une nouvelle session ou reprend une session qui existe
    function ajouterProduitAuPanier($produit) { // ajoute un produit au panier
        if (!isset($_SESSION['panier'])) { //_SESSION = stocke les données qui persistes pendant toute la durée de la visite
            $_SESSION['panier'] = array();
        }
        $_SESSION['panier'][] = $produit;
    }
    //supprime un produit du panier
    function supprimerProduitDuPanier($elem) {
        if (isset($_SESSION['panier'][$elem])) {
            unset($_SESSION['panier'][$elem]);
        }
    }
    //si un produit a été ajouté au panier
    if (isset($_POST['ajouter'])) {
        $nouveauProduit = $_POST['produit'];
        ajouterProduitAuPanier($nouveauProduit);
    }
    //si un produit doit être supprimé du panier
    if (isset($_GET['supprimer'])) {
        $indexAEnlever = $_GET['supprimer'];
        supprimerProduitDuPanier($elemAEnlever);
    }

?>
<!DOCTYPE html>
<html>
    <body>
        <h4>Panier</h4>
        <ul>
            <?php
            if (isset($_SESSION['panier']) && is_array($_SESSION['panier']) && !empty($_SESSION['panier'])) {
                $montantTotal = 0;
                // !empty($_SESSI... =vérifie si la variable de session $_SESSION['panier'] n'est pas vide
                // is_array($_SESS... =vérifie si la variable $_SESSION['panier'] est de type tableau (array)
                foreach ($_SESSION['panier'] as $elem => $produit) { 
                    //accéder aux détails d'un produit précis du panier avec $produit, connaître la clé (ou l'indice) de cet élément dans l'array avec $elem. Pour créer une li des produits dans le panier avec ts les détails
                    $montantTotal += $produit['prix'];
                    echo "<li>{$produit['nom']} - {$produit['prix']} € 
                        <a href='shopping-cart.php?supprimer=$elem'>Supprimer</a></li>";
                }
                echo "<li><strong>Montant total : $montantTotal €</strong></li>";
            } else {
                echo "<li>Le panier est vide.</li>";
            }
            ?>
        </ul>
        <form method="post" action="shopping-cart.php">
            <label>Nom : </label>
            <input type="text" name="products.json[product]" value="" required><!-- required = champ obligatoire -->
            <label>Prix : </label>
            <input type="number" name="products.json[price]" step="1.00" required> <!-- la valeur augmente ou diminue de 0,00 / clic -->
            <input type="submit" name="ajouter" value=" + ">
        </form>
    </body>
</html>


<!-- Delete Button : end -->