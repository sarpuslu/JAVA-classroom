<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Test</title>
<link href="http://web.njit.edu/~hs293/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php';    ?>
   
    
    <div id="content_top">
        <div id="page_title"> Signup Form</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3" style="width:300px;float:left;border:1px solid #ffffff;">
        	
        </div>
        
        <div class="col_3 rmc">
    
		<form action="" method="post">
			<table width="580" border="0" cellspacing="0" cellpadding="5" bordercolor="#000">
                            
				<tr>
					<td>Name</td>
					<td><input type="text" name="fname" required></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" required></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" required></td>
				</tr>
				
				<tr>
					<td>Type</td>
				
				   <td>
						<select name="type" required>
							<option value="">Select One</option>
							<option value="student">Student</option>
							<option value="teacher">Teacher</option>
							
						</select>
				   </td>
				</tr>
				
				<tr>
					<td align="right">
                                            <input type="hidden" name="action" value="signup" />
                                            <input type="submit" name="signup" value="signup" class="submit_btn float_l">
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