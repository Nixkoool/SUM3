<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

$index = $_GET['index'] ?? null;

if ($index !== null && isset($_SESSION['tasks'][$index])) {
    $task = $_SESSION['tasks'][$index];
} else {
    // Redirect to index.php if index is invalid or task doesn't exist
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="images/mario_logo.png" alt="Mario Logo">
        </div>
        <ul>
            <li><a href="index.html#overview">Overview</a></li>
            <li><a href="index.html#features">Features</a></li>
            <li><a href="home.html">Home</a></li>
        </ul>
    </nav>

    <header>
        <h1>Task Details</h1>
    </header>

    <main class="container">
        <section>
            <h2>Task Information</h2>
            <p><strong>Task:</strong> <?php echo htmlspecialchars($task); ?></p>
            <a href="index.php">Back to Tasks</a>
        </section>
    </main>

</body>
</html>
