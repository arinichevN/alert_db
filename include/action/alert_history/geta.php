<?php

namespace alert_history;

class geta {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute() {
        $q = "select mark, datetime(mark, 'unixepoch', 'localtime') mark_str, message from alert order by mark asc";
        \db\init(DB_PATH_LOG);
        $data = \db\getDataAll($q);
        \db\suspend();
        return $data;
    }

}
