<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NJIT Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php'; ?>
   
    
   
    
    <div id="content_top">
        <div id="page_title"> Result</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3" style="width:300px;float:left;border:1px solid #ffffff;">
        	
        </div>
        <div class="col_3 rmc">
            <table border="1" width="300" cellspacing="0" cellpadding="5">
                <tr>
                    <th>Title</th>
                    <th>Test Date</th>
                    <th>Teacher</th>
                    <th>Start</th>
                </tr>
                <?php
                for($i=0;$i<count($testlist);$i++)
                {
                ?>
                <tr>
                    <td><?php echo $testlist[$i]['title']; ?></td>
                    <td><?php echo $testlist[$i]['testdate']; ?></td>
                    <td><?php echo $testlist[$i]['student_name']; ?></td>
                    <td><form action="" method="post" >
                            <input type="hidden" name="testid" value="<?php echo $testlist[$i]['testid']; ?>">
                                <input type="submit" name="show_result" value="Show Result">
                        </form></td>
                </tr>
                <?php
                }
                ?>
            </table>
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