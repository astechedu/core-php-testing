<?php
# PHp Function For  PHP Interviews

//Interview: 

//Wesite: https://tutorialsclass.com/faqs/php/php-string-interview-questions-answers/


//----------STRING FUNCTIONS -- ---------------------------------



//Data Types in php

//Integers: are whole numbers, without a decimal point, like 2567
//Doubles: are floating-point numbers, like 1.5 or 134.153
//Booleans: have only two possible values either true or false
//NULL: is a special type that only has one value: NULL
//Strings: is a sequence of characters, like “Hello PHP!”
//Arrays: stores multiple values in one single variable
//Objects: instances of user-defined classes
//Resources: are special variables that hold references to resources such as database calls


/* For YouTube Videos
$a=5;
$b=5;
$p="+";
$e="=";
$c=$a+$b;

echo  $a,$p,$b,$e,$c;

print $c;  //only

if(print($c) == 10){
   echo "Right Answer"; 
}

*/


/*
$apos = "This is my name.";
$findpos='e';
$strpos = strpos($apos,$findpos);

if($strpos !== false) {
  echo "Found Position of ".$findpos." is ".$strpos.".";
}else{
  echo "Position of ".$findpos. ", not found";
}
*/


//Q: Single Quote, Double Quote

//ANS: PHP single quotes execute slightly faster than double quotes but a single quote does not parse variables. Here is the difference between a single quote and double quote string in PHP:




//Website: https://tutorialsclass.com/faqs/php/php-string-interview-questions-answers/

//removes space & predefined characters from both sides of given string. Or from left or right
//String function : trim(), ltrimc(), rtrim()
//String Functions:  strpos(), ucwords(), strlen()


//Important array functions examples: Good

//keys:  tuple, weakMap(), rcursion, fctorial, 



//Testing 

$a = array('a','b','c');
$a1 = array('a','b','c');
$a2 = array('a1','b1','c1');

$b = array("name" => "ajay", "city" => "dehradun", "country" => "india");
$b1 = array("product_name" => "laptop", "product_code" => "a0pcd", "product_price" => "33");
$b2 = array("emp_name" => "rohan", "emp_city" => "dehli", "emp_country" => "shri lanka");
  



//Sorting array: Don't save array in another array then show result otherwise showing 1
//Sorting of numeric or associative array
//sort(), , rsort(), asort(), arsort(), ksort(), krsort(), uksort(), nasort()

$asr0 = array(2, 5, 7, 9, 10);
$asr1 = array( 'a','b','z','t','n');
$asr2 = array( 'a'=>'ajay','b'=>'sunu','z'=>'amit');


//Sorting values in ascending order
//sort($asr0);
//echo "<pre>";print_r($asr0);

//Sorting values in descending order
//sort($asr0);
//echo "<pre>";print_r($asr0);

//If we use sort() and rsort() associative array's keys converted in numeric keys


//ksort($asr0);
//echo "<pre>";print_r($asr0);


//asort(), arsort(): Sorting Values
//Sorting values of a array in Ascending order
//asort($asr2);
//echo "<pre>";print_r($asr2);

//Sorting values of a array in Descending order
//arsort($asr2);
//echo "<pre>";print_r($asr2);


//asort($asr1);
//echo "<pre>";print_r($asr1);


//ksort(), krsort(): Sorting Keys
//ksort($asr2);
//echo "<pre>";print_r($asr2);













//
//array_keys()
//$new = array_keys($b);
//echo "<pre>"; print_r($new);

//------------------------------------------
//array_combine() : firstArray as Key => SecondArray as Value
//$combine = array_combine($a,$a2);
//echo "<pre>";print_r($combine);		

//------------------------------------------
//array_merge(): FirstAarray -then- SecondArray
//$merge = array_merge($a,$b);
//echo "<pre>";print_r($merge);		

//------------------------------------------
//array_key_exists()

//$check_key = array_key_exists('a',$a);
//print_r($check_key);		

/*
if (array_key_exists('name',$b))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }

 */

  //Key, Values in this array
  //$bb=array("Volvo"=>"XC90","BMW"=>"X5");

  //Only Values in this array Key: 0,1
  /*
  $aa=array("Volvo","BMW");

if (array_key_exists(0,$aa))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
 */
 

//Check value in a array

/*
if (in_array('ajay',$b))
  {
  echo "Value exists!";
  }
else
  {
  echo "Value does not exist!";
  }
 */


//---------------------------------------------
//array_fill()
//$a1=array_fill(3,4,"blue");
//echo "<pre>";print_r($a1);


//echo "<pre>";print_r(array_fill(0,5,'?'));


//array_keys($products_in_cart)

/*
$arr = array('k1','k2','k3','k4');
$ques = array_fill(0,count($arr),'?');
$ae = implode(',', $ques);
echo "<pre>"; print_r($ae);

*/

//---------------------------------------------


//Filtr : 
//Good Examples: https://www.phptutorial.net/php-tutorial/php-array-filter/

//Ex 01 Without filter function 
/*
$numbers = [1, 2, 3, 4, 5];
$odd_numbers = [];

foreach ($numbers as $number) {
	if ($number % 2 === 1) {
		$odd_numbers[] = $number;
	}
}

echo "<pre>";print_r($odd_numbers);
*/

//Ex 02 with filter function
/*
$numbers = [1, 2, 3, 4, 5];

$odd_numbers = array_filter(
	$numbers,
	function ($number) {              // Or User This, fn ($number) => $number % 2 === 1
		return $number % 2 === 1;
	}
);

echo "<pre>";print_r($odd_numbers);
*/

//------------------------------------------------


//----------------------------------------------
//array_merge_recursive(), (recursive: पुनरावर्ती)

/*
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");

echo "<pre>";print_r(array_merge_recursive($a1,$a2));
*/

//----------------------------------------------

//$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel","Alto");
//echo "<pre>";print_r(array_chunk($cars,2));

//----------------------------------------------

//----------------------------------------------
//array_map()

/*
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
echo "<pre>";print_r(array_map("myfunction",$a));
*/

//------------------------------------------------------------
//str_replace('quantity-', '', $k);

//echo str_replace("world","Peter","Hello world!");
//echo str_replace("quantity-", " ", "quantity-");






//array_shift(); array_push(), array_pop(), array_walk(), array_reduce(),



//----------------------------------------------------------------


//str_split()
//echo "<pre>";print_r(str_split("Hello"));


//----------------------------------------------------------------

//arsort(), asort(), compact(), count()


/* PHP Arrays
array_column(input, column_key);
array_flip(trans);
array_intersect(array1, array2);
array_multisort(arr);
array_pad(input, pad_size, pad_value);
array_pop(array);
array_product(array);
array_push(array, var);
array_rand(input);
array_reduce(input, function);
array_search(needle, haystack);
array_splice(input, offset);
array_sum(array);
array_udiff(array1, array2);
array_uintersect(array1, array2);
array_unique(array);
array_unshift(array, var);
array_count_values(input);
array_diff_assoc(array1, array2);
array_walk_recursive(input, funcname);
array_merge_recursive(array1);
array_change_key_case(input);
array_walk_recursive(input, funcname);
*/




//Functions 

//Find the factorial
/*
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";

*/

//Factorial using function 

/*
function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
  
echo "Factorial of 6 is " .fact(6);  
*/


//Recursion

/*
function NaturalNumbers($number) {    

  if($number<=10){    

    echo "$number <br/>";    

    NaturalNumbers($number+1);   
  }  
}    
 
NaturalNumbers(1);    
*/




//array_diff(); Compare the values of two arrays, and return the differences:
/*
$names            = 'Harry George Bill David Sam Jimmy';

$namesArray       = explode(' ', $names);

$namesWithoutBill = array_diff($namesArray, array('Bill'));

echo "<pre>";print_r($namesArray);

echo "<br>";

echo "<pre>";print_r($namesWithoutBill);
*/





//Remove elements from an array and replace it with new elements:
/*
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);

print_r($a1);
*/



//More PHP array function 
/*
preg_replace ()
json_encode ()
preg_match ()
unserialize ()
serialize ()
hex2bin ()
uniqid ()
array ()
json_decode ()
iconv ()
preg_replace_callback ()
utf8_decode ()
preg_match_all ()
str_replace ()
strtotime ()

password_hash ()
array_change_key_case ()
sort ()
long2ip ()
preg_replace ()
floor ()
mb_convert_encoding ()
file_get_contents ()
sha1 ()
array_unique ()
base64_encode ()
array_intersect_key ()
json_encode ()
strlen ()
json_decode () 

*/



//Website Link: https://onlinephp.io/categories 

//Arrays
/*

    array - Create an array
    array_change_key_case - Changes the case of all keys in an array
    array_chunk - Split an array into chunks
    array_column - Return the values from a single column in the input array
    array_combine - Creates an array by using one array for keys and another for its values
    array_count_values - Counts all the values of an array
    array_diff - Computes the difference of arrays
    array_diff_assoc - Computes the difference of arrays with additional index check
    array_diff_key - Computes the difference of arrays using keys for comparison
    array_fill - Fill an array with values
    array_fill_keys - Fill an array with values, specifying keys
    array_flip - Exchanges all keys with their associated values in an array
    array_intersect - Computes the intersection of arrays
    array_intersect_assoc - Computes the intersection of arrays with additional index check
    array_intersect_key - Computes the intersection of arrays using keys for comparison
    array_is_list - Checks whether a given [array] is a list
    array_key_exists - Checks if the given key or index exists in the array
    array_key_first - Gets the first key of an array
    array_key_last - Gets the last key of an array
    array_keys - Return all the keys or a subset of the keys of an array
    array_merge - Merge one or more arrays
    array_merge_recursive - Merge one or more arrays recursively
    array_multisort - Sort multiple or multi-dimensional arrays
    array_pad - Pad array to the specified length with a value
    array_pop - Pop the element off the end of array
    array_product - Calculate the product of values in an array
    array_push - Push one or more elements onto the end of array
    array_rand - Pick one or more random keys out of an array
    array_replace - Replaces elements from passed arrays into the first array
    array_replace_recursive - Replaces elements from passed arrays into the first array recursively
    array_reverse - Return an array with elements in reverse order
    array_search - Searches the array for a given value and returns the first corresponding key if successful
    array_shift - Shift an element off the beginning of array
    array_slice - Extract a slice of the array
    array_splice - Remove a portion of the array and replace it with something else
    array_sum - Calculate the sum of values in an array
    array_unique - Removes duplicate values from an array
    array_unshift - Prepend one or more elements to the beginning of an array
    array_values - Return all the values of an array
    arsort - Sort an array in descending order and maintain index association
    asort - Sort an array in ascending order and maintain index association
    count - Counts all elements in an array or in a Countable object
    in_array - Checks if a value exists in an array
    krsort - Sort an array by key in descending order
    ksort - Sort an array by key in ascending order
    natcasesort - Sort an array using a case insensitive "natural order" algorithm
    natsort - Sort an array using a "natural order" algorithm
    range - Create an array containing a range of elements
    rsort - Sort an array in descending order
    sort - Sort an array in ascending order



*/


//BCMath: //Website Link: https://onlinephp.io/categories 
/*

    bcadd - Add two arbitrary precision numbers
    bccomp - Compare two arbitrary precision numbers
    bcdiv - Divide two arbitrary precision numbers
    bcmod - Get modulus of an arbitrary precision number
    bcmul - Multiply two arbitrary precision numbers
    bcpow - Raise an arbitrary precision number to another
    bcpowmod - Raise an arbitrary precision number to another, reduced by a specified modulus
    bcscale - Set or get default scale parameter for all bc math functions
    bcsqrt - Get the square root of an arbitrary precision number
    bcsub - Subtract one arbitrary precision number from another


*/

//Calendar: //Website Link: https://onlinephp.io/categories 
/*

    cal_days_in_month - Return the number of days in a month for a given year and calendar
    cal_from_jd - Converts from Julian Day Count to a supported calendar
    cal_info - Returns information about a particular calendar
    cal_to_jd - Converts from a supported calendar to Julian Day Count
    easter_date - Get Unix timestamp for midnight on Easter of a given year
    easter_days - Get number of days after March 21 on which Easter falls for a given year
    frenchtojd - Converts a date from the French Republican Calendar to a Julian Day Count
    gregoriantojd - Converts a Gregorian date to Julian Day Count
    jddayofweek - Returns the day of the week
    jdmonthname - Returns a month name
    jdtofrench - Converts a Julian Day Count to the French Republican Calendar
    jdtogregorian - Converts Julian Day Count to Gregorian date
    jdtojewish - Converts a Julian day count to a Jewish calendar date
    jdtojulian - Converts a Julian Day Count to a Julian Calendar Date
    jdtounix - Convert Julian Day to Unix timestamp
    jewishtojd - Converts a date in the Jewish Calendar to Julian Day Count
    juliantojd - Converts a Julian Calendar date to Julian Day Count
    unixtojd - Convert Unix timestamp to Julian Day


*/

//Cryptography and Hashing: //Website Link: https://onlinephp.io/categories 
/*

    hash - Generate a hash value (message digest)
    hash_algos - Return a list of registered hashing algorithms
    hash_equals - Timing attack safe string comparison
    hash_hkdf - Generate a HKDF key derivation of a supplied key input
    hash_hmac - Generate a keyed hash value using the HMAC method
    hash_hmac_algos - Return a list of registered hashing algorithms suitable for hash_hmac
    hash_pbkdf2 - Generate a PBKDF2 key derivation of a supplied password
    random_bytes - Generates cryptographically secure pseudo-random bytes
    random_int - Generates cryptographically secure pseudo-random integers


*/


//Custom tools: https://onlinephp.io/categories
/*
  IP Address finder - Shows your current IP address and hostname
  Password Generator - Create a secure password with this simple online tool



*/


//Date and Time:  https://onlinephp.io/categories
/*

    checkdate - Validate a Gregorian date
    date - Format a local time/date
    getdate - Get date/time information
    gettimeofday - Get current time
    gmdate - Format a GMT/UTC date/time
    gmmktime - Get Unix timestamp for a GMT date
    gmstrftime - Format a GMT/UTC time/date according to locale settings
    hrtime - Get the system's high resolution time
    idate - Format a local time/date as integer
    localtime - Get the local time
    microtime - Return current Unix timestamp with microseconds
    mktime - Get Unix timestamp for a date
    strftime - Format a local time/date according to locale settings
    strptime - Parse a time/date generated with strftime
    strtotime - Parse about any English textual datetime description into a Unix timestamp
    time - Return current Unix timestamp


*/

//Filesystem: //Website Link: https://onlinephp.io/categories 
/*

    basename - Returns trailing name component of path
    file_get_contents - Reads entire file into a string
    file_put_contents - Write data to a file
    pathinfo - Returns information about a file path


*/

//General: //Website Link: https://onlinephp.io/categories 
/*

    hex2bin - Decodes a hexadecimally encoded binary string
    json_decode - Decodes a JSON string
    json_encode - Returns the JSON representation of a value
    pack - Pack data into binary string
    serialize - Generates a storable representation of a value
    token_name - Get the symbolic name of a given PHP token
    uniqid - Generate a unique ID
    unpack - Unpack data from binary string
    unserialize - Creates a PHP value from a stored representation
    zlib_decode - Uncompress any raw/gzip/zlib encoded data
    zlib_encode - Compress data with the specified encoding


*/

//iconv: //Website Link: https://onlinephp.io/categories 
/*

    iconv_get_encoding - Retrieve internal configuration variables of iconv extension
    iconv_mime_decode - Decodes a MIME header field
    iconv_mime_decode_headers - Decodes multiple MIME header fields at once
    iconv_mime_encode - Composes a MIME header field
    iconv_strlen - Returns the character count of string
    iconv_strpos - Finds position of first occurrence of a needle within a haystack
    iconv_strrpos - Finds the last occurrence of a needle within a haystack
    iconv_substr - Cut out part of a string


*/

//Language and Character Encoding: //Website Link: https://onlinephp.io/categories 
/*

    idn_to_ascii - Convert domain name to IDNA ASCII form
    idn_to_utf8 - Convert domain name from IDNA ASCII to Unicode


*/

//Math: //Website Link: https://onlinephp.io/categories 
/*

    abs - Absolute value
    acos - Arc cosine
    acosh - Inverse hyperbolic cosine
    asin - Arc sine
    asinh - Inverse hyperbolic sine
    atan - Arc tangent
    atan2 - Arc tangent of two variables
    atanh - Inverse hyperbolic tangent
    base_convert - Convert a number between arbitrary bases
    bindec - Binary to decimal
    ceil - Round fractions up
    cos - Cosine
    cosh - Hyperbolic cosine
    decbin - Decimal to binary
    dechex - Decimal to hexadecimal
    decoct - Decimal to octal
    deg2rad - Converts the number in degrees to the radian equivalent
    exp - Calculates the exponent of e
    expm1 - Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
    fdiv - Divides two numbers, according to IEEE 754
    floor - Round fractions down
    fmod - Returns the floating point remainder (modulo) of the division of the arguments
    getrandmax - Show largest possible random value
    hexdec - Hexadecimal to decimal
    hypot - Calculate the length of the hypotenuse of a right-angle triangle
    intdiv - Integer division
    is_finite - Finds whether a value is a legal finite number
    is_infinite - Finds whether a value is infinite
    is_nan - Finds whether a value is not a number
    lcg_value - Combined linear congruential generator
    log - Natural logarithm
    log10 - Base-10 logarithm
    log1p - Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
    max - Find highest value
    min - Find lowest value
    mt_getrandmax - Show largest possible random value
    mt_rand - Generate a random value via the Mersenne Twister Random Number Generator
    mt_srand - Seeds the Mersenne Twister Random Number Generator
    octdec - Octal to decimal
    pi - Get value of pi
    pow - Exponential expression
    rad2deg - Converts the radian number to the equivalent number in degrees
    rand - Generate a random integer
    round - Rounds a float
    sin - Sine
    sinh - Hyperbolic sine
    sqrt - Square root
    srand - Seed the random number generator
    tan - Tangent
    tanh - Hyperbolic tangent


*/

//Multibyte String: //Website Link: https://onlinephp.io/categories 
/*

    mb_check_encoding - Check if strings are valid for the specified encoding
    mb_chr - Return character by Unicode code point value
    mb_convert_case - Perform case folding on a string
    mb_convert_encoding - Convert a string from one character encoding to another
    mb_convert_kana - Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
    mb_decode_mimeheader - Decode string in MIME header field
    mb_decode_numericentity - Decode HTML numeric string reference to character
    mb_detect_encoding - Detect character encoding
    mb_encode_mimeheader - Encode string for MIME header
    mb_encode_numericentity - Encode character to HTML numeric string reference
    mb_encoding_aliases - Get aliases of a known encoding type
    mb_ereg - Regular expression match with multibyte support
    mb_ereg_match - Regular expression match for multibyte string
    mb_ereg_replace - Replace regular expression with multibyte support
    mb_eregi - Regular expression match ignoring case with multibyte support
    mb_eregi_replace - Replace regular expression with multibyte support ignoring case
    mb_get_info - Get internal settings of mbstring
    mb_http_input - Detect HTTP input character encoding
    mb_http_output - Set/Get HTTP output character encoding
    mb_ord - Get Unicode code point of character
    mb_split - Split multibyte string using regular expression
    mb_str_split - Given a multibyte string, return an array of its characters
    mb_strcut - Get part of string
    mb_strimwidth - Get truncated string with specified width
    mb_stripos - Finds position of first occurrence of a string within another, case insensitive
    mb_stristr - Finds first occurrence of a string within another, case insensitive
    mb_strlen - Get string length
    mb_strpos - Find position of first occurrence of string in a string
    mb_strrchr - Finds the last occurrence of a character in a string within another
    mb_strrichr - Finds the last occurrence of a character in a string within another, case insensitive
    mb_strripos - Finds position of last occurrence of a string within another, case insensitive
    mb_strrpos - Find position of last occurrence of a string in a string
    mb_strstr - Finds first occurrence of a string within another
    mb_strtolower - Make a string lowercase
    mb_strtoupper - Make a string uppercase
    mb_strwidth - Return width of string
    mb_substr - Get part of string
    mb_substr_count - Count the number of substring occurrences


*/

//Network: //Website Link: https://onlinephp.io/categories 
/*

    gethostbyaddr - Get the Internet host name corresponding to a given IP address
    gethostbyname - Get the IPv4 address corresponding to a given Internet host name
    gethostbynamel - Get a list of IPv4 addresses corresponding to a given Internet host name
    getmxrr - Get MX records corresponding to a given Internet host name
    getservbyname - Get port number associated with an Internet service and protocol
    getservbyport - Get Internet service which corresponds to port and protocol
    ip2long - Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer
    long2ip - Converts an long integer address into a string in (IPv4) Internet standard dotted format


*/

//Output Buffering: //Website Link: https://onlinephp.io/categories 
/*
 ob_start - Turn on output buffering 

*/

//Password Hashing: //Website Link: https://onlinephp.io/categories 
/*

    password_algos - Get available password hashing algorithm IDs
    password_get_info - Returns information about the given hash
    password_hash - Creates a password hash
    password_needs_rehash - Checks if the given hash matches the given options
    password_verify - Verifies that a password matches a hash


*/

//Regular Expressions: //Website Link: https://onlinephp.io/categories 
/*

    preg_filter - Perform a regular expression search and replace
    preg_grep - Return array entries that match the pattern
    preg_match - Perform a regular expression match
    preg_match_all - Perform a global regular expression match
    preg_quote - Quote regular expression characters
    preg_replace - Perform a regular expression search and replace
    preg_replace_callback - Perform a regular expression search and replace using a callback
    preg_split - Split string by a regular expression


*/

//String Manipulation:  //Website Link: https://onlinephp.io/categories 
/*

    addcslashes - Quote string with slashes in a C style
    addslashes - Quote string with slashes
    bin2hex - Convert binary data into hexadecimal representation
    chr - Generate a single-byte string from a number
    chunk_split - Split a string into smaller chunks
    convert_cyr_string - Convert from one Cyrillic character set to another
    convert_uudecode - Decode a uuencoded string
    convert_uuencode - Uuencode a string
    count_chars - Return information about characters used in a string
    crc32 - Calculates the crc32 polynomial of a string
    crypt - One-way string hashing
    explode - Split a string by a string
    get_html_translation_table - Returns the translation table used by htmlspecialchars and htmlentities
    hebrev - Convert logical Hebrew text to visual text
    hebrevc - Convert logical Hebrew text to visual text with newline conversion
    html_entity_decode - Convert HTML entities to their corresponding characters
    htmlentities - Convert all applicable characters to HTML entities
    htmlspecialchars - Convert special characters to HTML entities
    htmlspecialchars_decode - Convert special HTML entities back to characters
    iconv - Convert a string from one character encoding to another
    implode - Join array elements with a string
    lcfirst - Make a string's first character lowercase
    levenshtein - Calculate Levenshtein distance between two strings
    localeconv - Get numeric formatting information
    ltrim - Strip whitespace (or other characters) from the beginning of a string
    md5 - Calculate the md5 hash of a string
    md5_file - Calculates the md5 hash of a given file
    metaphone - Calculate the metaphone key of a string
    money_format - Formats a number as a currency string
    nl_langinfo - Query language and locale information
    nl2br - Inserts HTML line breaks before all newlines in a string
    number_format - Format a number with grouped thousands
    ord - Convert the first byte of a string to a value between 0 and 255
    parse_str - Parses the string into variables
    print - Output a string
    printf - Output a formatted string
    quoted_printable_decode - Convert a quoted-printable string to an 8 bit string
    quoted_printable_encode - Convert a 8 bit string to a quoted-printable string
    quotemeta - Quote meta characters
    rtrim - Strip whitespace (or other characters) from the end of a string
    sha1 - Calculate the sha1 hash of a string
    sha1_file - Calculate the sha1 hash of a file
    similar_text - Calculate the similarity between two strings
    soundex - Calculate the soundex key of a string
    sprintf - Return a formatted string
    sscanf - Parses input from a string according to a format
    str_contains - Determine if a string contains a given substring
    str_ends_with - Checks if a string ends with a given substring
    str_getcsv - Parse a CSV string into an array
    str_ireplace - Case-insensitive version of str_replace
    str_pad - Pad a string to a certain length with another string
    str_repeat - Repeat a string
    str_replace - Replace all occurrences of the search string with the replacement string
    str_rot13 - Perform the rot13 transform on a string
    str_shuffle - Randomly shuffles a string
    str_split - Convert a string to an array
    str_starts_with - Checks if a string starts with a given substring
    str_word_count - Return information about words used in a string
    strcasecmp - Binary safe case-insensitive string comparison
    strcmp - Binary safe string comparison
    strcoll - Locale based string comparison
    strcspn - Find length of initial segment not matching mask
    strip_tags - Strip HTML and PHP tags from a string
    stripcslashes - Un-quote string quoted with addcslashes
    stripos - Find the position of the first occurrence of a case-insensitive substring in a string
    stripslashes - Un-quotes a quoted string
    stristr - Case-insensitive strstr
    strlen - Get string length
    strnatcasecmp - Case insensitive string comparisons using a "natural order" algorithm
    strnatcmp - String comparisons using a "natural order" algorithm
    strncasecmp - Binary safe case-insensitive string comparison of the first n characters
    strncmp - Binary safe string comparison of the first n characters
    strpbrk - Search a string for any of a set of characters
    strpos - Find the position of the first occurrence of a substring in a string
    strrchr - Find the last occurrence of a character in a string
    strrev - Reverse a string
    strripos - Find the position of the last occurrence of a case-insensitive substring in a string
    strrpos - Find the position of the last occurrence of a substring in a string
    strspn - Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask
    strstr - Find the first occurrence of a string
    strtok - Tokenize string
    strtolower - Make a string lowercase
    strtoupper - Make a string uppercase
    strtr - Translate characters or replace substrings
    strval - Get string value of a variable
    substr - Return part of a string
    substr_compare - Binary safe comparison of two strings from an offset, up to length characters
    substr_count - Count the number of substring occurrences
    substr_replace - Replace text within a portion of a string
    trim - Strip whitespace (or other characters) from the beginning and end of a string
    ucfirst - Make a string's first character uppercase
    ucwords - Uppercase the first character of each word in a string
    utf8_decode - Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable characters
    utf8_encode - Converts a string from ISO-8859-1 to UTF-8
    vprintf - Output a formatted string
    vsprintf - Return a formatted string
    wordwrap - Wraps a string to a given number of characters


*/
    


//Urls: //Website Link: https://onlinephp.io/categories 
/*

    base64_decode - Decodes data encoded with MIME base64
    base64_encode - Encodes data with MIME base64
    get_meta_tags - Extracts all meta tag content attributes from a file and returns an array
    http_build_query - Generate URL-encoded query string
    parse_url - Parse a URL and return its components
    rawurldecode - Decode URL-encoded strings
    rawurlencode - URL-encode according to RFC 3986
    urldecode - Decodes URL-encoded string
    urlencode - URL-encodes string

*/


//-------------> Now Practice Here <----------------------------------    



?>


