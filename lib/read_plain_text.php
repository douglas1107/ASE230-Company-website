<?php
function readPlainTxt($filename) {
    if (!file_exists($filename) || !is_readable($filename)) {
        return [];
    }

    $data = [];
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($line = fgets($handle)) !== false) {
            $data[] = trim($line);
        }
        fclose($handle);
    }

    return $data;
}

?>