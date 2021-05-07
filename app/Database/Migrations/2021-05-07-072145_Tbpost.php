<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbpost extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'userid'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'title' => [
					'type' => 'text',
					'null' => true,
			],
			'body' => [
					'type' => 'text',
					'null' => true,
			],
			'gambar' => [
				'type' => 'text',
				'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('tbpost');

	}

	public function down()
	{
		$this->forge->dropTable('tbpost');
	}
}
