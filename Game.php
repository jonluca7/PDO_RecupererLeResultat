<?php

// Appliquez la notion

// Question

// Créez une classe Game permettant de représenter un jeu stocké en base de données. 
// Cette classe devra avoir une méthode permettant d'afficher la concaténation du nom du jeu et 
// de sa description.

// Puis, en vous aidant des exercices précédents, modifiez la page de la liste des jeux en 
// utilisant une requête préparée qui récupère les jeux. Donnez la possibilité aux utilisateurs 
// de renseigner un nom en paramètre de l'URL pour ne récupérer que les jeux qui commencent par 
// ce nom.

// En cas d'erreur, affichez le message d'erreur.

// Pour rappel, la table permettant de gérer les jeux est sous la forme :

// CREATE TABLE games(
//     id INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(50),
//     description TEXT
// );
// INSERT INTO games(name, description) VALUES 
// ('Super Moria World', 'Parcourez le monde pour jeter une tortue dans la lave !'),
// ('The legend of Zebda', 'Une épopée musicale où vous devez vaincre les forces du mal, M


class Game
{
    private int $id;
    private string $name;
    private string $description;

    public function getFullDescription()
    {
        return $this->name.' '.$this->description.'<br>';
    }

}
?>