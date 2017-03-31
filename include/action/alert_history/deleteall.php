<?php

namespace alert_history;

class deleteall {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute() {
        $q = "delete from alert";
        \db\init(DB_PATH_LOG);
        \db\command($q);
        \db\suspend();
    }
}
