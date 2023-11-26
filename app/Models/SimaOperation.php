<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SimaOperation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'sima_operations';



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Automatically generate a UUID when creating a new record
            $model->uuid = (string) Str::uuid();
        });
    }
}
