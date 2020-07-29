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

namespace GooglePasses\Helpers;

use Firebase\JWT\JWT;

class GpapJwt {
    const AUDIENCE = 'google';
    const JWT_TYPE = 'savetoandroidpay';

    private $iss;
    private $origins;
    private $signingKey;

    function __construct(
        $issuer,
        $signingKey,
        array $origins = []
    ){
        $this->iss = $issuer;
        $this->origins = $origins;
        $this->signingKey = $signingKey;
    }

    public function generateUnsignedJwt(JwtPayload $payload){
        $unsignedJwt = array();
        $unsignedJwt['iss'] = $this->iss;
        $unsignedJwt['aud'] = self::AUDIENCE;
        $unsignedJwt['typ'] = self::JWT_TYPE;
        $unsignedJwt['iat'] = time();
        $unsignedJwt['payload'] = $payload->toArray();
        $unsignedJwt['origins'] = $this->origins;

        return $unsignedJwt;
    }

    public function generateSignedJwt(JwtPayload $payload) {
        $jwtToSign = $this->generateUnsignedJwt($payload);
        return JWT::encode($jwtToSign, $this->signingKey, "RS256");
    }
}
