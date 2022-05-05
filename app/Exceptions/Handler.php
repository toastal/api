<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class Handler extends ExceptionHandler {
  /**
   * A list of the exception types that should not be reported.
   *
   * @var array
   */
  protected $dontReport = [
    AuthorizationException::class,
    HttpException::class,
    ModelNotFoundException::class,
    ValidationException::class,
  ];

  /**
   * Report or log an exception.
   *
   * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
   *
   * @param  \Throwable  $exception
   * @return void
   *
   * @throws \Exception
   */
  public function report(Throwable $exception) {
    parent::report($exception);
  }

  /**
   * Render an exception into an HTTP response.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Throwable  $exception
   * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
   *
   * @throws \Throwable
   */
  public function render($request, Throwable $exception) {
    if($exception instanceof AuthorizationException) {
      $code = $exception->response()->code();
      $desc = [$exception->response()->message()];
    } elseif($exception instanceof HttpException) {
      $code = $exception->getStatusCode();
      $desc = [Response::$statusTexts[$code]];
    } elseif($exception instanceof ModelNotFoundException) {
      $code = Response::HTTP_NOT_FOUND;
      $desc = [$exception->getMessage()];
    } elseif($exception instanceof ValidationException) {
      $code = $exception->status;
      $desc = Arr::collapse($exception->errors());
    } else {
      $code = Response::HTTP_INTERNAL_SERVER_ERROR;
      $desc = [$exception->getMessage()];
    }

    //return parent::render($request, $exception);

    return response()->json([
      'data'    => [],
      'message' => [
        'type' => 'error',
        'code' => $code,
        'description' => $desc,
    ]], $code);
  }
}
