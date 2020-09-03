<?php

namespace App\Http\Models\Patients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identity extends Model
{
    use SoftDeletes;


    /**
     * Table used for the model
     *
     * @var string
     */
    protected $table = 'patients_identity';


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
    protected $fillable = [
        'last_name', 'first_name', 'middle_name', 'dob', 'sex',
        'ssn', 'license', 'marital_status', 'user_defined'
    ];


    /**
     * Relationship for the patient
     *
     * @return void
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'identity_id');
    }
}
