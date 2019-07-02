<?php
$_SESSION['page'] = isset($_SESSION['page'])?$_SESSION['page']:'0';
if(isset($_POST['quiz']))
{
        
     $_SESSION['quiz_r'][] = array($_POST['q']=>$_POST['ans']);
     $_SESSION['page'] = $_SESSION['page']+1;
}

$i = $_SESSION['page'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
       function validate()
       {
           if(document.myform.ans[0].checked==false && document.myform.ans[1].checked==false && document.myform.ans[2].checked==false  && document.myform.ans[3].checked==false)
           
           {
              alert("Select the answer");
              return false;
           }
       }
 </script>
</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php'; ?>
   
    
    <div id="content_top">
      
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3" style="width:300px;float:left;border:1px solid #ffffff;">
        	
        </div>
        
        <div class="col_3 rmc">
            <?php if($sttest['result']==true) { ?>
            <h3 style="color::red;text-align:center;"><?php echo @$sttest['message']; ?></h3>
            <?php } else { ?>
            <form name="myform" action="" method="post" onsubmit="return(validate())">
                <table align="left" cellspacing="0" cellpadding="5">
                    
                
		
            <?php
                if($i<count($testdetail)) {
                ?>
                <tr>
                    <td><b>Question:-</b></td>
                </tr>    
                <tr>
                    <td><?php echo $testdetail[$i]['qname'];  ?></td>
                </tr>
                <tr>
                    <td>Answer</td>
                </tr>   
                 <?php if($testdetail[$i]['wcode']=='1' || $testdetail[$i]['wcode']=='2'  ) {  ?>   
                        
                <?php if(!empty($testdetail[$i]['a'])): ?>
                <tr>
                    <td><input type="radio" name="ans" value="a"> <?php echo $testdetail[$i]['a'];  ?></td>
                </tr>
                <?php endif; ?>
                <?php if(!empty($testdetail[$i]['b'])): ?>
                <tr>
                    <td><input type="radio" name="ans" value="b"><?php echo $testdetail[$i]['b'];  ?></td>
                </tr>
                <?php endif; ?>
                <?php if(!empty($testdetail[$i]['c'])): ?>    
                <tr>
                    <td><input type="radio" name="ans" value="c"><?php echo $testdetail[$i]['c'];  ?></td>
                </tr>
               <?php endif; ?>
                <?php if(!empty($testdetail[$i]['d'])): ?>
                <tr>
                    <td><input type="radio" name="ans" value="d"><?php echo $testdetail[$i]['d'];  ?></td>
                </tr>
            <?php endif; ?>
                 <?php } else {  ?>
                      <tr>
                    <td>
                    <textarea name="ans" required></textarea> 
                    </td>
                    </tr>
                 <?php } ?>
                    <tr>
                        
                    
                        <td>
                        <input type="hidden" name="q" value="<?php echo $testdetail[$i]['qid']; ?>">
                             
                        <input type="submit" name="quiz" value="Next">
                        </td>    
                    </tr>    
                           
             </form>
             <?php }
               else
               {
                   
               
              ?>     
            
            
                <tr>
                    <td>
                        <form action="" method="post">
            <input type="hidden" name="testid" value="<?php  // echo $testdetail[0]['testid'];  ?>">
            <input type="submit" name="completetest" value="Finish">
                </form>
            </td>    
            </tr>
              <?php
            } }
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