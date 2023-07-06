<?php

// Démarrer la session


// Vérifier si le panier existe dans la session, sinon le créer
if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = array();
}

// Ajouter un produit au panier
function ajouterProduitAuPanier($produit) {
  // Ajouter le produit à la session
  $idP = $produit['id'];

  if(isset($_SESSION['panier']) && is_array($_SESSION['panier'])){
    if (array_key_exists($idP, $_SESSION['panier'])) {
      // Product exists in cart so just update the quanity
      $_SESSION['panier'][$idP] += $produit['qte'];
    } else {
      // Product is not in cart so add it
      $_SESSION['panier'][] = $produit;
    }
  }else{
      $_SESSION['panier'][] = $produit;
  }
  
}

// Modifier un produit du panier
function updateProduitDuPanier($qte,$id) {
  // Vérifier si l'index existe dans le panier
  if (isset($_SESSION['panier'][$id])) {
    // Modifier la quantite du produit du panier
    $_SESSION['panier'][$id] += $qte;
  }
}

// Modifier un produit du panier
function modifierProduitDuPanier($qte,$total,$index) {
  // Vérifier si l'index existe dans le panier
  if (isset($_SESSION['panier'][$index])) {
    // Modifier la quantite du produit du panier
    $_SESSION['panier'][$index]['qte'] = $qte;
    $_SESSION['panier'][$index]['tot'] = $total;
  }
}

// Supprimer un produit du panier
function supprimerProduitDuPanier($index) {
  // Vérifier si l'index existe dans le panier
  if (isset($_SESSION['panier'][$index])) {
    // Supprimer le produit du panier
    unset($_SESSION['panier'][$index]);
  }
}

// Vider le panier
function viderPanier() {
  // Supprimer le panier de la session
  unset($_SESSION['panier']);
}

// Obtenir le contenu du panier
function obtenirContenuPanier() {
  return $_SESSION['panier'];
}
