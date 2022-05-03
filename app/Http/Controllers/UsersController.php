<?php

namespace App\Http\Controllers;

use App\Facades\UserService;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Helpers\ResponseHelper;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*    -------------Defined Apis------------    */


    /**
     * @api {get} user 1. Get User
     * @apiVersion 0.1.0
     * @apiSampleRequest users
     * @apiName Get Users
     * @apiGroup Users
     *
     * @apiParam {Integer} [id] Unique user id
     *
     */

    /**
     * @param id
     * @return JsonResponse
     */


    public function index($id)
    {
        try {
            
			$user = UserService::getList(['id'=>$id]);
			
			if($user->isEmpty())
				return ResponseHelper::dataNotFound();
            
			$lowerResults = UserService::getList(['lower'=>$user->first()->karma_score,'order_by'=>'karma_score','order_dir'=>'DESC','limit'=>2]);
            
			if($lowerResults->isNotEmpty())
				$lowerResults = $lowerResults->sortBy(['karma_score','id']);
			
			$higherResults = UserService::getList(['higher'=>$user->first()->karma_score,'limit'=>2]);
			
			$FirstResults = $lowerResults->concat($user);
			$results = $FirstResults->concat($higherResults);
			
			return ResponseHelper::operationSuccess(UserResource::collection($results));
			
        } catch (\Exception $e) {
            throw $e;
        }
    }


    /**
     * @api {post} users 3. Create Users
     * @apiVersion 0.1.0
     * @apiSampleRequest users
     * @apiName Create Users
     * @apiGroup Users
     *
     */
    /**
     * @param UserRequest $request
     * @return JsonResponse
     * @throws \Exception
     */

    public function create(Request $request)
    {

        try {
			ini_set('max_execution_time', 999999999999 ) ;
			$maxUser = User::select('id')->whereRaw('id = (select max(`id`) from users)')->get();
			
			if($maxUser->isEmpty())
				$offset = 1;
			else
				$offset = $maxUser->first()->id + 1;
			
            
			for($i = $offset;$i<=100000 + $offset;$i++)
			{
				$model = new User();
				$dataIn = array(
								'username'=>$i.'-username',
								'karma_score'=>rand(1,999999),
								);
				UserService::create($dataIn, $model);
			}
			return ResponseHelper::operationSuccess();
			

        } catch (\Exception $e) {
            throw $e;
        }
    }

}
