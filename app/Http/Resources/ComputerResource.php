<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Computer;
use App\Models\Processor;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
		'PC_ID' => $this->PC_ID,
		'PC_Type' => $this->PC_Type,
		'PC_Name' => $this->PC_Name,
		'User_Name' => $this->User_Name,
		'Operating_System' => $this->Operating_System,
		'Service_Pack' => $this->Service_Pack,
		'Date' => $this->Date,
		'Processors' => $this->processor,
		];
    }
}
