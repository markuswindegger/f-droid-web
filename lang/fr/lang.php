<?php
include_once(LANG.DIRECTORY_SEPARATOR.'languages.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'categories.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'licenses.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'permissions.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'afeatures.php');
$lang = array(
	'iface' => array( //{{{
		'language' => 'Langage',
		'version' => 'Version',
		'added' => 'Ajouté le',
		'size' => 'Taille',
		'desc' => 'Description',
		'license' => 'Licences',
		'license_list' => 'Liste des Licences',
		'categories' => 'Catégories',
		'categories_list' => 'Liste des catégories',
		'reset' => 'Réinitialiser',
		'form_reset' => 'Réinitialiser la recherche',
		'updated' => 'Modifié le',
		'summary' => 'Abstract',
		'permissions' => 'Permissions',
		'download' => 'Télécharger',
		'antifeatures' => 'Caractéristiques négatives',
		'donate' => 'Donnez',
		'bitcoin' => 'Bitcoin',
		'flattr' => 'Flattr',
		'hash' => 'Hash',
		'requirements' => 'Exigences',
		'alt_cat_link' => 'Choisissez une application de la catégorie',
		'all_categories' => 'Toutes les catégories',
		'alt_lic_link' => 'Choisissez une application avec la licence',
		'all_licenses' => 'Toutes les licences',
		'word_search' => 'Nom / abstract / description',
		'form_val' => 'Chercher',
		'form_field' => 'Valeur à chercher',
		'menu' => 'Menu',
		'sdkver' => 'SDK',
		'share' => 'Partager le contenu avec',
		'page' => 'Pages',
		'tracker' => 'Suivit',
		'web' => 'Site web',
		'sources' => 'Code source',
		'go_to_page' => 'Aller à la page',
		'back' => 'Retour à la liste',
		'applist' => 'Applications',
		'lastapplist' => 'Dernières applications',
		'ret_menu' => 'Retour au menu',
		'access_applist' => "Accès à la liste des applications",
		'access_appsheet' => "Accès à la fiche de l'application",
		'access_lastapplist' => "Accès à la liste des dernières applications",
		'access_form_val' => "Accès au formulaire de recherche",
		'access_error_mess' => "Accès au message d'erreur",
		'browse_lic' => "Accès au filtre par licence",
		'browse_cat' => "Accès au filtre par catégories",
		'sheet' => 'Visualiser',
		'last_modified' => 'Dernière modification',
		'qrcode_repo' => "Scannez ce QR-Code afin d'installer ce dépot dans votre application f-droid.",
		'nbr_result' => 'Nombre de résultats',
		'no_result' => "Aucune application n'a été trouvée avec les critères que vous avez choisis.",
		'warning_label' => "Mise en garde",
		'warning_msg' => "Attention: le site fonctionne en mode dégradé, toutes les informations ne seront pas disponible. Nous en sommes désolé.",
		'error_label' => 'Erreur',
		'error_message' => "Ooops, ce dépot d'applications est temporairement indisponible. Nous en sommes désolé, veuillez ré-essayer plus tard...",
		'error_message_sheet' => "Ooops, la fiche de l'application demandée n'existe pas..."), //}}}
	'lang' => $languages_list,
	'perms' => $permissions_list,
	'cat' => $categories_list,
	'afeat' => $afeatures_list,
	'lic' => $licenses_list
);
?>
