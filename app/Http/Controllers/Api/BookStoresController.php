<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookStoreResource;
use App\Models\BookStore;

class BookStoresController extends Controller
{
    public function index()
    {
        $stores = BookStore::with('books')->get();
        return BookStoreResource::collection($stores);
    }
}
