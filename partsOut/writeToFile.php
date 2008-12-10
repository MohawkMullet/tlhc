<?php
include('parts/array2.php');
?>
<?php umask(0); ?>
<?php
$dirLabel = "$theGoods[3]";
mkdir( "inventory/$dirLabel", 0755);
$filename = "inventory/$dirLabel/$theGoods[0].htm";
//$somecontent = "Add this to the file or dont\n";
//mkdir( '$dirname', 0777);
if ( !file_exists($filename)){
        touch ($filename);
}
// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {
    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }
    // Write $somecontent to our opened file.
        if (fwrite($handle, $theGoods[0]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
    if (fwrite($handle, $theGoods[1]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[2]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[3]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[4]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[5]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[6]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[7]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[8]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[9]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[10]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[11]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[12]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[13]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
        if (fwrite($handle, $theGoods[14]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
            if (fwrite($handle, $theGoods[15]) === FALSE) {
       echo "Cannot write to file ($filename)";
        exit;
    }
//foreach ($theGoods as $details) {
//	print "$details";
//	}
    echo "Info about this 45 has been saved to <a href=\"inventory/$dirLabel\">$dirLabel</a>";

    fclose($handle);

} else {
    echo "The file $filename is not writable";
}
?>