<?php
    set_include_path(dirname(__FILE__));

    $relpath_prefix = "";
    function bootstrap($path) {
        //echo "bootstrapping $path";
        global $relpath_prefix;
        $root = dirname(dirname(__FILE__));
        while(($path = dirname($path)) != $root) {
            $relpath_prefix .= "../";
        }
    }

    function relpath($from_root) {
        global $relpath_prefix;
        return $relpath_prefix . $from_root;
    }

    // connect to db, n stuff...
 ?>
