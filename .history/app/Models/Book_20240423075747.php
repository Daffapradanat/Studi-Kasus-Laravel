<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();

        $table->string('cover_image');
        $table->string('name');
        $table->string('author');
        $table->text('description');
        $table->boolean('is_published')->default(true);

        $table->timestamps();
    });
}
}
