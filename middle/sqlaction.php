<?php
        include_once 'connect.php';
	/* 	Back end database scripts. 
	Validates against SQL database sample username and password testname:testpass
	Various scripts to insert/delete and query the database tables.
	written by Samuel Roberts
	*/
	$data = json_decode(file_get_contents('php://input'),true);
	session_start();	
	$result = array("result" => false, "message" => "", "data" => "");
	
		switch ($data["action"]){
			
			case "login":
                                   
                                $username = $data['username'];
                                $password = $data['password']; 
                               
				$check=mysql_query("select * from user_master where username='$username' and password='$password'");
                                $count = mysql_num_rows($check);
				$record=mysql_fetch_array($check);
				//echo "$check <br>";
				if ($count>0)
				{
					$result["result"] = true;
					$result["userid"] = $record['userid'];
					$result["username"] = $record['username'];
					$result["password"] = $record['password'];
					$result["type"] = $record['type'];
					$result["message"] = "User successfully authenticated.";
				}
				else
				{
					$result["result"] = false;
					$result["message"] = "Invalid username or password.";
				}
				echo json_encode($result);
				break;
                                
                                case "signup":
                                   
                                $username = $data['username'];
                                $password = $data['password'];
                                $name = $data['name'];              
                                $type = $data['type']; 
                                
				$que=mysql_query("insert into user_master(username,password,name,type)"
                                        . "values('$username','$password','$name','$type')");
				
				
				if($que)
				{
					$result["result"] = true;
					$result["message"] = "User successfully registerd.";
				}
				else
				{
					$result["result"] = false;
					$result["message"] = "Invalid information entered.".mysql_error();
				}
				echo json_encode($result);
				break;       
			
                                case "addques":
                                   
                                $qname = $data['qname'];
                                $subject_code = $data['subject_code'];
                                $wcode = $data['wcode'];
                                $a = $data['a'];
                                $b = $data['b'];
                                $c = $data['c'];
                                $d = $data['d'];
                                $answer = $data['answer']; 
                                $tid = $data['tid'];
                                $comment = $data['comment'];
                                $marks = $data['marks'];
				$que=mysql_query("insert into question_master(qname,subject_code,wcode,a,b,c,d,answer,tid,comment,marks)"
                                        . "values('$qname','$subject_code','$wcode','$a','$b','$c','$d','$answer','$tid','$comment','$marks')");
				
				
				if($que)
				{
					$result["result"] = true;
					$result["message"] = "Add Question Successfully.";
				}
				else
				{
					$result["result"] = false;
					$result["message"] = "Invalid information entered.".mysql_error();
				}
				echo json_encode($result);
				break;     
                                
                                case "subjectlist":
                                   
                                
				$que=mysql_query("select * from subject");
                                while($res = mysql_fetch_array($que))
                                {
                                    $result[]=$res;
                                }
				
				echo json_encode($result);
				break; 
                                
                                case "weightegelist":
                                   
                                
				$que=mysql_query("select * from question_weight");
                                while($res = mysql_fetch_array($que))
                                {
                                    $result[]=$res;
                                }
				
				echo json_encode($result);
				break;
                                
                                case "queslist":
                                $subject_code = $data['subject_code'];        
				$que=mysql_query("select * from questionview where subject_code='$subject_code' order by wname");
                                while($res = mysql_fetch_array($que))
                                {
                                    $result[]=$res;
                                }
				
				echo json_encode($result);
				break; 
                                
                                case "addtest":
                                   
                                $title = $data['title'];
                                $subject_code = $data['subject_code'];
                                $testdate = $data['testdate'];
                                $tid = $data['tid'];
                                $ques = $data['ques'];
                                
                                
				$que=mysql_query("insert into test_master(testdate,title,tid,subject_code)"
                                        . "values('$testdate','$title','$tid','$subject_code')");
                                
                                $test_id=mysql_insert_id();
				
                                for($i=0;$i<count($ques);$i++)
                                {
                                    $qid = $ques[$i];    
                                    mysql_query("insert into test_details(testid,qid)values('$test_id','$qid')");
                                }
				
				if($que)
				{
					$result["result"] = true;
					$result["message"] = "Add Test Successfully.";
				}
				else
				{
					$result["result"] = false;
					$result["message"] = "Invalid information entered.".mysql_error();
				}
				echo json_encode($result);
				break; 
                                
                                 case "testlist":
                                   
                                $testid = $data['testid'];
				$que=mysql_query("select * from testview where status='Y' and testid='$testid' order by wname");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                 case "testdata":
                                   
                                
				$que=mysql_query("SELECT distinct(`testid`), `testdate`, `status`, `title`, `username`,subject_name FROM `testview`  where status='Y'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                
                                case "completetest":
                                $testid = $data['testid'];
                                $sid = $data['sid'];
                                $testdata = $data['testdata'];
                                
                                foreach($testdata as $v) 
                                {
                                    foreach($v as $q=>$a)
                                    {
                                    $que=mysql_query("insert into student_test(testid,sid,qid,ans)"
                                        . "values('$testid','$sid','$q','$a')");
                                    
                                    }
                                    
                                }
                                
                                                         				
				if($que)
				{
					$result["result"] = true;
					$result["message"] = "Store Test Data Successfully.";
				}
				else
				{
					$result["result"] = false;
					$result["message"] = "Invalid information entered.".mysql_error();
				}
				echo json_encode($result);
                                break;  
                                
                                case 'gettestlist':
                                $sid = $data['sid'];   
                                $que=mysql_query("SELECT distinct(`testid`), `testdate`, `result`, `subject_name`, `student_name`,title FROM `result`  where  sid='$sid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
                                
                              
                                break;    
                                 case "getteachtest":
                                   
                                $tid = $data['tid'];
				$que=mysql_query("SELECT distinct(`testid`), `testdate`, `status`,`result`,`title`, `username` FROM `testview`  where  tid='$tid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                
                                case "updtestresult":
                                   
                                $tid = $data['tid'];
                                $testid = $data['testid'];
                                $result = $data['result'];
				$que=mysql_query("update test_master set result='$result'  where testid='$testid' and  tid='$tid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                
                                case "showresult":
                                   
                                $sid = $data['sid'];
                                $testid = $data['testid'];
                              
				$que=mysql_query("select * from result where sid='$sid' and result='Y' and testid='$testid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                
                                
                                case "stutestresult":
                                   
                                $testid = $data['testid'];
				$que=mysql_query("select student_name,subject_name,sum(marks) as marks,sum(maxmarks) as maxmarks,testdate,testid,title from result group by sid
                                                    having testid='$testid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                
                                
                                case "questionlist":
                                $tid = $data['tid'];
				$que=mysql_query("select * from questionview where tid='$tid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				echo json_encode($resul);
				break; 
                                
                                
                                case "deletetest":
                                $testid = $data['testid'];
                              
				$que=mysql_query("delete from test_master where testid='$testid'");
                                $que=mysql_query("delete from test_detail where testid='$testid'");
				
				echo json_encode($resul);
				break; 
                            
                                case "deletequestion":
                                $qid = $data['qid'];
                              
				$que=mysql_query("delete from question_master where qid='$qid'");
				echo json_encode($resul);
				break;
                            
                            
                                case "sttestdetail":
                                $testid = $data['testid'];
                                $sid = $data['sid'];
                                
                                $que = mysql_query("select * from student_test where testid='$testid' and sid='$sid'");
                                $count = @mysql_num_rows($que);
				if($count>0)
				{
					$result["result"] = true;
					$result["message"] = "Already Attempted Test";
				}
				else
				{
					$result["result"] = false;
					
				}
				echo json_encode($result);
				break;    
                            
	}
?>
