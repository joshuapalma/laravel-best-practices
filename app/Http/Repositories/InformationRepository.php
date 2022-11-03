<?php

namespace App\Http\Repositories;

use App\Models\Information;

class InformationRepository
{
    public $information;

    //All Business Logics
    public function __construct(Information $information)
    {
        $this->information = $information;
    }

    public function getAllInformation()
    {
        return ['information' => $this->information->getInformation()];
    }

    public function storeInformation($request)
    {
        $data = Information::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
        ]);

        return $data;
    }

    public function updateInformation()
    {
        
    }

    public function deleteInformation()
    {

    }
}