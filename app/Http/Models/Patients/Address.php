<?php

namespace App\Http\Models\Patients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;


    /**
     * Table used for the model
     *
     * @var string
     */
    protected $table = 'patients_address';


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
    protected $fillable = ['address_1', 'address_2', 'city', 'state', 'zip', 'country'];


    /**
     * Relationship for the patient
     *
     * @return void
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'address_id');
    }
}
