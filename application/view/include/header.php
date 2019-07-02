<link href="http://web.njit.edu/~hs293/style.css" rel="stylesheet" type="text/css" />

<div id="test_header">
    	<div id="site_title" style="color:#000000">
		
        	<h2>Online Test</h2>
        </div>
        <div id="test_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="http://web.njit.edu/~hs293/index.php/site/index" class="selected">Home</a></li>
                <?php
                if(isset($_SESSION['login'])) {  
                    if($_SESSION['type']=='teacher') {
                ?>        	     
                     
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/addtest">Create Test</a></li>
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/testlists">Test List</a></li>
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/addques">Add Question</a></li>
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/quelist">Questions</a></li>
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/testresult">Test Result</a></li>
                    
                <?php
                  }
                  if($_SESSION['type']=='admin') { ?>
                        <li><a href="http://web.njit.edu/~hs293/index.php/site/signup">Add User</a></li>
                <?php } if($_SESSION['type']=='student') { ?>
                        
                            <li><a href="http://web.njit.edu/~hs293/index.php/site/testlist">Test</a></li>
                             <li><a href="http://web.njit.edu/~hs293/index.php/site/result">Result</a></li>
                 <?php } ?>       

                <li><a href="http://web.njit.edu/~hs293/index.php/site/logout">Logout</a></li>
                    
                <?php } else {  ?>
                <li><a href="http://web.njit.edu/~hs293/index.php/site/signup">Signup</a></li>
                <?php } ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of test_menu -->
    </div> <!-- end of header -->
    