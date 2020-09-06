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
    protected $fillable = [
        'ext_id', 'last_name', 'first_name', 'middle_name',
        'address_id', 'employment_id', 'identity_id'
    ];


    /**
     * The relationships that should always be loaded with this model.
     *
     * @var array
     */
    protected $with = [
        'address', 'contact', 'employment',
        'identity', 'misc', 'option', 'selection'
    ];


    protected $appends = ['full_name'];


    protected function getFullNameAttribute()
    {
        return ($this->middle_name != null)
            ? $this->last_name . ', ' . $this->first_name . ' ' . $this->middle_name
            : $this->last_name . ', ' . $this->first_name;
    }


    /**
     * Get the list of patients
     */
    public static function getFullPatientList()
    {
        return Patient::without('address', 'employment', 'misc', 'option')
            ->with([
                'contact' => function ($query) {
                    $query->where('type', 'main')->orWhere('type', 'home')->orWhere('type', 'emergency')->orderBy('updated_at');
                },
                'selection' => function ($query) {
                    $query->where('type', 'acce_numb')->orderBy('updated_at');
                },
            ])
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->paginate(25);
    }


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
