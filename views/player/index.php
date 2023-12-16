<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Player Management</title>
</head>
<body>
    <h1>Player List</h1>
    
    <?php if (!empty($players)): ?>
        <?php foreach ($players as $player): ?>
            <p><?= $player['name'] ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No players available.</p>
    <?php endif; ?>
</body>
</html>
