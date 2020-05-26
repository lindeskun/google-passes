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

    public function __construct($type, $classId, $objectId)
    {
        if (!in_array($type, array_keys(self::$typesMap), true)) {
            throw new InvalidArgumentException('Invalid pass type');
        }
        $this->type = $type;
        $this->classId = $classId;
        $this->objectId = $objectId;
    }

    public static function makeClassId($type, array $metadata)
    {
        $metadata += [
            'type' => self::getTypeAsString($type),
            'entity' => 'class',
        ];
        return hash('sha256', json_encode($metadata));
    }
    public static function makeObjectId($type, array $metadata)
    {
        $metadata += [
            'type' => self::getTypeAsString($type),
            'entity' => 'object',
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