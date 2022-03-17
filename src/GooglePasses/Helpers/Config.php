<?php

declare(strict_types=1);

namespace GooglePasses\Helpers;

use GooglePasses\Exception\InvalidArgumentException;

class Config
{
    public const WALLET_OBJECT_SCOPE = 'https://www.googleapis.com/auth/wallet_object.issuer';

    protected string $issuerId;
    protected string $serviceAccountEmail;
    protected string $serviceAccountFilePath;
    protected string $applicationName;
    /** @var string[] */
    protected array $origins;
    /** @var array<string, mixed> */
    protected array $serviceAccountCredentials;

    public function __construct(
        string $issuerId,
        string $serviceAccountEmail,
        string $serviceAccountFile,
        string $applicationName,
        array $origins
    ) {
        $this->issuerId = $issuerId;
        $this->serviceAccountEmail = $serviceAccountEmail;
        $this->serviceAccountFilePath = $serviceAccountFile;
        $this->applicationName = $applicationName;
        $this->origins = $origins;
        $this->loadServiceAccountFile();
    }

    public function getPrivateKey(): ?string
    {
        return $this->serviceAccountCredentials['private_key'] ?? null;
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getServiceAccountEmail(): string
    {
        return $this->serviceAccountEmail;
    }

    public function getServiceAccountFilePath(): string
    {
        return $this->serviceAccountFilePath;
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }

    /** @return string[] */
    public function getOrigins(): array
    {
        return $this->origins;
    }

    /** @return string[] */
    public function getScopes(): array
    {
         return [static::WALLET_OBJECT_SCOPE];
    }

    protected function loadServiceAccountFile(): void
    {
        $jsonFile = file_get_contents(realpath($this->serviceAccountFilePath));

        if (false === $jsonFile || 0 === mb_strlen($jsonFile)) {
            throw new InvalidArgumentException("Service account file not found or isn't readable.");
        }

        try {
            $this->serviceAccountCredentials = \json_decode($jsonFile, true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new InvalidArgumentException("Service account file contains invalid JSON.");
        }

        if (0 === \count($this->serviceAccountCredentials)) {
            throw new InvalidArgumentException("Service account file contains invalid JSON.");
        }

        if (false === \array_key_exists('private_key', $this->serviceAccountCredentials)) {
            throw new InvalidArgumentException("Service account file doesn't contains private key.");
        }
    }
}
