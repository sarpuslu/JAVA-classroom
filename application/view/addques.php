<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NJIT Test</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function questionoption(str){
  
        for(i=1;i<=4;i++)
        {
           
            if(i==str)
            {
                document.getElementById(str).style.display = 'block';
            }
            else
            {
                document.getElementById(i).style.display = 'none';
            }
        }    
              
		
}
</script>
</head>
<body>
<div id="test_wrapper">
	<?php include_once 'include/header.php';  ?>
    
   
    
    <div id="content_top">
        <div id="page_title"> Add Question</div>
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	
        
        <div class="col_6 rmc" style="background:#EEEEEE;
             ">
            <span style="font-weight:bold;color:red;"><?php echo @$res['message']; ?></span><br>
            <table  align="center" width="600" cellspacing="0" cellpadding="10" style="font-weight:bold;" >
		<tr>
                            <td>Question Type:</td>                           
                            <td><select name="wc" onchange="questionoption(this.value)">
                                    <option value="0">Select One</option>
                                    <?php
                            for($i=0;$i<count($weightege)-3;$i++)
                             {
                                ?>
                                      <option value="<?php echo $weightege[$i]['wcode']; ?>"><?php echo $weightege[$i]['wname']; ?></option>
                             
                            <?php  }  ?>
             </select>      </td>

                        
                </tr>
		</table>
		
         
    		  
             
                <table align="center" width="600" cellspacing="0" cellpadding="10" id="1" style="display:none;font-weight:bold;">      
                <form   action="" method="post" style="text-align:center;">
                    
                      <tr>
                          <td valign="top">Question:</td>                           
                            
                            <td colspan="3" > <textarea name="qname" placeholder="Please enter question" style="width:385px;height:95px;"></textarea>     </td>

                     </tr> 
                <tr>
                    <td>Option A: </td>                           
                    <td><input type="text" style="width:auto" name="a"></td>
                    <td>Option B: </td>                           
                    <td><input type="text" style="width:auto" name="b"></td>
                </tr> 
                <tr>
                    <td>Option C: </td>                           
                    <td> <input type="text" style="width:auto" name="c"></td>
                    <td>Option  D: </td>                           
                    <td> <input type="text" style="width:auto" name="d"></td> 
                </tr> 
                <tr>
                    <td>Correct Option:</td>
                    <td >
                            
                            <input type="radio" name="answer" value="a">A
                            <input type="radio" name="answer" value="b">B   
                            <input type="radio" name="answer" value="c">C
                            <input type="radio" name="answer" value="d">D
                    </td>
                    <td rowspan="2"s valign="top">Comment:</td>
                    <td rowspan="2"><textarea name="comment" required></textarea></td>  
                </tr>
            <!--<br>Correct Answer<br>
            <input type-"text" style="width:auto" name="answer"></br>-->
             <tr>
                    <td>Marks:</td>                           
                    <td colspan="3"> <input type="text" style="width:auto" name="marks"></td>
   
            </tr> 
            
            <tr>
                <td colspan="2">
                    <input type="hidden" name="subject_code" value="4">
                    <input type="hidden" name="wcode" value="1">
                    <input type="hidden" name="action" value="addques">
                    <input type="submit" name="addques" value="Submit" class="button">
                </td>
            </tr>
            </form>
            </table>
                
            <table align="center" width="600" cellspacing="0" cellpadding="10" id="2" style="display:none;">      
               <form  action="" method="post" style="text-align:center;"> 
                   
                      <tr>
                            <td> Question:</td>                           
                            <td colspan="3"> <textarea name="qname" placeholder="Please enter question" style="width:300px;height:95px;"></textarea>     </td>

                     </tr> 
                <tr>
                            <td>Option A:
                 </td>                           
                            <td>
                                <input type="text" style="width:auto" name="a" value="True">       
                            </td>

                        
               
                            <td>Option B:
                  </td>                           
                            <td>
                                  <input type="text" style="width:auto" name="b" value="False">      </td>

                        
                </tr> 
               
                <tr>
                    <td>Correct Option</td>
                    <td>
                            
                            <input type="radio" name="answer" value="a">A
                            <input type="radio" name="answer" value="b">B   
                            <input type="radio" name="answer" value="c">C
                            <input type="radio" name="answer" value="d">D
                    </td>
                </tr>
            <!--<br>Correct Answer<br>
            <input type-"text" style="width:auto" name="answer"></br>-->
             <tr>
                    <td>Marks</td>                           
                    <td> <input type="text" style="width:auto" name="marks"></td>
   
            </tr> 
            <tr>
                
                <td>Comment</td>
                <td><textarea name="comment" required></textarea></td>  
            </tr>  
            <tr>
                <td colspan="2">
                    <input type="hidden" name="subject_code" value="4">
                    <input type="hidden" style="width:auto"  name="c">
                    <input type="hidden" style="width:auto" name="d">
                        <input type="hidden" name="wcode" value="2">
                    <input type="hidden" name="action" value="addques">
                    <input type="submit" name="addques" value="Submit" class="button">
                </td>
            </tr>
         </form>
        </table>
       <table align="center" width="600" cellspacing="0" cellpadding="10" id="3" style="display:none;">
           <form  action="" method="post" style="text-align:center;"> 
                   
                   <tr>
                <td>Question</td>
                <td>
                    <textarea name="qname" required></textarea>
                    
                </td>
            </tr>
            <tr>
                <td>Answer</td>
                <td>
                    <textarea name="answer" value="" required></textarea>
                </td>
            </tr>
            <tr>
                    <td>Marks</td>                           
                    <td> <input type="text" style="width:auto" name="marks"></td>
   
            </tr> 
            <tr>
                <td>Comment</td>
                <td>
                    <textarea name="comment" required></textarea>
                </td>
            </tr>                
          
          
                     <input type="hidden" style="width:auto"  name="a">
                    <input type="hidden" style="width:auto" name="b">
                     <input type="hidden" style="width:auto"  name="c">
                     <input type="hidden" style="width:auto" name="d">
                <tr>
                <td colspan="2">
                    <input type="hidden" name="subject_code" value="4">
                    <input type="hidden" name="wcode" value="3">
                    <input type="hidden" name="action" value="addques">
                    <input type="submit" name="addques" value="Submit" class="button">
                </td>
            </tr>
         </form>
                
                </table> 
                
                 <table align="center" width="600" cellspacing="0" cellpadding="10" id="4" style="display:none;">
                      <form  action="" method="post" style="text-align:center;"> 
                   
                   <tr>
                <td>Question</td>
                <td>
                    <textarea name="qname" required></textarea>
                    
                </td>
            </tr>
            <tr>
                <td>Answer</td>
                <td>
                    <textarea name="answer" value="" required></textarea>
                </td>
            </tr>
            <tr>
                    <td>Marks</td>                           
                    <td> <input type="text" style="width:auto" name="marks"></td>
   
            </tr> 
            <tr>
                <td>Comment</td>
                <td>
                    <textarea name="comment" required></textarea>
                </td>
            </tr>                
          
          
                     <input type="hidden" style="width:auto"  name="a">
                    <input type="hidden" style="width:auto" name="b">
                     <input type="hidden" style="width:auto"  name="c">
                     <input type="hidden" style="width:auto" name="d">
                
                <tr>
                <td colspan="2">
                    <input type="hidden" name="subject_code" value="4">
                        <input type="hidden" name="wcode" value="4">
                    <input type="hidden" name="action" value="addques">
                    <input type="submit" name="addques" value="Submit" class="button">
                </td>
            </tr>
         </form>
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
    
    
    
  	<?php include_once 'include/footer.php';  ?>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>