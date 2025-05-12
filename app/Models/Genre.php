<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
   private $genres = [
        [
            'id' => 1,
            'name' => 'Fiksi',
            'description' => 'Cerita yang berasal dari imajinasi, tidak berdasarkan kenyataan.'
        ],
        [
            'id' => 2,
            'name' => 'Non-Fiksi',
            'description' => 'Buku yang berdasarkan fakta, kejadian nyata, dan informasi aktual.'
        ],
        [
            'id' => 3,
            'name' => 'Manga',
            'description' => 'Komik Jepang dengan gaya khas dan berbagai genre cerita.'
        ],
        [
            'id' => 4,
            'name' => 'Biografi',
            'description' => 'Cerita tentang kehidupan nyata seseorang.'
        ],
        [
            'id' => 5,
            'name' => 'Fantasi',
            'description' => 'Genre yang melibatkan unsur magis, dunia imajinatif, dan makhluk fiktif.'
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
