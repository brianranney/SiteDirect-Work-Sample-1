<!DOCTYPE html>
<html>
    
    <head>
    
        <title>list test</title>
        
        <link rel="stylesheet" href="listStyle.css" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        
    </head>
    
<body>

<?php

$aMenu = array(
	array("name" => "Page 1", "url" => "http://www.sitedirect.se", 
		"subpages" => array(
		  array("name" => "Subpage 1.1", "url" => ""),
		  array("name" => "Subpage 1.2", "url" => "http://www.google.se"),		  array("name" => "Subpage 1.3", "url" => ""),
		) 				
	), 			
	array("name" => "Page 2", "url" => ""),
	array("name" => "Page 3", "url" => "",
		"subpages" => array(
			array("name" => "Subpage 3.1", "url" => ""),
			array("name" => "Subpage 3.2", "url" => ""),
			array("name" => "Subpage 3.3", "url" => "",
				"subpages" => array(
					array("name" => "Subpage 3.3.1", "url" => ""),
					array("name" => "Subpage 3.3.2", "url" => ""),
					array("name" => "Subpage 3.3.3", "url" => ""),
				),
			),
		), 								
	),
	array("name" => "Page 4", "url" => ""),
	array("name" => "Page 5", "url" => ""),
);

function makeMenu($array) {
    $html = "";
    
    $html .= "<ul>";
    
    foreach ($array as $level) {
        $html .= "<li><a href='" . $level['url'] . "'>" . $level['name'] . "</a>";
        if (!empty($level['subpages'])) {
            $html .= makeMenu($level['subpages']);
        }
        $html .= "</li>";
    }
    $html .= "</ul>";
    
    return $html;
}
$html = makeMenu($aMenu);
echo $html;

?>
    
</body>
</html>