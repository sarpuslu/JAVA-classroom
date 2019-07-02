<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NJIT Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://web.njit.edu/~hs293/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://web.njit.edu/~hs293/css/shCore.css">
<link rel="stylesheet" type="text/css" href="http://web.njit.edu/~hs293/css/demo.css">

<script type="text/javascript" language="javascript" src="http://web.njit.edu/~hs293/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="http://web.njit.edu/~hs293/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="http://web.njit.edu/~hs293/js/shCore.js"></script>

<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
$('#example').dataTable( {
        "order": [[ 3, "desc" ]]
} );
} );

</script>
</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php'; ?>
   
    
    <div id="content_top">
        <div id="page_title"> Create Test</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    
        
        <div class="col_6 rmc">
		<form action="" method="post">
			<table width="680" border="0" cellspacing="0" cellpadding="5" bordercolor="#000">	
                      
                        
				
                            
                                   <tr>
                                        <td>Title</td>
                                        <td><input type="text" name="title" ></td>
                                    </tr>
                                    <tr>
                                        <td>Test Date</td>
                                        <td><input type="text" name="tdate" placeholder="YYYY-MM-DD"></td>
                                    </tr>
                            <tr>
                                
                                <td colspan="2">
                                   <table id="example" class="display" cellspacing="0" width="100%"> 
                                       <thead>
                                           <th>Check</th>
                                           <th>Question</th>
                                           <th>Type</th>
                                           <th>Points</th>
                                       </thead>
                                       <tbody>
                                  <?php 
                                    
                                    for($i=0;$i<count($queslist)-3;$i++)
                                    {
                                     ?>
                                        <tr>
                                            <td><input type="checkbox" name="q[]" value="<?php echo $queslist[$i]['qid']; ?>" /></td>
                                            <td><?php echo $queslist[$i]['qname']; ?></td>
                                            <td><?php echo $queslist[$i]['wname'];  ?></td>
                                            <td><?php echo $queslist[$i]['marks'];  ?></td>
                                         
                                        </tr>         
                                    <?php } ?>
                                       </tbody>
                                   </table>              
                                 </td>                
                                      
                            </tr>                  
                            <tr>
                                <td>
                                    <input type="hidden" name="scode" value="4">      
                                    <input type="hidden" name="action" value="addtest">  
                                    <input type="submit" name="addtest" value="Submit" >
                                </td>
                            </tr>              
                            
                                    
                                    
                             
			</table>
			</form>
        </div>
        
        <div class="cleaner h60"></div>
        
    	
    </div>      
    <div id="test_content">
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    <div id="test_sidebar">

    </div> <!-- end of sidebar -->
    <div class="cleaner"></div>
    
    
    
    <?php include_once 'include/footer.php'; ?>
</div>

</body>
</html>