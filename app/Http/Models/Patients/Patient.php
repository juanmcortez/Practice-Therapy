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
    protected $hidden = [
        'address_id', 'identity_id', 'employment_id',
        'created_at', 'updated_at', 'deleted_at'
    ];


    /**
     * Elements that are mass asignable.
     *
     * @var array
     */
    protected $fillable = ['ext_id', 'address_id', 'employment_id', 'identity_id'];


    /**
     * The relationships that should always be loaded with this model.
     *
     * @var array
     */
    protected $with = [
        'address', 'contact', 'employment',
        'identity', 'misc', 'option', 'selection'
    ];


    /**
     * Relationships for the patient
     *
     * @return void
     */
    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
    public function contact()
    {
        return $this->hasMany(Contact::class, 'patient_id', 'pid');
    }
    public function employment()
    {
        return $this->hasOne(Employment::class, 'id', 'employment_id');
    }
    public function identity()
    {
        return $this->hasOne(Identity::class, 'id', 'identity_id');
    }
    public function misc()
    {
        return $this->hasMany(Misc::class, 'patient_id', 'pid');
    }
    public function option()
    {
        return $this->hasMany(Option::class, 'patient_id', 'pid');
    }
    public function selection()
    {
        return $this->hasMany(Selection::class, 'patient_id', 'pid');
    }
}
