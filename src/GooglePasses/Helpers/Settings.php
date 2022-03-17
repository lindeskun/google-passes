<?php

declare(strict_types=1);

namespace GooglePasses\Helpers;

use GooglePasses\Exception\InvalidArgumentException;

class Settings
{
    public const TYPE_OFFER = 1;
    public const TYPE_EVENT_TICKET = 2;
    public const TYPE_FLIGHT = 3;
    public const TYPE_GIFT_CARD = 4;
    public const TYPE_LOYALTY = 5;
    public const TYPE_TRANSIT = 6;

    protected const TYPES_MAP = [
        self::TYPE_OFFER => 'OFFER',
        self::TYPE_EVENT_TICKET => 'EVENTTICKET',
        self::TYPE_FLIGHT => 'FLIGHT',
        self::TYPE_GIFT_CARD => 'GIFTCARD',
        self::TYPE_LOYALTY => 'LOYALTY',
        self::TYPE_TRANSIT => 'TRANSIT',
    ];

    protected int $type;
    protected string $classId;
    protected string $objectId;

    public function __construct(int $type, string $classId, string $objectId)
    {
        if (false === \in_array($type, array_keys(static::TYPES_MAP), true)) {
            throw new InvalidArgumentException('Invalid pass type');
        }

        $this->type = $type;
        $this->classId = $classId;
        $this->objectId = $objectId;
    }

    public static function makeClassId(string $issuerId, int $type, array $metadata): string
    {
        return sprintf("%s.%s", $issuerId, static::makeUid('class', $type, $metadata));
    }

    public static function makeObjectId($issuerId, $type, array $metadata): string
    {
        return sprintf("%s.%s", $issuerId, static::makeUid('object', $type, $metadata));
    }

    public static function getTypeAsString(int $typeId): ?string
    {
        return static::TYPES_MAP[$typeId] ?? null;
    }

    public function getClassId(): string
    {
        return $this->classId;
    }

    public function getObjectId(): string
    {
        return $this->objectId;
    }

    /** @param array<string, mixed> $metadata */
    protected static function makeUid(string $entity, int $type, array $metadata): string
    {
        $metadata += [
            'type' => static::getTypeAsString($type),
            'entity' => $entity,
        ];

        return hash('sha256', json_encode($metadata));
    }
}
