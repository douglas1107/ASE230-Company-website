<?php
function readAwards($filename) {
    if (!file_exists($filename) || !is_readable($filename)) {
        return [];
    }

    $awards = [];
    if (($handle = fopen($filename, 'r')) !== false) {
        fgetcsv($handle);
        
        while (($data = fgetcsv($handle)) !== false) {
            $awards[] = [
                'Year' => $data[0],
                'Award' => $data[1]
            ];
        }
        fclose($handle);
    }
    return $awards;
}

function readTeam($filename) {
    $team = [];
    if (($handle = fopen($filename, 'r')) !== false) {
        fgetcsv($handle);
        while (($data = fgetcsv($handle)) !== false) {
            $team[] = [
                'name' => $data[0],
                'title' => $data[1],
                'bio' => $data[2],
                'image' => $data[3],
            ];
        }
        fclose($handle);
    }
    return $team;
}
