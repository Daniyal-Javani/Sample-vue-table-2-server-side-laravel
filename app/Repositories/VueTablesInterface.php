<?php
/**
 *  VueTables server-side component interface
 */

namespace App\Repositories;

interface VueTablesInterface {

    public function get($table, array $fields);

}
