<?php

function saveProduct(){
    global $products;
    do {
        $errors = [];
        $libelle = saisie("Entrez le libellé: ");
        required($libelle,$errors,"Le libellé est obligatoire","libele");
        unique($products,$libelle,$errors,"Ce libellé existe déjà","libele");
        $prix = saisieInt("Entrez le prix: ");
        isPositiveNumber($prix,$errors,"Le prix doit être un nombre positif","prix");
        $quantite = saisieInt("Entrez la quantité: ");  
        isPositiveNumber($quantite,$errors,"La quantité doit être un nombre positif","quantite");
        showError($errors);
    } while (count($errors)!= 0);
    $newProduct=[
        "ref"=>genererReference($products),
        "libele" => $libelle,
        "prix" => $prix,
        "quantite" => $quantite
    ];
    $products[] = $newProduct;
}

function archiverProduit (): void {
    global $productsArchived , $products;
    
    $value = saisie ("Veuillez renseigner le libellé: \n");
    $indexArchived = getProductByLibele($products, $value);
        if ($indexArchived !== -1){
            $productArchived = supprimerProduit($indexArchived, $products);
            $productsArchived[] = $productArchived;
            echo "Produit archiver avec succee";
            
        } else {
            echo "Produit non trouvé";
        }
        
}