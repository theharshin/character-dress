<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponser;

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
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
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // Set common error message if any model not found in system.
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            $modelName = last(explode('\\', $exception->getModel()));
            $modelKey = strtolower(preg_replace('/([a-z])([A-Z])/s','$1_$2', $modelName));
            $modelName = preg_replace('/([a-z])([A-Z])/s','$1 $2', $modelName);
            $modelName = strtolower($modelName);
            $modelName = ucfirst($modelName);
            // $exception->getModel();
            $error['errors'][$modelKey][] = __('entity.entityNotFound', ['entity' => "$modelName data"]);
            return $this->error($error,404);
        }
        return parent::render($request, $exception);
    }
}
