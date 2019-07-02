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
        <div id="page_title"> Login Form</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3" style="width:300px;float:left;border:1px solid #ffffff;">
        	
        </div>
        
        <div class="col_3 rmc">
              <?php
                if(isset($_SESSION['login']) && $_SESSION['login']=='success') {
                    
              ?>
            <?php } else { ?>
            <h3>Welcome To Our Site</h3>
		<form action="" method="post">
        	<table width="280" border="1" cellspacing="0" cellpadding="5" bordercolor="#000">
				
				<tr>
					<td>Username</td>
				</tr>
				<tr>
					<td><input type="text" name="uname" required></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<td>Type</td>
				</tr>
				<tr>
				   <td>
						<select name="type">
							<option value="student">Student</option>
							<option value="teacher">Teacher</option>
							<option value="admin">Admin</option>
						</select>
				   </td>
				</tr>
				<tr>
					<td align="right"><input type="submit" name="login" value="Login" class="submit_btn float_l"></td>
				</tr>
				
			</table>
			</form>
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