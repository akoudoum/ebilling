CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(11) NOT NULL auto_increment,
  `nom` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL default '1',
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  `profil` int(11) NOT NULL,
  `numfacture` int(11) NOT NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
INSERT INTO `admins` (`id_admin`, `nom`, `email`, `passwd`, `active`, `date_add`, `date_upd`, `profil`, `numfacture`) VALUES
(2, 'user', 'admin@admin.com', 'a1c8254db10147adb4b4b768275ab33c', 1, '2011-07-09 16:25:42', '2011-07-09 16:25:47', 1, 0);
CREATE TABLE IF NOT EXISTS `adresse_facturation` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `f_nom` varchar(50) default NULL,
  `f_prenom` varchar(50) default NULL,
  `f_email` varchar(50) default NULL,
  `f_adresse_ligne1` varchar(150) default NULL,
  `f_adresse_ligne2` varchar(150) default NULL,
  `f_ville` varchar(50) default NULL,
  `f_pays` varchar(50) default NULL,
  `f_code_postal` varchar(10) default NULL,
  `f_telephone1` varchar(20) default NULL,
  `f_telephone2` varchar(20) default NULL,
  `id_facture` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `adresse_livraison` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `l_nom` varchar(50) default NULL,
  `l_prenom` varchar(50) default NULL,
  `l_email` varchar(50) default NULL,
  `l_adresse_ligne1` varchar(150) default NULL,
  `l_adresse_ligne2` varchar(150) default NULL,
  `l_ville` varchar(50) default NULL,
  `l_pays` varchar(50) default NULL,
  `l_code_postal` varchar(10) default NULL,
  `l_telephone1` varchar(20) default NULL,
  `l_telephone2` varchar(20) default NULL,
  `id_facture` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `apiebay` (
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `label` varchar(50) NOT NULL,
  `desc` varchar(60) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `client_ebay` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `id_client_ebay` varchar(50) default NULL,
  `nom` varchar(50) default NULL,
  `id_facture` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `elements_facture` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `id_ebay_element` varchar(20) default NULL,
  `titre` varchar(200) default NULL,
  `etat` varchar(15) default NULL,
  `quantite` bigint(20) default NULL,
  `prix_unitaire` double default NULL,
  `id_facture` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `entreprise_facturation` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `raison_sociale` varchar(150) default NULL,
  `email` varchar(50) default NULL,
  `adresse_ligne1` varchar(150) default NULL,
  `adresse_ligne2` varchar(150) default NULL,
  `ville` varchar(50) default NULL,
  `pays` varchar(50) default NULL,
  `code_postal` varchar(10) default NULL,
  `telephone1` varchar(20) default NULL,
  `telephone2` varchar(20) default NULL,
  `fax` varchar(20) NOT NULL,
  `appliquertva` int(1) NOT NULL,
  `firstnumfacture` int(11) NOT NULL,
  `rcs` varchar(50) NOT NULL,
  `numsiret` varchar(50) NOT NULL,
  `tva` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
INSERT INTO `entreprise_facturation` (`id`, `raison_sociale`, `email`, `adresse_ligne1`, `adresse_ligne2`, `ville`, `pays`, `code_postal`, `telephone1`, `telephone2`, `fax`, `appliquertva`, `firstnumfacture`, `rcs`, `numsiret`, `tva`) VALUES
(1, 'Test Expension', 'nom@domaine.com', '57 Rue nom, Elkridge', NULL, 'Toulouse', 'Etats Unis', '21075', '4433748688', '4433748688', '', 1, 100, '243GBE3', '2847092', 0);
CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `id_ebay` varchar(255) default NULL,
  `montant` float default NULL,
  `devise` varchar(10) NOT NULL,
  `mode_paiement` varchar(50) default NULL,
  `id_trasaction` varchar(50) default NULL,
  `date_commande` datetime default NULL,
  `date_facturation` datetime default NULL,
  `date_paiment` datetime default NULL,
  `legande` text,
  `numfacture` int(11) NOT NULL,
  `id_facture_online` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL auto_increment,
  `nom` varchar(50) NOT NULL,
  `droits` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
INSERT INTO `profil` (`id_profil`, `nom`, `droits`) VALUES(1, 'Super Administrateur', '1||2||3||4||5||6||7||8||9||10||16||17||18||19||11||12||13||14||15'),(2, 'Moderateur', '1||2||4||7||8');
CREATE TABLE IF NOT EXISTS `service_livraison` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nom_livreur` varchar(100) default NULL,
  `montant_livraison` double default NULL,
  `devise` varchar(6) default NULL,
  `date_livraison` datetime default NULL,
  `id_facture` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
ALTER TABLE `service_livraison`
  ADD CONSTRAINT `service_livraison_ibfk_1` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id`) ON DELETE CASCADE;
INSERT INTO `apiebay` (`name`, `value`, `label`, `desc`, `type`) VALUES
('compat-level', '451', '', '', 2),
('dev-key-test', '', 'Dev key sandbox', '', 1),
('app-key-test', '', 'App key sandbox', '', 1),
('cert-id-test', '', 'Cert id sandbox', '', 1),
('dev-key-prod', '', 'Dev key production', '', 0),
('app-key-prod', '', 'App key production', '', 0),
('cert-id-prod', '', 'Cert id production', '', 0),
('site-id', '77', '', '', 2),
('app-mode', '1', 'Mode d''application', '1 pour sandbox, 0 pour production', 2),
('use-http-compression', '1', '', '', 2),
('token-pickup-file', '', '', '', 2),
('token-mode', '1', '', '', 2),
('token', '', 'Token ebay', '', 3)
  