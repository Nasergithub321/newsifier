<?php

namespace App\Http\Resources;

use App\Http\Resources\Branch\BranchResource;
use App\Http\Resources\ByUserResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $response = [
            'id' => $this->id,
            'username' => $this->username,
            'score' => DB::Table('users')->where('karma_score','<',$this->karma_score)->orWhere(function ($query) use ($this) {
                $query->where('karma_score', this->karma_score)->where('id','<' ,%this->id);
            })->count(),
            'image_url' => ( !is_null($this->image) ) ? $this->image->url : "",
        ];

        return $response;
    }
}
