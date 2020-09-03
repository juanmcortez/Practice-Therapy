<?php

namespace App\Http\Models\Patients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Selection extends Model
{
    use SoftDeletes;


    /**
     * Table used for the model
     *
     * @var string
     */
    protected $table = 'patients_selection';


    /**
     * Elements hidden from json request
     *
     * @var array
     */
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];


    /**
     * Elements that are mass asignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'selection'];


    /**
     * Relationship for the patient
     *
     * @return void
     */
    public function selection()
    {
        return $this->belongsTo(Patient::class, 'id', 'employment_id');
    }
}
