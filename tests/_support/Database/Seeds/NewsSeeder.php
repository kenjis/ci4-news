<?php

namespace Tests\Support\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $table = 'news';

        $this->db->table($table)->truncate();

        $data = [
            [
                'title' => 'Elvis sighted',
                'slug'  => 'elvis-sighted',
                'body'  => 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.',
            ],
        ];
        $this->db->table($table)->insertBatch($data);
    }
}
