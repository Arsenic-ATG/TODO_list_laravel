<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    /**
     * Only guard the 'id' field of the database
     *
     * @var string
     */
    public $guarded = ['id'];

    /**
     * Don't automatically add created_at and updated_at field in
     * database.
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks2';
}
