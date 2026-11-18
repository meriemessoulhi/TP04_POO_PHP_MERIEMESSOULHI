
<?php

// =====================================
// 2.1 Constructeur avec valeurs par défaut
// =====================================

class Voiture {

    public function __construct(
        public string $couleur = "Blanche",
        public int $vitesse = 0
    ) {
        echo "Voiture créée." . PHP_EOL;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

echo "EXERCIC" . PHP_EOL;

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);
$v3 = new Voiture("Noire");

$v1->afficher();
$v2->afficher();
$v3->afficher();

//  new Voiture(120) provoque TypeError
// car le premier paramètre attend une chaîne (string).


// =====================================
// 2.2 Constructeur de la classe Personne
// =====================================

class Personne {

    public string $nom;
    public string $prenom;

    public function __construct(
        string $nom = "",
        string $prenom = ""
    ) {
        echo "Création " . __CLASS__ . PHP_EOL;

        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode statique de fabrique
    public static function depuisTableau(array $data): Personne {
        return new Personne(
            $data["nom"],
            $data["prenom"]
        );
    }

    // Destructeur
    public function __destruct() {
        echo "Détruire " . __CLASS__ . PHP_EOL;
    }
}

echo PHP_EOL . "===== EXERCICE 2.2 =====" . PHP_EOL;

// Création vide
$p1 = new Personne();

// Création avec informations
$p2 = new Personne("Hachimi", "Sara");

// Création depuis un tableau
$data = [
    "nom" => "Alami",
    "prenom" => "Ahmed"
];

$p3 = Personne::depuisTableau($data);

echo $p2->prenom . " " . $p2->nom . PHP_EOL;


// =====================================
// 2.3 Destructeur
// =====================================

echo PHP_EOL . "EXERCICE 2.3" . PHP_EOL;

$a = new Voiture("Blanche");
$b = new Voiture("Rouge");

echo "Fin du script." . PHP_EOL;

// Destruction manuelle
unset($a);

echo "Après unset de a." . PHP_EOL;

