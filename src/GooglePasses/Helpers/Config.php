<?php


namespace GooglePasses\Helpers;


use GooglePasses\Exceptions\InvalidArgumentException;

class Config
{
    private $issuerId;

    private $serviceAccountEmail;

    private $serviceAccountFilePath;

    private $applicationName;

    private $origins;

    private $serviceAccountCredentials;

    public function __construct(
        $issuerId,
        $serviceAccountEmail,
        $serviceAccountFile,
        $applicationName,
        array $origins
    )
    {
        $this->issuerId = $issuerId;
        $this->serviceAccountEmail = $serviceAccountEmail;
        $this->serviceAccountFilePath = $serviceAccountFile;
        $this->applicationName = $applicationName;
        $this->origins = $origins;
        $this->loadServiceAccountFile();
    }

    private function loadServiceAccountFile()
    {
        $jsonFile = file_get_contents(realpath($this->serviceAccountFilePath));

        if (empty($jsonFile)) {
            throw new InvalidArgumentException("Service account file not found or isn't readable");
        }

        $this->serviceAccountCredentials = json_decode($jsonFile, true);

        if (empty($this->serviceAccountCredentials)) {
            throw new InvalidArgumentException("Service account file contains invalid JSON");
        }

        if (!isset($this->serviceAccountCredentials['private_key'])) {
            throw new InvalidArgumentException("Service account file doesn't contains private key");
        }
    }

    /**
     * @return mixed
     */
    public function getPrivateKey()
    {
        return $this->serviceAccountCredentials['private_key'];
    }

    /**
     * @return mixed
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * @return mixed
     */
    public function getServiceAccountEmail()
    {
        return $this->serviceAccountEmail;
    }

    /**
     * @return mixed
     */
    public function getServiceAccountFilePath()
    {
        return $this->serviceAccountFilePath;
    }

    /**
     * @return mixed
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * @return array
     */
    public function getOrigins()
    {
        return $this->origins;
    }
}