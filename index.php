<?php
// Database configuration
$host = 'localhost';
$db = 'football_management';
$user = 'root';
$pass = '';

// Connect to the database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Front Controller
$controller = $_GET['controller'] ?? 'team';
$action = $_GET['action'] ?? 'index';

// Include the necessary controller based on the request
if ($controller === 'team') {
    require_once('controllers/TeamController.php');
    $teamController = new TeamController($pdo);
    
    if ($action === 'index') {
        $teamController->index();
    } else {
        // Handle other team actions
    }
} elseif ($controller === 'player') {
    require_once('controllers/PlayerController.php');
    $playerController = new PlayerController($pdo);

    if ($action === 'index') {
        $playerController->index();
    } else {
        // Handle other player actions
    }
} else {
    // Handle other controllers
}
?>
