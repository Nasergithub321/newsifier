<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Passport\Exceptions\OAuthServerException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function render($request, Throwable $exception)
    {
       // return parent::render($request, $exception);

        switch ($exception) {
            case $exception instanceof ModelNotFoundException:
            {
                return response()->json([
                    "success" => false,
                    "message" => 'Model Not Found',
                    "data" => [],
                    "count" => 0,
                    "status" => 404
                ], 404);
            }
            case $exception instanceof ItemTypeException:
            {
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => 422
                ], 422);
            }
            case $exception instanceof HttpException:
            {
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => $exception->getStatusCode()
                ], $exception->getStatusCode());
            }
            case $exception instanceof AuthenticationException:
            {
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => 401
                ], 401);
            }
            case $exception instanceof \Spatie\Permission\Exceptions\UnauthorizedException:
            {
                return response()->json([
                    "success" => false,
                    "message" => trans('exception.You-do-not-have-the-required-authorization.'), //$exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => 401
                ]);
            }

            case $exception instanceof AuthorizationException:
            {
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => 403
                ], 403);
            }
            case $exception instanceof OAuthServerException:
            {
                return parent::render($request, $exception);
            }
            case $exception instanceof ValidationException:
            {
                return response()->json([
					'message' => 'The given data was invalid.', 
					'errors' => $exception->validator->getMessageBag()
				], 422);
            }
            default:
            {
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage(),
                    "data" => [],
                    "count" => 0,
                    "status" => 500
                ], 500);
            }
        }
        return parent::render($request, $exception);
    }


    public function report(Throwable $exception)
    {
        // Kill reporting if this is an "access denied" (code 9) OAuthServerException.
        if ($exception instanceof \League\OAuth2\Server\Exception\OAuthServerException && $exception->getCode() == 9) {
            return;
        }

        parent::report($exception);
    }

}

/**
 * @apiDefine INTERNAL_SERVER_ERROR
 * @apiErrorExample {json} INTERNAL_SERVER_ERROR_RESPONSE:
 *     {
 *         "success" => false,
 *         "message" => "INTERNAL SERVER ERROR",
 *         "data" => [],
 *         "count" => "",
 *         "status" => 500
 *     }
 */

/**
 * @apiDefine MODEL_NOT_FOUND
 * @apiErrorExample {json} MODEL_NOT_FOUND_RESPONSE:
 *     {
 *         "success" => false,
 *         "message" => "Model Not Found",
 *         "data" => [],
 *         "count" => "",
 *         "status" => 404
 *     }
 */

/**
 * @apiDefine NOT_FOUND
 * @apiErrorExample {json} NOT_FOUND_RESPONSE:
 *     {
 *         "success" => false,
 *         "message" => "Not Found",
 *         "data" => [],
 *         "count" => "",
 *         "status" => 404
 *     }
 */

/**
 * @apiDefine AUTHENTICATION_ERROR
 * @apiErrorExample {json} AUTHENTICATION_ERROR_RESPONSE:
 *     {
 *         "success" => false,
 *         "message" => "Exception Message",
 *         "data" => [],
 *         "count" => "",
 *         "status" => 401
 *     }
 */

/**
 * @apiDefine AUTHORIZATION_ERROR
 * @apiErrorExample {json} AUTHORIZATION_ERROR_RESPONSE:
 *     {
 *         "success" => false,
 *         "message" => "Exception Message",
 *         "data" => [],
 *         "count" => "",
 *         "status" => 403
 *     }
 */

/**
 * @apiDefine OAUTH_PAD_REQUEST_ERROR
 * @apiErrorExample {json} PASSPORT_AUTHORIZATION_PAD_REQUEST:
 *
 * {
 *     "error": "unsupported_grant_type",
 *     "error_description": "The authorization grant type is not supported by the authorization server.",
 *     "hint": "Check that all required parameters have been provided",
 *     "message": "The authorization grant type is not supported by the authorization server."
 * }
 */

/**
 * @apiDefine OAUTH_ERROR
 * @apiErrorExample {json} PASSPORT_AUTHORIZATION_ERROR:
 * {
 *         "error": "error name",
 *         "error_description": "error description",
 *         "message": "Message Content"
 * }
 */
