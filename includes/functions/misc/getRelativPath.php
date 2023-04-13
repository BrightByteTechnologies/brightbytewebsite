<?php
function getRelativePath($fromPath, $toPath) {
    //Beispiel mit :
    // A) rooms\storageroom\storageroom.php
    // B) includes\navbar\navbar-style.css'
    $from = explode('/', str_replace('\\', '/', $fromPath));  // Split path A into its component parts
    $to = explode('/', str_replace('\\', '/', $toPath));      // Split path B into its component parts
    $relPath = '';                                           // Initialize the relative path to an empty string
    $i = 0;                                                  // Initialize a counter to keep track of how many directories the paths have in common
    //$from = array('rooms', 'storageroom', 'storageroom.php');
    //$to = array('includes', 'navbar', 'navbar-style.css');


    // Find the common directories between path A and path B
    while (isset($from[$i]) && isset($to[$i]) && $from[$i] == $to[$i]) {
        $i++;
    }
    // $i = 0

    // For each directory in path A that is not part of the common directories, add '../' to the relative path
    // ('rooms', 'storageroom') the file gets excluded trough the -1
    for ($j = $i; $j < count($from) - 1; $j++) {  // exclude the last directory in $from
        if ($from[$j] != '') {  // Ignore empty parts of the path
            $relPath .= '../';
        }
    }
    // $relPath = ../../

    // For each directory in path B that is not part of the common directories, add the directory to the relative path
    // ('includes', 'navbar') the file gets excluded trough the -1
    for ($j = $i; $j < count($to) - 1; $j++) {  // exclude the last directory in $to
        if ($to[$j] != '') {  // Ignore empty parts of the path
            $relPath .= $to[$j] . '/';
        }
    }
    // $relPath = ../../includes/navbar/

    if (!empty($to) && !empty($from) && $to[count($to) - 1] != $from[count($from) - 1]) {
        $relPath .= $to[count($to) - 1];
    }
    // $relPath = ../../includes/navbar/navbar-style.css/

    // Remove the trailing '/' from the relative path
    $relPath = rtrim($relPath, '/');
    // $relPath = ../../includes/navbar/navbar-style.css

    return $relPath;
}

?>
