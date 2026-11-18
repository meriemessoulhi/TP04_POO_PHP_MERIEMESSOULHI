
<?php

class Personne {

    // Attributs privés
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    // =================================
    // __set : modifier une propriété
    // =================================

    public function __set(string $name, mixed $value): void {

        if (property_exists($this, $name)) {

            // Validation du nom
            if ($name === "nom") {

                if (!is_string($value) || strlen($value) < 2) {
                    throw new InvalidArgumentException(
                        "Le nom doit contenir au moins 2 caractères."
                    );
                }
            }

            $this->$name = $value;

        } else {
            echo "Propriété $name inexistante" . PHP_EOL;
        }
    }

    // =================================
    // __get : lire une propriété
    // =================================

    public function __get(string $name): mixed {

        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }

    // =================================
    // __isset : vérifier une propriété
    // =================================

    public function __isset(string $name): bool {

        if (property_exists($this, $name)) {
            return isset($this->$name);
        }

        return false;
    }

    // =================================
    // __unset : vider une propriété
    // =================================

    public function __unset(string $name): void {

        if (property_exists($this, $name)) {
            $this->$name = "";
        }
    }
}


// PROGRAMME DE TEST


$p = new Personne();

// Modifier le nom : __set
$p->nom = "Hachimi";

// Lire le nom : __get
echo $p->nom . PHP_EOL;

// Vérifier le nom : __isset
var_dump(isset($p->nom));

// Vider le nom : __unset
unset($p->nom);

// Vérifier après unset
var_dump(isset($p->nom));

// Tester une propriété inexistante
$p->telephone = "0600000000";


 