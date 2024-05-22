<?php
/**
 * Connect to the database
 * 
 * @category PHP
 * @package  controlaltdelete_vonk-portolio-pagina
 * @author   Michiel Gerritsen <info@controlaltdelete.nl>
 * @license  Beerware
 * @link     https://github.com/controlaltdelete-nl/vonk-portfolio-pagina
 */

// Specify the path to the SQLite database file
$db = new SQLite3('storage/database.db');

// Prepare an insert statement
$stmt = $db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');

// Bind values to the statement
$stmt->bindValue(':name', 'John Doe', SQLITE3_TEXT);
$stmt->bindValue(':email', 'john.doe@example.com', SQLITE3_TEXT);

// Execute the statement
$result = $stmt->execute();

if ($result) {
    echo "Record inserted successfully.";
} else {
    echo "Failed to insert record.";
}