<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Builder;


class Article extends Model
{
    use HasFactory;
    use Prunable;


    public function prunable(): Builder
    {
        return static::where('created_at' , '<=' , now()->subWeek());
    }
}
