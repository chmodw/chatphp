<?php

namespace Chmodw\ChatPHP\Chat;

use GuzzleHttp\Client;

class Completion
{
    /**
     * Chat completion api endpoint
     */
    public final const ENDPOINT = 'https://api.openai.com/v1/chat/completions';

    /**
     * Name of the chat model
     */
    public final const MODEL_NAME = 'gpt-3.5-turbo';

    public function __construct()
    {
        $client = new Client();

        $options = ['headers' => $this->getRequestHeader(), 'body' => $this->getRequestForm()];
        $res = $client->request('POST', self::ENDPOINT, $options);

        // Look into async
        print_ln($res->getBody()->getContents());
    }

    /**
     * @return string[]
     */
    private function getRequestHeader(): array
    {
        return [
            'Authorization' => "Bearer ".env('OPEN_AI_API_KEY'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json'
        ];
    }

    /**
     * @return string
     */
    public function getRequestForm(): string
    {
        $form = [
            "model"     => self::MODEL_NAME,
            'messages'  => [
                [
                    'role'      => 'user',
                    'content'   => 'Hello!',
                ]
            ],
        ];

        return json_encode($form);
    }
}
