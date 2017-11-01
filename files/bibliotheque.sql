

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `auteur` varchar(150) NOT NULL,
  `annee` varchar(150) NOT NULL,
  `genre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `bibliotheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

