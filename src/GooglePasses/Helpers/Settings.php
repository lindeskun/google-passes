<?php


namespace GooglePasses\Helpers;


use GooglePasses\Exceptions\InvalidArgumentException;

class Settings
{
    const TYPE_OFFER = 1;
    const TYPE_EVENTTICKET = 2;
    const TYPE_FLIGHT = 3;
    const TYPE_GIFTCARD = 4;
    const TYPE_LOYALTY = 5;
    const TYPE_TRANSIT = 6;

    private static $typesMap = [
        self::TYPE_OFFER => 'OFFER',
        self::TYPE_EVENTTICKET => 'EVENTTICKET',
        self::TYPE_FLIGHT => 'FLIGHT',
        self::TYPE_GIFTCARD => 'GIFTCARD',
        self::TYPE_LOYALTY => 'LOYALTY',
        self::TYPE_TRANSIT => 'TRANSIT',
    ];

    private $type;
    private $classId;
    private $objectId;

    public function __construct($issuerId, $type, $classId, $objectId)
    {
        if (!in_array($type, array_keys(self::$typesMap), true)) {
            throw new InvalidArgumentException('Invalid pass type');
        }
        $this->type = $type;
        $this->classId = $classId;
        $this->objectId = $objectId;
    }

    public static function makeClassId($issuerId, $type, array $metadata)
    {
        return sprintf("%s.%s" , $issuerId, self::makeUid('class', $type, $metadata));
    }

    public static function makeObjectId($issuerId, $type, array $metadata)
    {
        return sprintf("%s.%s" , $issuerId, self::makeUid('object', $type, $metadata));
    }

    protected static function makeUid($entity, $type, array $metadata)
    {
        $metadata += [
            'type' => self::getTypeAsString($type),
            'entity' => $entity,
        ];
        return hash('sha256', json_encode($metadata));
    }

    /**
     * @param int $typeId
     * @return string|null
     */
    public static function getTypeAsString($typeId) {
        return isset(self::$typesMap[$typeId]) ? self::$typesMap[$typeId] : null;
    }

    /**
     * @return mixed
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * @return mixed
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
}