<?php
    class Form
    
    {

       public function input($value)
       {
            $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
            echo "<" . "input  " . "$a" . ">";
            echo "<br>";
       }

       public function submit($value)
       {
         $value = implode(",", $value);
         echo "<" . "button  "  . "type = &quot;submit&quot; ".">" ."$value". "</button>";
         echo "<br>";
       }

       public function password($value)
       {
        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "<" . "input  " . "type = &quot;password&quot; "."$a". ">";
        echo "<br>";
       }

       public function textarea($value)
       {
        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "<" . "textarea  " . "$a". ">". "</textarea>";
        echo "<br>";
       }

       public function open($value)
       {
        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "<" . "form  " ."$a". ">";
        echo "<br>";
       }

       public function close()
       {
           echo "<" ."/form" .">";
           echo "<br>";
       }
    }
    Class SmartForm extends Form
    {
        public $name;
        public $pass;
        public $textarea;
        public function Save()
        {
            /*
            if(!empty($_POST['name'] && $_POST['pass'] && $_POST['textarea']))
            {
                $this->name = $_POST['name'];
                $this->pass = $_POST['pass'];
                $this->textarea = $_POST['textarea'];
                var_dump($_POST);
            }
            */
            if(!empty($_POST['name'])){
                $this->name = $_POST['name'];
                echo "name:" . $_POST['name'] ."<br>";
            }
            if(!empty($_POST['pass'])){
                $this->pass = $_POST['pass'];
                echo "pass:" . $_POST['pass'] ."<br>";
            }
            if(!empty($_POST['textarea'])){
                $this->textarea = $_POST['textarea'];
                echo "textarea:" . $_POST['textarea'] ."<br>";
            }
        }
    }
    class Cookie
    {
        protected $name;

        public function set($name)
        {
            setcookie("$name", "Cookie content",time()+600);
            $this->name = $name;
        }

        public function get()
        {
            return $this->name;
        }

        public function del()
        {
            unset($_COOKIE['NewNameOFCookie']);
        }

    }

    class Session
    {
        public function __construct()
        {
            //session_name("MySession");
            //session_id("QWERTY");
            session_start();
            $a = session_id();
            echo "id Сессии: " . "$a". "<br>";                      
        }

        public function set()
        {
            
        }
        public function get()
        {
            
        }
        public function del()
        {
            session_destroy();
        }

        public function checkisset()
        {

        }

    }
    class Flash

    {
        public $name;
        public $pass;
        public $textarea;
        public function setMessage()
        {
            if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['textarea'])){

            
            if(!empty($_POST['name'] && $_POST['pass'] && $_POST['textarea'])){
            
                $_SESSION['Complete'] = "Все сохранено";
                //var_dump($_SESSION);
            }
        }
        }
        public function getMessage()
        {
            if(!empty($_SESSION['Complete'])){

                echo $_SESSION['Complete'];
            }
        }
    }

    class Db

    {
        public static function getData()
        {
            
        }
        public function delData()
        {

        }
        public function rewriteData()
        {

        }
        public static function calcData()
        {

        }
        public function clearTable()
        {

        }
        public function clearTables()
        {

        }

    }
    class Log
    {
        public function saveInLog()
        {

        }
        public static function getLastN()
        {

        } 
        public function clearLogTable()
        {

        }
    }
    


    /*
$test = new Form;
$test->input(['type'=>'text', 'value'=>'3234', 'class'=>'ggg']);
$test->password(['value'=>'3232']);
$test->submit(['value'=>'go']);
$test->textarea(['placeholder'=>'123', 'value'=>'21312']);
$test->open(['action'=>'index.php', 'method'=>'POST']);
$test->close();
*/

$form = new Form;
$form->open(['action'=>'task5.php', 'method'=>'POST'], ['enctype' =>'multipart/form-data']);
$form->input(['type'=>'text', 'placeholder'=>"Your name", 'name'=>'name']);
$form->password(['placeholder'=>'Your pass', 'name'=>'pass']);
$form->textarea(['placeholder'=>'123 321', 'value'=>'21312','name'=>'textarea']);
$form->submit(['value'=>'Send']);
$form->close();
$Ses = new Session;
$Cookie = new Cookie;
$Cookie->set("NewNameOfCookie");
 echo $Cookie->get();
echo "<br>";
$SmartForm = new SmartForm;
$SmartForm->Save();
echo "<br>";
$flash = new Flash;
$flash->setMessage();
$flash->getMessage();
//$Cookie->get();
//$Ses->del();
//$Ses->del();
/*
?>
<?php
if(!empty($_POST['sometext']))
{
    $_COOKIE["inputcontent"] = $_POST['sometext'];
    var_dump($_POST['sometext']);
    echo "<br>";
    echo "------------------------" . "<br>";
    var_dump($_COOKIE["inputcontent"]);
    echo "<br>";
    echo "------------------------" . "<br>";
    var_dump($_COOKIE);
}

?>
*/

