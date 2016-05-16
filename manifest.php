<?php
 
// manifest file for information regarding application of new code
$manifest = array(

    // only install on the following sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
        ),
        'regex_matches' => array (
            0 => '6\.5\.16'
        ),
    ),

    'acceptable_sugar_flavors' => array (
        0 => 'CE',
    ),

    'name' => 'Galician (Spain) Language Pack',
    'id'=> 'ga_ES_Indra',
    'lang_file_suffix' => 'ga_ES',
    'description' => 'Paquete de traducción ao Galego',
    'author' => 'Indra',
    'is_uninstallable' => true,
    'type' => 'langpack',
    'icon' => '',
    'published_date' => '2016/05/05',
    'version' => '1.0',
	'acceptable_sugar_flavors' => array ( 0 => "CE"),
	'acceptable_sugar_versions' => array ( "exact_matches" => array (), "regex_matches" => array (	0 => "6.5.[0-9][a-z]?" )),
	'published_date' => '2016-01-26',
);

?>