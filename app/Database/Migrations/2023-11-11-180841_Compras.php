<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Compras extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'primary_key' => true
            ],
            'produto_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'quantidade' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'valor' => [
                'type' => 'float',
                'constraint' => 10.2
            ],
            'saldo' => [
                'type' => 'float',
                'constraint' => 10.2
            ],
            'created_at' => [
                'type' => 'timestamp',
                'null' => true,
                'default' => null,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'null' => true,
                'default' => null,
            ],
            'deleted_at' => [
                'type' => 'timestamp',
                'null' => true,
                'default' => null,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('compras');
        $this->forge->addKey('produto_id', 'compras', 'id');
        $this->forge->addkey('departamento');
    }

    public function down()
    {
        $this->forge->dropTable('compras');
    }
}
