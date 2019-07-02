<?php
session_start();
include_once("application/model/site_model.php");

class site {
	public $model;
	
	public function __construct()  
        {  
              $this->model = new site_model();
         } 
	
	public function index()
	{
		
            if(!isset($_POST['login'])) {
                include 'application/view/login.php';
            }
            else {
                $res =  $this->model->login();
                if($res['result']==true)
                {    
                    $_SESSION['login']='success';
                    $_SESSION['type'] = $res['type'];
                    $_SESSION['uid'] = $res['userid'];
                    $_SESSION['username'] = $res['username'];
                    header("location:http://web.njit.edu/~hs293/");
                }
                else
                {
                       
                      include_once 'application/view/login.php';
                }
              
            }
	}
        
        public function signup()
        {
          if(!isset($_POST['signup'])) {
                include 'application/view/signup.php';
            }
            else {
                $res =  $this->model->signup();
                 if($res['result']==true)
                {
                   header("location:success");
                }
                else
                {
                   
                    include 'application/view/signup.php';
                    
                }
                 
            }      
        
        }
        public function addques()
        {
            $subject =  $this->model->subjectlist();
            $weightege =  $this->model->weightegelist();
          if(!isset($_POST['addques'])) {
                
                            
                if(isset($subject))
                {
                    include 'application/view/addques.php';
                }
            }
            else {
                $res =  $this->model->addques();
                  include 'application/view/addques.php';
            }      
        
        }
        
         public function addtest()
        {
             $subject =  $this->model->subjectlist();
          if(!isset($_POST['addtest'])) {
                 
                $queslist = $this->model->getques();
                include 'application/view/addtest.php';
            }
            else {
                   
                $res =  $this->model->addtest();
                
                header("location:http://web.njit.edu/~hs293/index.php/site/testlists");
                 
            }      
        
        }
        
       public function result()
       {
             $testlist =  $this->model->gettestlist();
             include 'application/view/result.php';
             if(isset($_POST['show_result']))
             {
                 $_SESSION['show_result']=$_POST['testid'];
                 header("location:http://web.njit.edu/~hs293/index.php/site/showresult");
             }
       }
       
       public function showresult()
       {
          $testlist =  $this->model->showresult();  
          include 'application/view/showresult.php';
       }
       
       public function testlists()
       {
             $testlist=$this->model->getteachtest();
             include 'application/view/teachtest.php';
             if(isset($_POST['updtestresult']))
             {
                 $this->model->updtestresult();
                 header("location:http://web.njit.edu/~hs293/index.php/site/testlists");
             }
             if(isset($_POST['testdelete']))
             {
                 $this->model->deletetest();
                 header("location:http://web.njit.edu/~hs293/index.php/site/testlists");
             }
           
       }
       
        public function testlist()
        {
            $testlist =  $this->model->testlist();
            
            include_once 'application/view/testlist.php';
            if(isset($_POST['start']))
            {
                $_SESSION['starttestid'] = $_POST['testid'];
                header("location:http://web.njit.edu/~hs293/index.php/site/starttest");
            }
            
        }  
        
         public function quelist()
        {
            $queslist =  $this->model->quelist();    
            include_once 'application/view/queslist.php';
            if(isset($_POST['quedelete']))
            {
               $this->model->quedelete();
               include_once 'application/view/queslist.php';
            }
            
        }  
        
        public function starttest()
        {
             $sttest = $this->model->sttestdetail(); 
             $testdetail =  $this->model->testdetail(); 
             
             include_once 'application/view/starttest.php';
             
             if(isset($_POST['completetest']))
             {
                 $this->model->completetest(); 
                 unset($_SESSION['starttestid']);
                 header("location:http://web.njit.edu/~hs293/index.php/site/index");
             }
        }
        public function success()
        {
            include_once 'application/view/success.php';
        }
        
        public function logout()
        {
            include_once 'application/view/logout.php';
        }
        
        public function testresult()
        {
             $testlist =  $this->model->testlist(); 
             if(isset($_POST['stu_testlist']))
             {
                $testdata = $this->model->stutestresult();  
                
             }
             include_once 'application/view/testresult.php';
        }
        
       
}

?>