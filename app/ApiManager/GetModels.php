<?php

namespace App\ApiManager;

class GetModels
{
    public static function get()
    {
        $path = app_path();
        $out = [];
        $results = scandir($path);

        foreach ($results as $result) {
            if ($result === '.' or $result === '..') {
                continue;
            }
            $filename = $path . '/' . $result;

            if (is_dir($filename)) {
            } else {
                $out[] = array_last(explode('/', substr($filename, 0, -4)));
            }
        }
        return $out;
    }
}
