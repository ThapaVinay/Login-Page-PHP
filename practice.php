<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> <?php echo "ToxinoTV" ?> </title>
</head>

<body>
    <h1>
        <?php echo "ToxinoTV"; ?>
    </h1>

    <div>
        <h2> PHP Tutorial </h2>
        <h3> 1. Variables in PHP </h3>
        <ul>
            <li> It starts with a $ sign</li>
            <li> cannot start with a number, must start with a number or underscore </li>
            <li> Variables in php are case insensitive </li>
        </ul>
        <h3> 2. Datatypes in PHP </h3>
        <ul>
            <li>var_dump is used to get the type of the data</li>
            <ul>
                <li id ="l" >Example : echo var_dump($x);</li>
            </ul>
            <li> array in PHP : <span id ="l">$arr = array("vinay", "thapa");</span> </li>
        </ul>
        <h3> 3. String function in PHP</h3>
        <ul>
            <li> "." is used to join strings in PHP</li>
            <li> Different functions are : </li>
            <ol type = "a" style = "font-size : 13px; font-style : italic;">
                <li>strlen : total length of the string </li>
                <li>str_word_count : counts total words </li>
                <li>strrev : reverses the string </li>
                <li>pre is used to show the string with spaces <pre style="width:200px; overflow:auto"> hello                vinay </pre></li>
            </ol> 
            <li><img src="string_functions.png" alt="String functions "></li> 
        </ul>
        <h3> 4. Associative arrays </h3>
        <ul>
            <li> It is same as dictionary in python where the array is not indexed </li>
            <ul>
                <li id ="l"> Example : $arr = array ("vinay" => "thapa"); </li>
            </ul>
        </ul>
        <h3> 5. Scope in PHP </h3>
        <ul>
            <li>We need to use global keyword to access global variables in local functions.</li>
            <li>$GLOBALS stores all the global variables in PHP</li>
        </ul>
    </div>
    <footer>
        <?php $d = date("dS F Y, g:i A");
        echo "Date :". $d;
        ?>
    </footer>


</body>

</html>