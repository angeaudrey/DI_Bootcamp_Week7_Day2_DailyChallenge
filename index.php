<?php
// Définition de la classe Utilisateur
class User {
  // Declaration des variables avec une portée privée
  private $name;
  private $age;

  // Methode pour modifier le nom 
  public function setName($name) {
    // Utiliser la methode Trim pour supprimer les espaces avant et arrieres
    $name = trim($name);
    // Valider la longueur du nom 
    if (strlen($name) < 3) {
      throw new Exception("The name should be at least 3 characters long");
    }
    // Rendre le champ nom modifiable
    $this -> name = $name;
  }

  // Methode pour rendre le champ age modifiable
  public function setAge($age) {
    // Rendre le champ age de type entier
    $age = (int)$age;
    // Validation et condition du champ age
    if ($age <= 0) {
      throw new Exception("The age cannot be zero or less");
    }
    // Set the age for the user
    $this -> age = $age;
  }

  // Methode pour reccuperer le nom de l'utilisateur
  public function getName() {
    return $this -> name;
  }

  // Methode pour reccuperer l'age de l'utilisateur
  public function getAge() {
    return $this -> age;
  }
}

// Methode pour tester la class User
function test() {
// Un tableau des données pour différents utilisateurs
  $dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
  );

  // Faire une boucle dans le tableau qui contient les données des utilisateurs
  foreach ($dataForUsers as $data) {
    try {
// Définir le nom et l'âge de l'utilisateur

      $user = new User();
      $user->setName($data[0]);
      $user->setAge($data[1]);
      // Affichage des informations de l'utilisateur
      echo $user->getName() . " is " . $user->getAge() . " years old." . "<br>";
    } catch (Exception $e) {
    // Afficher le message d'erreur et le nom du fichier S'il y a une exception, 
      echo "Error: " . $e->getMessage() . " in the file: " . $e->getFile() . "<br>";
    }
  }
}

//Appelle de la  methode test
test();