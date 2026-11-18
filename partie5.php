
<?php

class Utilisateur {

    // Attributs
    public string $nom;
    public int $age;
    private string $motDePasse;


    public function __construct(
        string $nom,
        int $age,
        string $motDePasse
    ) {
        $this->nom = $nom;
        $this->age = $age;
        $this->motDePasse = $motDePasse;
    }

    
    public function __serialize(): array {

        return [
            'nom' => $this->nom,
            'age' => $this->age

            // Le mot de passe est exclu
        ];
    }



    public function __unserialize(array $data): void {

        $this->nom = $data['nom'];
        $this->age = $data['age'];

        // Réinitialiser le mot de passe
        $this->motDePasse = "";
    }

}

$u = new Utilisateur("Alice", 25, "secret123");

// Sérialisation
$serialise = serialize($u);

echo "Sérialisé : " . $serialise . PHP_EOL;

// Désérialisation
$restaure = unserialize($serialise);

echo PHP_EOL . "Objet restauré :" . PHP_EOL;

var_dump($restaure);

// Tester JSON
echo PHP_EOL . "===== JSON =====" . PHP_EOL;

$json = json_encode($u);

echo $json . PHP_EOL;

$data = json_decode($json, true);

var_dump($data);

