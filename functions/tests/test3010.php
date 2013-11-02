<?php


echo '<h2>http_build_query</h2>';
$data = array('foo'=>'bar',
              'baz'=>'boom',
              'cow'=>'milk',
              'php'=>'hypertext processor');

$data=array('ku4e','kotka','mishka');


echo http_build_query($data) . "\n";
echo '<br>';
echo http_build_query($data, '', '&amp;');
echo '<br>';
echo http_build_query($data,'fdd','&');
echo '<br><br><br><br>';

class parentClass {
    public    $pub      = 'publicParent';
    protected $prot     = 'protectedParent';
    private   $priv     = 'privateParent';
    public    $pub_bar  = Null;
    protected $prot_bar = Null;
    private   $priv_bar = Null;

    public function __construct(){
        $this->pub_bar  = new childClass();
        $this->prot_bar = new childClass();
        $this->priv_bar = new childClass();
    }
}

class childClass {
    public    $pub  = 'publicChild';
    public    $prot = 'protectedChild';
    private   $priv = 'privateChild';
}


$parent = new parentClass();

echo '<pre>'. print_r($parent,TRUE).'</pre>';;
echo http_build_query($parent);




echo '<h2>array_walk</h2>';

$fruits = array("pesho" => 2000, "gosho" => 5000, "niki" => 1000, "c" => 10000);

function test_alter(&$item1, $key, $prefix)
{
    $item1 =  $item1+ 100;
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');

var_dump($fruits);

echo '<h2>array_filter</h2>';



function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));


echo  8&14;






echo '<h2>crack_check</h2>';




//function cracklibCheck($password, &$message) 
//{ 
//    // Clean up password 
//    $password=str_replace("\r", "", $password); 
//    $password=str_replace("\n", "", $password); 
//
//    // Run password through cracklib-check 
//    exec("echo ".escapeshellarg($password)." | ./usr/sbin/cracklib-check 2>/dev/null", $output, $return_var); 
//    // Check it ran properly 
//    if($return_var==0) 
//    { 
//        if(preg_match("/^.*\: ([^:]+)$/", $output[0], $matches)) 
//        { 
//            // Check response 
//            if(strtoupper($matches[1])=="OK") 
//            { 
//                // Password is strong 
//                $message=""; 
//                return(true); 
//            } 
//            else 
//            { 
//                // Cracklib doesn't like it 
//                $message=$matches[1]; 
//                return(false); 
//            } 
//        } 
//        else 
//        { 
//            // Badly formatted response from cracklib-check. 
//            throw new Exception("Didn't understand cracklib-check response."); 
//        } 
//    } 
//    else 
//    { 
//        // Some sort of execution error 
//        throw new Exception("Failed to run cracklib-check."); 
//    } 
//} 
//
//
//$message= 'hahah';
//cracklibCheck('katerica',$message );

//
//echo '<h2>mail</h2>';
//
//$to      = 'hristo.stoyanov9@gmail.com';
//$subject = 'the subject';
//$message = 'Da go duhash maznio';
//$headers = 'From: zamestnikmetananeta@hahah.com' . "\r\n" .
//    'Reply-To: zamestnikmetananeta@hahah.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);


echo '<h2>error_log</h2>';



mysqli_connect('localhost', 'root', 'dsf', 'timing', 3306);
    error_log('Eba si maikata', 1, 'metaxoff@gmail.com');
