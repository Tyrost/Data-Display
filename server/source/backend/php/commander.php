<?php 

function executePythonData($apiUrl){
    $command = escapeshellcmd("python3 ../../backend/python/gmd_request.py " . escapeshellarg($apiUrl));

    $output = shell_exec($command);

    if ($output == null) {
        
        return null;
    }

    return $output;
}
?>