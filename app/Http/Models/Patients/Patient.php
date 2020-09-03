<?php

namespace App\Http\Models\Patients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;


    /**
     * We have changed the index for the patients table.
     *
     * @var string
     */
    protected $primaryKey = 'pid';


    /**
     * Elements hidden from json request
     *
     * @var array
     */
    protected $hidden = ['identity_id', 'created_at', 'updated_at', 'deleted_at'];


    /**
     * Elements that are mass asignable.
     *
     * @var array
     */
    protected $fillable = ['ext_id', 'identity_id'];


    /**
     * The relationships that should always be loaded with this model.
     *
     * @var array
     */
    protected $with = ['identity'];


    /**
     * Info relationships for the patient
     *
     * @return void
     */
    public function identity()
    {
        return $this->hasOne(Identity::class, 'id', 'identity_id');
    }
}
