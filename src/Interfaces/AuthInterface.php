<?php

declare(strict_types = 1);

namespace Caju\Finance\Interfaces;

interface AuthInterface
{
    public function login(array $credentials): bool;
    public function check(): bool;
    public function logout();
    public function hashPassword(string $password): string;
    public function user(): ? UserInterface;
}