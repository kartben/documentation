<?php
// -*- coding: utf-8 -*-
/*
============================
Hiveeyes PHP example program
============================

Documentation
-------------
- https://hiveeyes.org/docs/system/acquisition/php.html#demo

Downloads
---------
- https://hiveeyes.org/docs/system/_downloads/example.php4
- https://hiveeyes.org/docs/system/_downloads/hiveeyes.php4
- https://getkotori.org/docs/_downloads/terkin-http.php4


Synopsis
--------
Run demonstration program from the command line::

    # Send fixed measurements "temperature" => 42.84, "humidity" => 83 for demonstration purposes
    php4 -f src/clients/php4/example.php4 run demo

    # Send a periodic, slowly oscillating sawtooth signal
    php4 -f src/clients/php4/example.php4 run sawtooth

*/

// Add search path for finding foundation library terkin-http.php
$path = '/Users/amo/dev/isarengineering/sources/kotori/clients/runtime/php';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

// Put this file into the folder of your PHP program
include("hiveeyes.php4");

// When running from the command line, use some example programs
// for submitting telemetry data for demonstration purposes.
if (php_sapi_name() == "cli") {

    $telemetry = new HiveeyesNode(
        array(
            "network"   => "testdrive",
            "gateway"   => "area-42",
            "node"      => "node-1",
        )
    );

    if ($argc > 2) {
        $command = $argv[1];
        $subcommand = $argv[2];
    }

    if ($command == "run") {

        if ($subcommand == "demo") {
            // Emit single sample of a sawtooth signal
            $data = array("temperature" => 42.84, "humidity" => 83);
            var_dump($telemetry->transmit($data));

        } else if ($subcommand == "sawtooth") {
            date_default_timezone_set("Europe/Berlin");
            // Emit sample of a sawtooth signal each second, periodically
            while (true) {
                $data = array("second" => intval(strftime("%S")));
                var_dump($telemetry->transmit($data));
                sleep(1);
            }
        }
    }

}

?>
