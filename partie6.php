
<?php


class Animal {

    public function manger(): void {
        echo "Je mange." . PHP_EOL;
    }
}

class Chien extends Animal {

    public function aboyer(): void {
        echo "Wouf !" . PHP_EOL;
    }
}

class Chat extends Animal {

    public function miauler(): void {
        echo "Miaou !" . PHP_EOL;
    }
}

echo "===== 6.1 HERITAGE =====" . PHP_EOL;

$c = new Chien();
$c->manger();
$c->aboyer();

$chat = new Chat();
$chat->manger();
$chat->miauler();



class Personne {

    public function __construct(
        protected string $nom,
        protected string $prenom,
        protected string $dateNaissance
    ) {}

    public function presentation(): string {
        return "Je suis " . $this->nom;
    }

    // Méthode protégée pour les classes filles
    protected function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $naissance->diff($aujourdhui)->y;
    }

    public function __toString(): string {
        return $this->prenom . " " .
               $this->nom . " (" .
               $this->getAge() . " ans)";
    }
}

class Etudiant extends Personne {

    private string $filiere;
    private string $cne;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $filiere,
        string $cne
    ) {
        parent::__construct($nom, $prenom, $dateNaissance);

        $this->filiere = $filiere;
        $this->cne = $cne;
    }

    public function presentation(): string {
        return parent::presentation() .
               ", étudiant en " . $this->filiere;
    }

    // Assesseur
    public function getCne(): string {
        return $this->cne;
    }

    // Redéfinition de __toString()
    public function __toString(): string {
        return parent::__toString() .
               " | CNE : " . $this->cne;
    }
}

echo PHP_EOL . "===== 6.2 parent =====" . PHP_EOL;

$e = new Etudiant(
    "Ahmed",
    "Ali",
    "2002-05-10",
    "Informatique",
    "CNE001"
);

echo $e->presentation() . PHP_EOL;



class Base {

    final public function afficher(): void {
        echo "Méthode finale" . PHP_EOL;
    }
}

final class Outil {

    public const VERSION = "1.0";
}

class Produit {

    public function __construct(
        public readonly string $reference
    ) {}
}

echo PHP_EOL . "===== 6.3 FINAL ET READONLY =====" . PHP_EOL;

$p = new Produit("REF-001");

echo $p->reference . PHP_EOL;

$b = new Base();
$b->afficher();

echo Outil::VERSION . PHP_EOL;

// Création des 5 étudiants

$etudiants = [];

$etudiants[] = new Etudiant(
    "Hachimi", "Sara", "2000-05-14",
    "Informatique", "CNE001"
);

$etudiants[] = new Etudiant(
    "Alami", "Ahmed", "2002-03-20",
    "Gestion", "CNE002"
);

$etudiants[] = new Etudiant(
    "Benali", "Youssef", "2001-07-15",
    "Mathématiques", "CNE003"
);

$etudiants[] = new Etudiant(
    "Amrani", "Salma", "2003-01-10",
    "Informatique", "CNE004"
);

$etudiants[] = new Etudiant(
    "Idrissi", "Omar", "2000-11-25",
    "Réseaux", "CNE005"
);


// Affichage avec foreach

echo PHP_EOL . "===== 6.4 LISTE DES ETUDIANTS =====" . PHP_EOL;

foreach ($etudiants as $e) {
    echo $e . PHP_EOL;
}

