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
        'address_id', 'contact_id', 'identity_id', 'employment_id', 'misc_id',
        'option_id', 'selection_id', 'created_at', 'updated_at', 'deleted_at'
    ];


    /**
     * Elements that are mass asignable.
     *
     * @var array
     */
    protected $fillable = [
        'ext_id', 'address_id', 'contact_id', 'employment_id',
        'identity_id', 'misc_id', 'option_id', 'selection_id'
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
        return $this->hasOne(Contact::class, 'id', 'contact_id');
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
        return $this->hasOne(Misc::class, 'id', 'misc_id');
    }
    public function option()
    {
        return $this->hasOne(Option::class, 'id', 'option_id');
    }
    public function selection()
    {
        return $this->hasOne(Selection::class, 'id', 'selection_id');
    }
}
