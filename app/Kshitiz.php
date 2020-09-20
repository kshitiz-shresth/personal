<?php

namespace App;

use Storage;

class Kshitiz
{
    public static function image($address, $type = null)
    {
        if (empty($address)) {
            return '';
        }
        $address = str_replace('\\', '/', $address);
        $img = '.' . pathinfo($address, PATHINFO_EXTENSION);
        $imgName = str_replace($img, '', $address);
        if ($type) {
            $img = $imgName . '-' . $type . $img;
        } else {
            $img = $imgName . $img;
        }

        return Storage::disk(config('voyager.storage.disk'))->url($img);
    }

    public static function slug_title($slug)
    {
        $title = str_replace('-', ' ', $slug);
        return ucwords($title);
    }
}
