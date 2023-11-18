<?php
// database connection file
require_once "configs/DbConn.php";

// Check AuthorId parameter is set in the URL
if (isset($_GET['DeleteId'])) {
    $authorId = $_GET['DeleteId'];

    // Delete the author from database
    $deleteStmt = $pdo->prepare("DELETE FROM authorstb WHERE AuthorId = ?");
    $deleteStmt->execute([$authorId]);

    // Redirect back to the ViewAuthors.php page after deletion
    header("Location: ViewAuthors.php");
    exit();
} else {
    die("Invalid request");
}

// Close database connection
$pdo = null;
?>
