<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    public static function getEmployer(int $id): array
    {
        return self::find($id)->getAttributes();
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
