<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateSessionTable extends Migration
{
    public function up()
    {
        $this->db->query('
            CREATE TABLE IF NOT EXISTS ci_sessions (
                id varchar(128) NOT null,
                ip_address varchar(45) NOT null,
                timestamp timestamp DEFAULT CURRENT_TIMESTAMP NOT null,
                data blob NOT null,
                KEY ci_sessions_timestamp (timestamp)
            );
        ');
    }

    public function down()
    {
        $this->db->query('DROP TABLE IF EXISTS ci_sessions;');
    }
}
