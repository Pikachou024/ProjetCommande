<?php

$idCommande = intval($_GET['id']);

$commandeModel = new CommandeModel();
$articlesCommande = $commandeModel -> getOneCommandeDetails($idCommande);

$dateCommande = dateFr(date('D d M Y', strtotime($articlesCommande[0]['date_commande'])));
$dateLivraison = dateFr(date('D d M Y', strtotime($articlesCommande[0]['date_livraison'])));
//dump($articlesCommande[0]['date_commande']);
$montantCommande = $articlesCommande[0]['montant'];
$client = $commandeModel->getClientByIdCommande($idCommande);

$title = "Commande N° ".$idCommande ;
$template = "commande_details";
include "../templates/base_admin.phtml";
