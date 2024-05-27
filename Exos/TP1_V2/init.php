<?php

/////////////////////////////////////////////////
//////       Chargement dynamique des classes ///
/////////////////////////////////////////////////
spl_autoload_register(function ($class_name) {
    
    //class directories
	$directorys = array(
            './',
            'classes/'			 
	);

	//for each directory
	foreach($directorys as $directory)
	{
		//see if the file exsists
		if(file_exists($directory.$class_name . '.php'))
		{
			require_once($directory.$class_name . '.php');
			return;
		}
	}
});
		
//// Ancienne Syntaxe
//function __autoload($class_name) {
//	//class directories
//	$directorys = array(
//            './',
//            'dao/',
//            'classes/',
//			'model/'
//	);
//
//	//for each directory
//	foreach($directorys as $directory)
//	{
//		//see if the file exsists
//		if(file_exists($directory.$class_name . '.php'))
//		{
//			require_once($directory.$class_name . '.php');
//			return;
//		}
//	}
//}

//*********************************************************
//*********************************************************
//***   Partie INIT pour la gestion accès BASE Données    *
//*********************************************************
//*********************************************************

 
?>