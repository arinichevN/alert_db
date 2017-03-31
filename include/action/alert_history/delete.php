<?php

namespace alert_history;

class delete {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        $q = "delete from alert where mark={$p['mark']};";
        \db\init(DB_PATH_LOG);
        \db\command($q);
        \db\suspend();
    }

}
