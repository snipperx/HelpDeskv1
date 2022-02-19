<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HRPeople extends Model
{
    protected $fillable = [
        'user_id', 'title', 'first_name', 'surname', 'employee_number', 'email', 'cell_number', 'phone_number',
        'id_number', 'res_address', 'res_suburb', 'res_city', 'res_postal_code', 'res_province_id', 'res_country_id',
        'date_of_birth', 'gender', 'ethnicity', 'profile_pic', 'status',
    ];

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->surname;
    }

}

