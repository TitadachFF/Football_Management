<?php
require_once(__DIR__ . '/../models/TeamModel.php');

class TeamController {
    private $teamModel;

    public function __construct($pdo) {
        $this->teamModel = new TeamModel($pdo);
    }

    public function index() {
        // Fetch teams from the database
        $teams = $this->teamModel->getAllTeams();

        // Load the view with data
        include(__DIR__ . '/../views/team/index.php');
    }
}
?>
