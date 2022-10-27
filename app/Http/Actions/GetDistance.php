<?php

namespace App\Http\Actions;

use TeamPickr\DistanceMatrix\DistanceMatrix;
use TeamPickr\DistanceMatrix\Licenses\StandardLicense;

class GetDistance
{
    public function __invoke(array $originAddress, array $destinationAddress): int
    {
        $addressToString = new AddressToString();

        $license = new StandardLicense(env('GOOGLE_MAPS_KEY'));
        $response = DistanceMatrix::license($license)
            ->addOrigin(($addressToString)($originAddress))
            ->addDestination(($addressToString)($destinationAddress))
            ->request();

        $rows = $response->rows();
        $elements = $rows[0]->elements();
        $element = $elements[0];

        return $element->distance();
    }
}
