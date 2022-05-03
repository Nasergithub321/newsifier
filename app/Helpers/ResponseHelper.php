<?php


namespace App\Helpers;


class ResponseHelper
{

    /**
     * @param mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function operationSuccess($data = "operation Success")
    {
        return response()->json([
                "success" => true,
                "message" => "",
                "data" => $data,
                "status" => 200
            ]);
    }

    /**
     * @param mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function select($data = null, $total = null,$per_page=15,$current_page=1,$last_page=null,$from=1,$to=15,$next_page_url = "...",$prev_page_url = "...")
    {
        return response()->json([
				"total"=> $total,
				"per_page"=> $per_page,
				"current_page"=> $current_page,
				"last_page"=> $last_page,
				"next_page_url"=> $next_page_url,
				"prev_page_url"=> $prev_page_url,
				"from"=> $from,
				"to"=>$to,
                "success" => true,
                "message" => "",
                "data" => $data,
                "status" => 200
            ]);
    }

    /**
     * @param mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function create($data = null)
    {
        return response()->json([
                "success" => true,
                "message" => "",
                "data" => $data,
                "status" => 200
            ]);
    }

    /**
     * @param $data Mixed
     * @return \Illuminate\Http\JsonResponse
     */
    public static function insert($data = null)
    {
        return response()->json([
                "success" => true,
                "message" => "",
                "data" => $data,
                "status" => 200
            ]);
    }
    /**
     * @param $data Mixed
     * @return \Illuminate\Http\JsonResponse
     */
    public static function update($data = null)
    {
        return response()->json([
                "success" => true,
                "message" => "",
                "data" => $data,
                "status" => 200
            ]);
        return response()->json(['status' => 'OK', 'data' => $data], 240);
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function delete($message = "Deleted Successfully")
    {
        return response()->json([
                "success" => true,
                "message" => $message,
                "data" => "",
                "status" => 200
            ]);
    }


    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */

    public static function missingParameter($message = "Missing Required Param")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param mixed
     * isEmpty Array exception
     * @return \Illuminate\Http\JsonResponse
     */
    public static function dataNotFound($message = "Data Not Found")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function alreadyExists($message = "Already Exists")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param mixed
     * not authorized user
     * @return \Illuminate\Http\JsonResponse
     */
    public static function authenticationFail($message = "Not Authenticated")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 401
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function authorizationFail($message = "Not Authorized")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function invalidPhone($message = "Invalid Phone")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function invalidData($message = "Invalid Data")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function operationFail($message  = null)
    {
        empty($message) && $message = "opertaion fail";
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function creatingFail($message  = null)
    {
        empty($message) && $message = "creating fail";
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function insertingFail($message = null)
    {
        empty($message) && $message = "inserting fail";
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function updatingFail($message = null)
    {
        empty($message) && $message = "updating fail";
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function deletingFail($message  = null)
    {
        empty($message) && $message = "deleting fail";
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 400
            ]);
    }

    /**
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function serverError($message  = "server error")
    {
        return response()->json([
                "success" => false,
                "message" => $message,
                "data" => "",
                "status" => 500
            ]);
    }
}
