<?php

declare(strict_types=1);

namespace App\Application\Actions\Pattern\Decorator;

final class ClientResponse
{
    public function __construct(
        private readonly int $status,
        private readonly string|array $content
    )
    {
    }

    public function __invoke(): string
    {
        $response = new BaseResponse(
            $this->status,
            $this->content
        );

        $responseDecorator = new JsonResponse($response);

        return $responseDecorator->json();
    }
}