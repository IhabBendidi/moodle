<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native/pgsql';
$CFG->dbhost    = getenv('ec2-54-247-169-129.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d5cnlg2dj9q6lj');
$CFG->dbuser    = getenv('kdxgezdudyekln');
$CFG->dbpass    = getenv('fbd566ef9efd6fe325f361fb142872a77ce803fa90c570c24c053965ec128f9f');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv(5432),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://qoodle.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
