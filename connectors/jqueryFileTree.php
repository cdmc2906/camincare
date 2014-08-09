<?php
//
// jQuery File Tree PHP Connector
//
// Version 1.01
//
// Cory S.N. LaViska
// A Beautiful Site (http://abeautifulsite.net/)
// 24 March 2008
//
// History:
//
// 1.01 - updated to work with foreign characters in directory/file names (12 April 2008)
// 1.00 - released (24 March 2008)
//
// Output a list of files for jQuery File Tree
//

// $_POST['dir'] = urldecode($_POST['dir']);
// $dir="../archivos/";

// if( file_exists($dir) ) {
// 	$files = scandir($dir);
// 	//echo "yes";
// 	natcasesort($files);
// if( count($files) > 2 ) { /* The 2 accounts for . and .. */
// 		echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
// 		// All dirs
// 		foreach( $files as $file ) {
// 			if( file_exists($dir . $file) && $file != '.' && $file != '..' && is_dir($dir . $file) ) {
// 				echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
// 			}
// 			//else {echo "\nlinea 33"$dir.$file;}
// 		}
// 		// All files
// 		foreach( $files as $file ) {
// 			if( file_exists($dir . $file) && $file != '.' && $file != '..' && !is_dir($dir . $file) ) {
// 				$ext = preg_replace('/^.*\./', '', $file);
// 				echo "<li class=\"file ext_$ext\"><a href=\"camincare/$dir$file\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
// 			}
// 			 //else {echo "\nlinea 41";}
// 		}
// 		echo "</ul>";	
// 	}
// 	//emmmlse {echo "linea 45";}
// }
$directorio= urldecode($_POST['dir']);
$_POST['dir'] = urldecode($_POST['dir'])."/";
// echo $_POST['dir'] ;

// echo $directorio;
$root="..";
	if( file_exists($root . $_POST['dir']) ) {
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);   
	if( count($files) > 1 ) { /* The 2 accounts for . and .. */
		echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir']."/". $file) 
				&& $file != '.' 
				&& $file != '.quarantine'
				&& $file != '_hcc_thumbs'  
				&& $file != '.tmb'&& $file != '..' 
				&& is_dir($root . $_POST['dir'] ."/". $file) ) {
				echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
			}
		}
		// All files
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir']."/" . $file)
				&& $file != '.' 
				&& $file != '.quarantine'
				&& $file != '_hcc_thumbs' 
				&& $file != '.tmb' 
				&& $file != '..' 
				&& !is_dir($root . $_POST['dir']."/" . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				// echo "<br/>";
				// echo $root.$directorio.$file;
				// echo "<br/>";
				echo "<li class=\"file ext_$ext\"><a href=\"$directorio/$file\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
			}
		}

	}
	else echo "<br/> 71";
}
else echo $root . $_POST['dir'] ;

?>