<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Elvis sighted',
                'slug'  => 'elvis-sighted',
                'body'  => 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.',
            ],
            [
                'title' => 'Say it isn\'t so!',
                'slug'  => 'say-it-isnt-so',
                'body'  => 'Scientists conclude that some programmers have a sense of humor.',
            ],
            [
                'title' => 'Caffeination, Yes!',
                'slug'  => 'caffeination-yes',
                'body'  => 'World\'s largest coffee shop open onsite nested coffee shop for staff only.',
            ],
        ];
        $this->db->table('news')->insertBatch($data);
    }
}
