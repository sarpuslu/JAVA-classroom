<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php'; ?>
   
    
   
    
    <div id="content_top">
        <div id="page_title"> <?php echo  $testlist[0]['title']; ?></div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	
        <div class="col_6 rmc">
            <?php if(count($testlist)>0) { ?>
            <table border="1" align="center" width="300" cellspacing="0" cellpadding="5">
                <tr>
                    
                    <th >Question</th>
                    <th>Type</th>
                    <th >Student Input</th>
                    <th >Answer</th>
                    <th >Correct/Incorrect</th>
                    <th >Score</th>
                    <th >Comments</th>
                </tr>
                
                <?php
                $sum=0;$total=0;
                for($i=0;$i<count($testlist);$i++)
                {
                    $total = $total+$testlist[$i]['maxmarks'];    
                    $sum = $sum+$testlist[$i]['marks'];
                ?>
                <tr>
                    <td><?php echo $testlist[$i]['qname']; ?></td>
                    <td><?php echo $testlist[$i]['wname']; ?></td>
                    <td <?php if($testlist[$i]['answer']==$testlist[$i]['response']) { echo 'style="color:green"'; } else { echo 'style="color:red"'; }  ?>><?php echo $testlist[$i]['answer']; ?></td>
                    <td><?php echo $testlist[$i]['response']; ?></td>
                    <td <?php if($testlist[$i]['truefalse']=="Correct") { echo 'style="color:green"'; } else { echo 'style="color:red"'; }  ?> ><?php echo $testlist[$i]['truefalse']; ?></td>
                    <td><?php echo ($testlist[$i]['marks']); ?></td>
                      <td><?php echo $testlist[$i]['comment']; ?></td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="7" align="right"> Total: <?php echo "(".$sum."/".$total.") = ".($sum/$total)*100; ?></td>
                </tr>
            </table>
            <?php } else { ?>
            <h3 style="text-align:center;color:red;">Teacher has not released the results yet</h3>
            <?php } ?>
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