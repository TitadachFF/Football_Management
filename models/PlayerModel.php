<?php
class PlayerModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPlayers() {
        $stmt = $this->pdo->query("SELECT * FROM players");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
