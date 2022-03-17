<?php

/**
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace GooglePasses\Helpers;

use Firebase\JWT\JWT;

class GpapJwt
{
    public const AUDIENCE = 'google';
    public const JWT_TYPE = 'savetoandroidpay';

    protected string $iss;
    /** @var string[] */
    protected array $origins;
    protected string $signingKey;

    /** @param string[] $origins */
    public function __construct(string $issuer, string $signingKey, array $origins = [])
    {
        $this->iss = $issuer;
        $this->origins = $origins;
        $this->signingKey = $signingKey;
    }

    /** @return array<string, mixed> */
    public function generateUnsignedJwt(JwtPayload $payload): array
    {
        return [
            'iss' => $this->iss,
            'aud' => self::AUDIENCE,
            'typ' => self::JWT_TYPE,
            'iat' => time(),
            'payload' => $payload->toArray(),
            'origins' => $this->origins,
        ];
    }

    public function generateSignedJwt(JwtPayload $payload): string
    {
        return JWT::encode(
            $this->generateUnsignedJwt($payload),
            $this->signingKey,
            "RS256"
        );
    }
}
