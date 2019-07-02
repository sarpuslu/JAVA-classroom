<?php
class site_model {
	
        
        public function login()
        {
                $data = array("username" => $_POST["uname"], "password" => $_POST["pass"],"action" => "login");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
	
        public function signup()
        {
                $data = array("username" => $_POST["uname"],"password" => $_POST["pass"],"type" => $_POST['type'],"name"=>$_POST['fname'],"action" => "signup");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function addques()
        {
                $data = array("qname" => $_POST["qname"],"subject_code" => $_POST["subject_code"],"wcode" => $_POST["wcode"],"a" => $_POST['a'],"b"=>$_POST['b'],"c"=>$_POST['c'],"d"=>$_POST['d'],"answer"=>$_POST['answer'],"tid"=>$_SESSION['uid'],"comment"=>$_POST['comment'],"marks"=>$_POST['marks'],"action" => "addques");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
         public function addtest()
        {        
                $data = array("title"=>$_POST['title'],"ques"=>$_POST['q'],"subject_code" => $_POST['scode'],"testdate" => $_POST['tdate'],"tid"=>$_SESSION['uid'],"action" => "addtest");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function getques()
        {       
              
              
			$data = array("action"=>"queslist","subject_code"=>4);
			$data_string = json_encode($data);
			$crl=curl_init();
			curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
			curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
			curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($crl);
			curl_close($crl);
			$a = json_decode($result,true);
					return $a;
        }
        
        
          public function quelist()
        {       
                 $data = array("action" => "questionlist","tid"=>$_SESSION['uid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);
		curl_close($crl);
		$a = json_decode($result,true);
                return $a;
        }
        
        public function quedelete()
        {
             $data = array("action" => "deletequestion","qid"=>$_POST['qid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);
		curl_close($crl);
		$a = json_decode($result,true);
                return $a;
        }
        public  function gettestlist()
        {
            $data = array("action"=>"gettestlist","sid"=>$_SESSION['uid']);
            $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);
		curl_close($crl);
		$a = json_decode($result,true);
                return $a;
        }
        
        public  function getteachtest()
        {
            $data = array("action"=>"getteachtest","tid"=>$_SESSION['uid']);
            $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);
		curl_close($crl);
		$a = json_decode($result,true);
                return $a;
        }



        public function weightegelist()
        {
                $data = array("action" => "weightegelist");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
        public function subjectlist()
        {
                $data = array("action" => "subjectlist");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        public function testdetail()
        {
                $data = array("action"=>"testlist","testid"=>$_SESSION['starttestid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
        public function sttestdetail()
        {
            $data = array("action"=>"sttestdetail","testid"=>$_SESSION['starttestid'],"sid"=>$_SESSION['uid']);
        
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function testlist()
        {
                $data = array("action" => "testdata");
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function completetest()
        {
                $data = array("action" => "completetest","testid"=>$_SESSION['starttestid'],"sid"=>$_SESSION['uid'],"testdata"=>$_SESSION['quiz_r']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function updtestresult()
        {
                $data = array("action" => "updtestresult","testid"=>$_POST['testid'],"tid"=>$_SESSION['uid'],"result"=>$_POST['result']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
         public function showresult()
        {
                $data = array("action" => "showresult","testid"=>$_SESSION['show_result'],"sid"=>$_SESSION['uid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
        public function stutestresult()
        {
                $data = array("action" => "stutestresult","testid"=>$_POST['testid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
        
        public function deletetest()
        {
                $data = array("action" => "deletetest","testid"=>$_POST['testid']);
                $data_string = json_encode($data);
		$crl=curl_init();
		curl_setopt($crl, CURLOPT_URL,"http://web.njit.edu/~bj48/sqlaction.php");
		curl_setopt($crl, CURLOPT_POSTFIELDS, $data_string );
		curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($crl);

		curl_close($crl);
		//$result = json_decode($result, true);
		
		//$res = json_decode($result, true);

		$a = json_decode($result,true);
                return $a;
        }
}

?>