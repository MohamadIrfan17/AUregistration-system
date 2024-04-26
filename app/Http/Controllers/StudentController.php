<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'address' => $this->address,
        ];
    }
}