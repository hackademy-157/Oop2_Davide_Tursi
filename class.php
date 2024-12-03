<?php

// Crea un file chiamato class.php e crea una classe astratta Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
// Category
// -- Attualita'
// -- Sport
// -- Gossip
// -- Storia
// Tutte le classi dovranno implementare il metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.
// Pushare su GitHub con nome php_12_nome_cognome

abstract class Categoria{

    abstract public function getMyCategory();
}

class Attualita extends Categoria{

    public function getMyCategory(){
        echo "Categoria: Attualità\n";
    }

}
class Sport extends Categoria{

    public function getMyCategory(){
        echo "Categoria: Sport\n";
    }

}
class Gossip extends Categoria{

    public function getMyCategory(){
        echo "Categoria: Gossip\n";
    }

}
class Storia extends Categoria{

    public function getMyCategory(){
        echo "Categoria: Storia\n";
    }

}

$category= new Attualita;
$category->getMyCategory();

