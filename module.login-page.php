<?php
//
// iTop module definition file
//


SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'login-page/1.0.0', array(
	// Identification
	//
	'label' => 'Login Design Enhanced Customer Portal',
	'category' => 'business',

	// Setup
	'dependencies' => array(
	),
	'mandatory' => true,
	'visible' => true,

	// Components
	'datamodel' => array(
		'main.login-page.php',
	),
	'webservice' => array(

	),
	'dictionary' => array(
	),
	'data.struct' => array(
	    // add your 'structure' definition XML files here,
	),
	'data.sample' => array(
	    // add your sample data XML files here,
	),

	// Documentation
	'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
	'doc.more_information' => '', // hyperlink to more information, if any

	// Default settings
	'settings' => array(
            // Module specific settings go here, if any
	),
    )
);
