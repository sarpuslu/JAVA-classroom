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
        <div id="page_title"> Test List</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	
        <div class="col_6 rmc">
            <table border="0" algin="center" width="300" cellspacing="0" cellpadding="5">
                <form action="" method="post">
                <tr>
                    <td>
                Select Test<select name="testid">
                    <?php
                    for($i=0;$i<count($testlist);$i++)
                    {
                    ?>
                        <option value="<?php echo $testlist[$i]['testid']; ?>">  <?php echo $testlist[$i]['title']; ?></option>
                    <?php
                    }
                    ?>
                </select>
                </td>
               
                        <td>
                            <input type="submit" name="stu_testlist" value="Submit">
                        </td>
                    </tr>
                    </form>
            </table>
            <table width="400" align="center" border="1" cellspacing="0" cellpadding="5">
            <?php if(isset($testdata)) { ?>
                <tr>
                    <th>Student Name</th>
                    <th>Subject Name</th>
                     <th>Test Title</th>
                    <th>Test Date</th>
                    <th>Score</th>
                </tr>
                <?php
                
                    for($i=0;$i<count($testdata);$i++)
                    {
                        
                    ?>
                <tr>
                    <td><?php echo $testdata[$i]['student_name']; ?></td>
                    <td><?php echo $testdata[$i]['subject_name']; ?></td>
                    <td><?php echo $testdata[$i]['title']; ?></td>
                     <td><?php echo $testdata[$i]['testdate']; ?></td>
                    <td><?php echo "(".$testdata[$i]['marks']."/".$testdata[$i]['maxmarks'].")=";
                            echo ($testdata[$i]['marks']/$testdata[$i]['maxmarks'])*100; ?></td>
                </tr>
                <?php
            }}
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