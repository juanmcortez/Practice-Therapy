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
    protected $hidden = ['id', 'patient_id', 'created_at', 'updated_at', 'deleted_at'];


    /**
     * Elements that are mass asignable.
     *
     * @var array
     */
    protected $fillable = ['patient_id', 'type', 'selection'];


    /**
     * Relationship for the patient
     *
     * @return void
     */
    public function patient()
    {
        return $this->hasMany(Patient::class, 'patient_id', 'pid');
    }
}
