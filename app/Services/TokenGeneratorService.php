<?php

namespace App\Services;

use App\Models\User;

class TokenGeneratorService
{
    public function signed(array $payload, int $expiresInMinutes = 60): string
    {
        $payload['expires_at'] = now()->addMinutes($expiresInMinutes)->timestamp;

        $encoded = base64_encode(json_encode($payload));
        $signature = hash_hmac('sha256', $encoded, config('app.key'));

        return $encoded . '.' . $signature;
    }

    public function verifySigned(string $token): array|false
    {
        $parts = explode('.', $token, 2);

        if (count($parts) !== 2) {
            return false;
        }

        [$encoded, $signature] = $parts;

        $expectedSignature = hash_hmac('sha256', $encoded, config('app.key'));

        if (!hash_equals($expectedSignature, $signature)) {
            return false;
        }

        $payload = json_decode(base64_decode($encoded), true);

        if (!$payload || now()->timestamp > $payload['expires_at']) {
            return false;
        }

        return $payload;
    }
}
