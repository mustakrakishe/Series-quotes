<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserTokenStoreRequest;
use App\Repositories\TokenRepository;
use App\Repositories\UserRepository;

class UserTokenController extends Controller
{
    protected $userRepository;
    protected $tokenRepository;

    public function __construct(UserRepository $userRepository, TokenRepository $tokenRepository)
    {
        $this->userRepository = $userRepository;
        $this->tokenRepository = $tokenRepository;
    }

    public function index(int $userId)
    {
        $this->authorize('viewAny', [$this->tokenRepository->getClass(), $userId]);

        return view('users.tokens.index', ['user' => $this->userRepository->getById($userId)]);
    }
    
    public function store(UserTokenStoreRequest $request, int $userId)
    {
        $this->authorize('store', [$this->tokenRepository->getClass(), $userId]);

        return view('users.tokens.index', [
            'token' => $this->userRepository->createToken($userId, $request->input('name')),
            'user' => $this->userRepository->getById($userId),
        ]);
    }

    public function destroy(int $userId, int $tokenId)
    {
        $this->authorize('delete', [$this->tokenRepository->getClass(), $userId, $tokenId]);
        
        $this->tokenRepository->destroy($tokenId);

        return view('users.tokens.index', [
            'user' => $this->userRepository->getById($userId),
        ]);
    }
}
