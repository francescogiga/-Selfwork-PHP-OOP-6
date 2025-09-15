<?php
// importo le categorie dal file OOP5.php
require_once "OOP5.php";

class Post {
    private $titolo;
    private $categoria; // istanza di Category
    private $tag;

    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getCategoria() {
        return $this->categoria->getMyCategory();
    }

    public function getTag() {
        return $this->tag;
    }

    public function printArticolo() {
        echo "Titolo: {$this->getTitolo()}\n";
        echo "Categoria: {$this->getCategoria()}\n";
        echo "Tag: {$this->getTag()}\n";
        echo "-----------------------------\n";
    }
}

// --- ESEMPI DI UTILIZZO ---
$post1 = new Post("Le ultime notizie politiche", new Attualita(), "politica, cronaca");
$post2 = new Post("Finale di Champions League", new Sport(), "calcio, champions");
$post3 = new Post("Nuovo amore a Hollywood", new Gossip(), "vip, cinema");
$post4 = new Post("La seconda guerra mondiale", new Storia(), "guerra, storia");

$posts = [$post1, $post2, $post3, $post4];

foreach ($posts as $p) {
    $p->printArticolo();
}
?>
