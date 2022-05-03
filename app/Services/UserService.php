<?php

namespace App\Services;

use App\Constants\Constants;
use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService extends Service
{


    function __construct()
    {
        $this->model = User::class;
    }

    /**
     * @param $criteria
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    protected function resolveCriteria($data = [])
    {
        $query = $this->model::Query();

        if (array_key_exists('columns', $data)) {
            $query = $query->select($data['columns']);
        }

        if (array_key_exists('id', $data))
            $query = $query->where('id', $data['id']);
		
        if (array_key_exists('username', $data))
            $query = $query->where('username', $data['username']);
		
        if (array_key_exists('karma_score', $data))
            $query = $query->where('karma_score', $data['karma_score']);
		
        if (array_key_exists('image_id', $data))
            $query = $query->where('image_id', $data['image_id']);
		
        if (array_key_exists('lower', $data))
            $query = $query->where('karma_score','<', $data['lower']);
		
        if (array_key_exists('higher', $data))
            $query = $query->where('karma_score','>', $data['higher']);



        if (array_key_exists('order_by', $data) && array_key_exists('order_dir', $data)) {
            if (in_array($data['order_by'], (new $this->model)->getFillable()) && in_array($data['order_dir'], ['ASC', 'DESC'])) {
                $query = $query->orderBy($data['order_by'], $data['order_dir']);
            }
        }

        if (!$this->is_count) {
            if (array_key_exists('limit', $data) && $data['limit'] < Constants::MAX_LIMIT)
                $query = $query->take($data['limit']);
            else
                $query = $query->take(Constants::MAX_LIMIT);

            if (array_key_exists('offset', $data))
                $query = $query->skip($data['offset']);
            else
                $query = $query->skip(0);
        }

        return $query;
    }
}
