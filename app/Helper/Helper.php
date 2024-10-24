<?php
namespace App\Helper;

class Helper{
    public static function active($active = 0, $id, $message): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-sm changeStatus" data-slug="'. $message .'" data-id="'.$id.'">No</span>'
            : '<span class="btn btn-success btn-sm changeStatus" data-slug="'. $message .'" data-id="'.$id.'">Yes</span>';
    }
}
