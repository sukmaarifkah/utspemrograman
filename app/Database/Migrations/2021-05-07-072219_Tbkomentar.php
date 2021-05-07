<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbkomentar extends Migration
{
	public function up()
	{
		'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'postid'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'name' => [
					'type' => 'text',
					'null' => true,
			],
			'email' => [
					'type' => 'text',
					'null' => true,
			],
			'body' => [
				'type' => 'text',
				'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('tbkomentar');
	}

	public function down()
	{
		$this->forge->dropTable('tbkomentar');
	}
}
