<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
 private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'bio' => 'Penulis produktif asal Indonesia yang dikenal dengan karya-karya fiksi populer.',
            'photo' => 'tereliye.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'bio' => 'Penulis buku pengembangan diri dengan pendekatan jujur dan blak-blakan.',
            'photo' => 'mark_manson.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Masashi Kishimoto',
            'bio' => 'Mangaka terkenal asal Jepang, pencipta serial Naruto.',
            'photo' => 'kishimoto.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Andrea Hirata',
            'bio' => 'Penulis novel Laskar Pelangi yang telah mendunia.',
            'photo' => 'andrea.jpg'
        ],
        [
            'id' => 5,
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis seri Harry Potter yang sangat sukses dan berpengaruh.',
            'photo' => 'rowling.jpg'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
