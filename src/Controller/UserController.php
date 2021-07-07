<?php

namespace Whizz\User\Controller;


use Symfony\Component\HttpFoundation\Response;
use Whizz\SharedObject\Application\Exception\EntityNotFoundException;
use Whizz\SharedObject\Application\Exception\ValidationException;
use Whizz\SharedObject\Domain\ValueObject\EntityUuid;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Whizz\User\Repository\UserRepository;

class UserController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    public function user(string $uuid): JsonResponse
    {
        try {
            $response = $this->userRepository->getUserByUuid(KegstarUuid::fromString($uuid));
            $json = $response;

            return JsonResponse::create($json, Response::HTTP_OK, [], true);
        } catch (ValidationException $e) {
            return JsonResponse::create(
                [
                    $this->messageKey => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        } catch (EntityNotFoundException $e) {
            return JsonResponse::create(
                [
                    $this->messageKey => $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }

}