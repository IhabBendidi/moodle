<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('mysqli');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('eu-cdbr-west-03.cleardb.net/');
$CFG->dbname    = getenv('heroku_65b167f0fa43ee0');
$CFG->dbuser    = getenv('b8afb3215133a4');
$CFG->dbpass    = getenv('a03ddb04');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://qoodle.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
