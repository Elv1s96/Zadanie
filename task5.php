<?php
    class Form
    
    {

       public function input($value)

       {

            //echo $cho=http_build_query($value,'',',');
            $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
            echo "&lt;" . "input  " . "$a" . "&gt;";
            echo "<br>";

       }

       public function submit($value)

       {

        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "&lt;" . "input  " . "type = &quot;submit&quot; "."$a". "&gt;";
        echo "<br>";

       }

       public function password($value)

       {

        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "&lt;" . "input  " . "type = &quot;password&quot; "."$a". "&gt;";
        echo "<br>";

       }

       public function textarea($value)

       {

        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "&lt;" . "textarea  " . "$a". "&lt;/textarea&gt;";
        echo "<br>";

       }

       public function open($value)

       {

        $a =  str_replace('=', '= "', http_build_query($value, null, '" ')) . '"';
        echo "&lt;" . "form  " ."$a". "&gt;";
        echo "<br>";

       }

       public function close()

       {

           echo "&lt;" ."/form" ."&gt;";
           echo "<br>";

       }
    }
    Class SmartForm extends Form

    {

        

    }
    class Cookie

    {

        public function set()

        {

            setcookie("SessionId", session_id(),time()+7200);

        }

        public function get()

        {

            var_dump($_COOKIE);

        }

        public function del()

        {



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
            echo $a;
           
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

        public function setMessage()

        {



        }
        
        public function getMessage()

        {



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
    


$test = new Form;
$test->input(['type'=>'text', 'value'=>'3234', 'class'=>'ggg']);
$test->password(['value'=>'3232']);
$test->submit(['value'=>'go']);
$test->textarea(['placeholder'=>'123', 'value'=>'21312']);
$test->open(['action'=>'index.php', 'method'=>'POST']);
$test->close();



//$form = new Form;
//$form->open(['action'=>'index.php', 'method'=>'POST']);
//$form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
//$form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
//$form->submit(['value'=>'Отправить']);
//$form->close();
$Ses = new Session;
$Cookie = new Cookie;
$Cookie->set();
$Cookie->get();
//$Ses->del();
//$Ses->del();
?>