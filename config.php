<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native/pgsql';
$CFG->dbhost    = getenv('ec2-46-137-156-205.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d7vu0kf493kplu');
$CFG->dbuser    = getenv('zqlcvsosgvzqmn');
$CFG->dbpass    = getenv('a3415d28096cd392c88fbc3f32f20ed8abd7d8a6faf761ae5b75b4c1131e23d2');
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
