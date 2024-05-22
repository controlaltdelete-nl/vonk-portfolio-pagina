<?php
/**
 * Run DB migrations
 * 
 * @category PHP
 * @package  ControlAltDelete_VonkPortolioPagina
 * @author   Michiel Gerritsen <info@controlaltdelete.nl>
 * @license  Beerware https://en.wikipedia.org/wiki/Beerware
 * @link     https://github.com/controlaltdelete-nl/vonk-portfolio-pagina
 */

require 'connect-database.php';

$tableExists = db()->querySingle("SELECT name FROM sqlite_master WHERE type='table' AND name='posts'");

if ($tableExists) {
    echo 'Table already exists' . PHP_EOL;
    return;
}

db()->exec("CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    date TEXT NOT NULL
)");

echo 'Table created' . PHP_EOL;

$stmt = db()->prepare("INSERT INTO posts (title, description, date) VALUES (:title, :description, :date)");
$stmt->bindValue(':title', 'Welcome Back to School!', SQLITE3_TEXT);
$stmt->bindValue(':description', 'Excited to welcome everyone back for a great year!', SQLITE3_TEXT);
$stmt->bindValue(':date', date('Y-m-d'), SQLITE3_TEXT);
$stmt->execute();

// Insert the second record into the posts table
$stmt = db()->prepare("INSERT INTO posts (title, description, date) VALUES (:title, :description, :date)");
$stmt->bindValue(':title', 'Science Fair 2024', SQLITE3_TEXT);
$stmt->bindValue(':description', 'Join us for the annual Science Fair!', SQLITE3_TEXT);
$stmt->bindValue(':date', date('Y-m-d'), SQLITE3_TEXT);
$stmt->execute();

// Insert the third record into the posts table
$stmt = db()->prepare("INSERT INTO posts (title, description, date) VALUES (:title, :description, :date)");
$stmt->bindValue(':title', 'Parent-Teacher Conferences', SQLITE3_TEXT);
$stmt->bindValue(':description', 'Meet with teachers to discuss progress.', SQLITE3_TEXT);
$stmt->bindValue(':date', date('Y-m-d'), SQLITE3_TEXT);
$stmt->execute();

echo 'Dummy posts inserted' . PHP_EOL;