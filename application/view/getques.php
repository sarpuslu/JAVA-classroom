<?php 
$id = $_GET['id'];

		$a = json_decode($result,true);
                 
                            for($i=0;$i<count($a)-3;$i++)
                             {
                 
                              echo '<input type="checkbox" name="q[]" value="'.$a[qid].'">';
                              echo $a['qname']."<br>";
                             }       
                             
                 
?>