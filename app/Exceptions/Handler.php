<?php

namespace App\Exceptions;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;

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
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        if (App::environment('production')) {
            $message = [
                "attachments" => [
                    [
                        "color"  => "#F56565",
                        "blocks" => [
                            [
                                "type" => "section",
                                "text" => [
                                    "type" => "mrkdwn",
                                    "text" => "An error has been found on the domain: *<JasperStolwijk.nl|JasperStolwijk.nl>*",
                                ],
                            ],
                            [
                                "type"   => "section",
                                "fields" => [
                                    [
                                        "type" => "mrkdwn",
                                        "text" => "*Message:*
internal server error",
                                    ],
                                    [
                                        "type" => "mrkdwn",
                                        "text" => "*Error:*
500",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ];

            $domain = getenv('APP_URL');

            $slackUrI     = "https://hooks.slack.com/services/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";
            $Errormessage = "An error has been found on the domain: *<{$domain}|{$domain}>*";

            $message['attachments'][0]['blocks'][0]['text']['text']      = $Errormessage;
            $message['attachments'][0]['blocks'][1]['fields'][0]['text'] = "*Message:* \n" . $exception->getMessage();
            $message['attachments'][0]['blocks'][1]['fields'][1]['text'] = "*Error:* \n" . $exception->getCode();

            // Send to slack channel
            $client = new Client();
            $client->post($slackUrI, ['body' => json_encode($message)]);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
