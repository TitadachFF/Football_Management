<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Team Management</title>
</head>
<body>
    <h1>Team List</h1>
    
    <?php if (!empty($teams)): ?>
        <?php foreach ($teams as $team): ?>
            <p><?= $team['name'] ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No teams available.</p>
    <?php endif; ?>
</body>
</html>
