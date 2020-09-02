<?php

namespace App\Http\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'pid';

    protected $guarded = [];
}
