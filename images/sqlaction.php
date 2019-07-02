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
                                $type = $data['type']; 
				$check=mysql_query("select * from user_master where username='$username' and password='$password'and type='$type'");
				$record=mysql_fetch_array($check);
				//echo "$check <br>";
				if ($check && $data["password"] != "" && $data["password"]===$record['password'])
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
					$result["message"] = "User failed to be authenticated.";
				}
				echo json_encode($result);
				break;
                                
                        case "signup":
                                   
                                $username = $data['username'];
                                $password = $data['password'];
                                $name = $data['name'];
                                $email = $data['email'];
                                $gender = $data['gender'];
                                $address = $data['address'];
                                $mobile = $data['mobile'];
                                $type = $data['type']; 
				$que=mysql_query("insert into user_master(username,password,name,gender,address,email,mobile,type,status)"
                                        . "values('$username','$password','$name','$gender','$address','$email','$mobile','$type',1)");
				
				
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
				$que=mysql_query("insert into question_master(qname,subject_code,wcode,a,b,c,d,answer,tid)"
                                        . "values('$qname','$subject_code','$wcode','$a','$b','$c','$d','$answer',$tid)");
				
				
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
				$que=mysql_query("select * from question_view where subject_code='$subject_code'");
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
					$result["message"] = "Add Question Successfully.";
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
				$que=mysql_query("select * from testview where status=1 and testid='$testid'");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
                                 case "testdata":
                                   
                                
				$que=mysql_query("SELECT distinct(`testid`), `testdate`, `status`, `title`, `username` FROM `testview`  where status=1");
                                while($res = mysql_fetch_array($que))
                                {
                                    $resul[]=$res;
                                }
				
				echo json_encode($resul);
				break; 
			
	}
?>
