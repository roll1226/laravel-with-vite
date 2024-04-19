<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $context
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Task extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'context' => 'string',
        'status' => 'integer',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
