<?


$content = '5,
			                    
			                    Mill Dale Court<br/>
			                    Drighlington<br/>
			                    
				                
				                    Bradford<br/>
			                        West Yorkshire, BD11 1DE';
			                        
			                        
$myArray = preg_split('/<br[^>]*>/i', $content);

print_r($myArray);			                        
			                        
?>