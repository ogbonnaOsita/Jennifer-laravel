<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Award extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'award_category_id',
        'year_recieved',
    ];

    protected $dates = [
        'year_recieved',
    ];

    public function award_category(): BelongsTo
    {
        return $this->belongsTo(AwardCategory::class);
    }
}
