<?php 
    include_once "application/library/function.php"; 
            $url = curPageURL(); 
            $base="http://web.njit.edu/~hs293/";
         $url = str_replace('http://web.njit.edu/~hs293/','',$url); 
	$str = explode("/",$url);
	
	if(!isset($str) || count($str)==1)
	{
		include_once("application/controller/site.php");
		$controller = new site();
		$controller->index();	
	}
	else
	{
                $con = @$str[1];
                $file = $con.".php";
                $method = @$str[2];  
   
                if(file_exists("application/controller/$file"))
                {
                    include_once("application/controller/$file");
                    $controller = new $con();
                    $controller->$method();	
                }
                else
                {
                    echo "Invalid Url";
                }
	}
?>