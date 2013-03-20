<?php

    $version = "BlaGentoo 0.0.1";

	function read_stdin()
	{
        	$fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
	        $input = fgets($fr,128);        // read a maximum of 128 characters
	        $input = rtrim($input);         // trim any trailing spaces.
        	fclose ($fr);                   // close the file handle
	        return $input;                  // return the text entered
	}

    $input = read_stdin();
    $input = explode(" ", $input, 10);
    $counter = 0;
    $url= "https://www.google.co.uk/#hl=en&sclient=psy-ab&q=site:forums.gentoo.org+OR+site:gentoo-wiki.com+OR+site:gentoo.org/doc";
    $cFlag = true;
    while(sizeof($input) > $counter && $cFlag)
    { 
        switch($input[$counter])
        {
            case "-v":
            case "--version":
                echo $version . "\n";
                $cFlag = false;
                break;
            case "-h":
            case "--help":
                echo "Help Placeholder\n";
                $cFlag = false;
                break;
            default:
                $url .= "+" . $input[$counter];
                $counter++;
                break;
        }
    }
    if($cFlag == true)
    {
        echo $url . "\n";
    }
?>
