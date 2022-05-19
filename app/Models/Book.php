<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    public function bookStores(): BelongsToMany
    {
        return $this->belongsToMany(BookStore::class)->using(BookStoreBook::class);
    }
}
