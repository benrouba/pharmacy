<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;


    /**
     * الأعمدة التي يمكن تعبئتها.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'filename',
        // أضف أي أعمدة إضافية هنا
    ];

    /**
     * العلاقة بين وصفة الطبية والمستخدم.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

