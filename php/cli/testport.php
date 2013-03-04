<?php
/**
 * This script is based on the testPort.php which is
 * originally distributed with WAMP Server 2.2
 *
 */
if (!(isset($argv[1]) && $port = intval($argv[1]))) {
    echo "Usage: 
        $argv[0] <port>";
    echo PHP_EOL;
} else {

    $fp = @fsockopen("127.0.0.1", $port, $errno, $errstr, 1);
    $out = "GET / HTTP/1.1\r\n";
    $out .= "Host: 127.0.0.1\r\n";
    $out .= "Connection: Close\r\n\r\n";
    if ($fp)
    {
        echo  'Your port ' . $port . ' is actually used by :

            ';
        fwrite($fp, $out);
        while (!feof($fp)) 
        {
            $line = fgets($fp, 128);
            if (preg_match('/Server: /',$line))
            {

                echo $line;
                $gotInfo = 1;
            }  

        }
        fclose($fp);
        if ($gotInfo != 1)
            echo 'Information not available (might be Skype).';
    }
    else
    {
        echo 'Your port ' . $port . ' is not actually used.';
    }
}

echo '

Press Enter to exit...';
trim(fgets(STDIN));


?> 

