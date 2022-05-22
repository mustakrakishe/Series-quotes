<?php

namespace App\Http\Controllers;

use App\Repositories\TokenRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserTokenController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository, TokenRepository $tokenRepository)
    {
        $this->userRepository = $userRepository;
        $this->tokenRepository = $tokenRepository;
    }

    public function index(int $userId)
    {
        return view('users.tokens.index', ['user' => $this->userRepository->getById($userId)]);
    }
    
    public function store(Request $request, int $userId)
    {
        return view('users.tokens.index', [
            'token' => $this->userRepository->createToken($userId, $request->input('name')),
            'user' => $this->userRepository->getById($userId),
        ]);
    }

    public function destroy(int $userId, int $tokenId)
    {
        $this->userTokenRepository->destroy($tokenId);

        return view('users.tokens.index', [
            'user' => $this->userRepository->getById($userId),
        ]);
    }
}
