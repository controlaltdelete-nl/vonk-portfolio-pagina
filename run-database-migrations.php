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

$tableExists = $db->querySingle("SELECT name FROM sqlite_master WHERE type='table' AND name='posts'");

if (!$tableExists) {
    return;
}

$db->exec("CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL
)");

echo 'Table created';

// Insert the first record into the posts table
$stmt = $db->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");
$stmt->bindValue(':title', 'Welcome Back to School!', SQLITE3_TEXT);
$stmt->bindValue(':description', 'We are excited to welcome all our students and staff back to school for another fantastic year of learning and growth. Stay tuned for updates on upcoming events and activities.', SQLITE3_TEXT);
$stmt->execute();

// Insert the second record into the posts table
$stmt = $db->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");
$stmt->bindValue(':title', 'Science Fair 2024', SQLITE3_TEXT);
$stmt->bindValue(':description', 'The annual Science Fair is coming up! Students from all grades are invited to participate and showcase their innovative projects. Don\'t miss the opportunity to witness creativity and science come together.', SQLITE3_TEXT);
$stmt->execute();

// Insert the third record into the posts table
$stmt = $db->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");
$stmt->bindValue(':title', 'Parent-Teacher Conferences', SQLITE3_TEXT);
$stmt->bindValue(':description', 'Parent-Teacher conferences are scheduled for next week. This is a great chance for parents to meet with teachers and discuss their children\'s progress. We look forward to seeing you there!', SQLITE3_TEXT);
$stmt->execute();

echo 'Dummy posts inserted';