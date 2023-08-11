<?php
class Init {
    private static $dirname = 'b';
    public static $title = 'b';

    public static function dir() {
        return $_SERVER["DOCUMENT_ROOT"] . '/' . self::$dirname;
    }

    public static function base_name() {
        $base_name = self::dir();
        return basename($base_name);
    }

    public static function base_path() {
        return '/' . self::base_name();
    }

    public static function errors_dir($file) {
        return self::dir() . '/public/errors/' . $file . '.php';    
    }

    public static function pages_dir($file) {
        return self::dir() . '/public/pages/' . $file . '.php';    
    }
}