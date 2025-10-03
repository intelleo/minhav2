<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotifDismissed extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'user_id' => [
        'type'     => 'INT',
        'unsigned' => true,
      ],
      'comment_id' => [
        'type'     => 'INT',
        'unsigned' => true,
      ],
      'created_at' => [
        'type' => 'DATETIME',
        'null' => true,
      ],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->addUniqueKey(['user_id', 'comment_id']);
    $this->forge->createTable('notif_dismissed', true);
  }

  public function down()
  {
    $this->forge->dropTable('notif_dismissed', true);
  }
}
