<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at']; //CAMPOS QUE NO QUEREMOS QUE SE LLENEN DE FORMA MASIVA

        // RELACION M:1
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function category()
        {
            return $this->belongsTo(Category::class);
        }

        // RELACION M:M
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }

        // RELACION 1:1 POLIMORFICA
        public function image()
        {
            return $this->morphOne(Image::class, 'imageable'); //LE PASAMOS EL NOMBRE DEL METODO QUE TIENE LA RELACION Y EL NOMBRE DEL CAMPO QUE TIENE LA RELACION
        }
}
