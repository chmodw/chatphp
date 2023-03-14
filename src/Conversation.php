<?php

namespace Chmodw\ChatPHP;

use GuzzleHttp\Client;

class Conversation
{
    public function __construct()
    {
        $client = new Client();

        $headers = [
            'Authorization' => "Bearer " . env('OPEN_AI_API_KEY'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json'
        ];

        $form = [
            "model"    => "gpt-3.5-turbo",
            'messages' => [
                [
                    'role'      => 'user',
                    'content'   => 'Hello!',
                ]
            ],
        ];

        $options = ['headers' => $headers, 'body' => json_encode($form)];

        $res = $client->request('POST', 'https://api.openai.com/v1/chat/completions', $options);

        dd($res->getStatusCode());
    }
}


//curl https://api.openai.com/v1/chat/completions \
//  -H 'Content-Type: application/json' \
//  -H 'Authorization: Bearer YOUR_API_KEY' \
//  -d '{
//  "model": "gpt-3.5-turbo",
//  "messages": [{"role": "user", "content": "Hello!"}]
//}'
