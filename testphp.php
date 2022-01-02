<?php    
define ("ROOT_LOCATION","/testphp/testphp.php");
// 1-show phpinfo in browser
echo phpinfo();

// 2-check display error equal 1 in two different way
echo "<br><span style='color:red'>2- display error</span><br>";
// a-first way  
echo "<br><span> 1-in file php.ini make display_errors = on</span><br>";
// in file php.ini make
// display_errors = on

// a-second way 
// if you don't have access to php.ini change the follwing value in .htaccess
//php_flag display_errors 1
echo "<br><span > 2-if you don't have access to php.ini change the follwing value in .htaccess php_flag display_errors 1</span><br>";

// 3- Use constants to display your website name which mustn’t change across your pages
echo "<br><span style='color:red'>3- website name</span><br>";
$directory = ROOT_LOCATION;
echo "<br><span style='color:green'>website name : $directory</span><br>";

// 4- Show your server name, address, port,filename and path of the currently executing script
echo "<br><span style='color:red'>4</span>";
echo "<br><span style='color:red'>Server name</span><br>";
echo $_SERVER['SERVER_NAME'];
echo "<br><span style='color:red'>address</span><br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br><span style='color:red'>port</span><br>";
echo $_SERVER['SERVER_PORT'];
echo "<br><span style='color:red'>filename</span><br>";
//$path = 'subdir/file.php';
//$result = $_SERVER['DOCUMENT_ROOT'] . '/' . $path;
//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['DOCUMENT_ROOT'];
$path =  __FILE__;
$file2 = basename($path, ".php");
echo $file2;
echo "<br><span style='color:red'>path</span><br>";
echo __FILE__;

// 5-Display the output of for,while,do while and foreach fn code from demo file 
echo "<br><span style='color:red'>5</span>";
//for loop
echo "<br><span style='color:red'>for</span><br>";
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10; //$a=$a+10
   $b += 5;
}

echo ("At the end of the loop a = $a and b = $b" ); //a = 50, b=25

//while loop
echo "<br><span style='color:red'>while</span><br>";
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}

echo ("Loop stopped at i = $i and num = $num" ); // i = 10 , num =40


//do...while
echo "<br><span style='color:red'>do while</span><br>";
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         
         echo ("Loop stopped at i = $i" ); // i=10



//foreach
echo "<br><span style='color:red'>for each</span><br>";
$array = array( 1, 2, 3, 4, 5);
        
foreach( $array as $value ) {
   echo "Value is $value <br />";
} 

// 6 - switch case 
echo "<br><span style='color:red'>6-switch case</span><br>";
$age=10;
switch ($age) {
    case ($age <5 ):
        echo "Stay at home";
        break;
    case ($age == 5 ):
        echo "Go to Kindergarden";
        break;
    case ($age < 12 && $age >6 ):
        $x = $age - 6;
        echo "Go to grade : $x";
        break;
}






?>