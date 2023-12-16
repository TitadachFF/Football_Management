<?php
require_once(__DIR__ . '/../models/PlayerModel.php');

class PlayerController {
    private $playerModel;

    public function __construct($pdo) {
        $this->playerModel = new PlayerModel($pdo);
    }

    public function index() {
        // Fetch players from the database
        $players = $this->playerModel->getAllPlayers();

        // Load the view with data
        include(__DIR__ . '/../views/player/index.php');
    }
}
?>
