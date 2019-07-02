<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php';  ?>
    
   
    
    <div id="content_top">
        <div id="page_title"> Add Question</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	
        
        <div class="col_3 rmc">
		
		
		
  		<form id="login" action="" method="post" style="text-align: center">
    		<span style="font-weight: bold">Create  Question</span><br>
                    <table width="300" align="center" cellspacing="0" border="1" cellpadding="5">
                <tr>
                   
                    <th>Question</th>
                    <th>Type</th>
                    <th>A</th>
                    <th>B</th>
                    <th>c</th>
                    <th>D</th>
                    <th>Answer</th>
                    <td>Delete</td>
                </tr>    
                 <?php
                for($i=0;$i<count($queslist);$i++)
                {
                ?>
                 <tr>
                 
                     <td><?php echo $queslist[$i]['qname']; ?></td>
                     <td><?php echo $queslist[$i]['wname']; ?></td>
                   <td><?php echo $queslist[$i]['a']; ?></td>
                   <td><?php echo $queslist[$i]['b']; ?></td>
                   <td><?php echo $queslist[$i]['c']; ?></td>
                   <td><?php echo $queslist[$i]['d']; ?></td>
                   <td><?php echo $queslist[$i]['answer']; ?></td>
                   <td>
                       <form action="" method="post">
                           <input type="hidden" name="qid" value="<?php echo $queslist[$i]['qid']; ?>">
                               <input type="submit" name="quedelete" value="Delete">
                       </form>
                   </td>
                </tr>
              <?php
                }
              ?>
                
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
    
    
    
  	<?php include_once 'include/footer.php';  ?>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>