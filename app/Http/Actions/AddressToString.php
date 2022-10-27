<?php

namespace App\Http\Actions;

use App\Models\Country;

class AddressToString
{
    public function __invoke(Array $address): string
    {
        $addressnumber_ext = '';
        if(isset($address['addressnumber_ext']) && $address['addressnumber_ext'] !== '') {
            $addressnumber_ext = $address['addressnumber_ext'];
        }
        $country = Country::find((int)$address['country_id']);

        return $address['address'].' '.$address['addressnumber'] . $addressnumber_ext .' '. $address['city'] .', ' .$country->name;
    }
}
