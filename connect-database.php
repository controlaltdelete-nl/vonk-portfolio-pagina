<?php
/**
 * Connect to the database
 * 
 * @category PHP
 * @package  ControlAltDelete_VonkPortolioPagina
 * @author   Michiel Gerritsen <info@controlaltdelete.nl>
 * @license  Beerware https://en.wikipedia.org/wiki/Beerware
 * @link     https://github.com/controlaltdelete-nl/vonk-portfolio-pagina
 */
/**
 * Connect to the database
 * 
 * @return SQLite3
 */
function db(): SQLite3
{
    static $db;

    if (!$db) {
        // Specify the path to the SQLite database file
        $db = new SQLite3('storage/database.sqlite');
    }

    return $db;
}
