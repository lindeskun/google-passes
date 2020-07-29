<?php

namespace GooglePasses\Helpers;


class JwtPayload
{
    private $payload = [];

    public function addOfferClass($resourcePayload)
    {
        if (!array_key_exists("offerClasses", $this->payload)) {
            $this->payload["offerClasses"] = [];
        }
        $this->payload["offerClasses"][] = $resourcePayload;

        return;
    }

    public function addOfferObject($resourcePayload)
    {
        if (!array_key_exists("offerObjects", $this->payload)) {
            $this->payload["offerObjects"] = [];
        }
        $this->payload["offerObjects"][] = $resourcePayload;

        return;
    }

    public function addLoyaltyClass($resourcePayload)
    {
        if (!array_key_exists("loyaltyClasses", $this->payload)) {
            $this->payload["loyaltyClasses"] = [];
        }
        $this->payload["loyaltyClasses"][] = $resourcePayload;

        return;
    }

    public function addLoyaltyObject($resourcePayload)
    {
        if (!array_key_exists("loyaltyObjects", $this->payload)) {
            $this->payload["loyaltyObjects"] = [];
        }
        $this->payload["loyaltyObjects"][] = $resourcePayload;

        return;
    }

    public function addGiftcardClass($resourcePayload)
    {
        if (!array_key_exists("giftCardClasses", $this->payload)) {
            $this->payload["giftCardClasses"] = [];
        }
        $this->payload["giftCardClasses"][] = $resourcePayload;

        return;
    }

    public function addGiftcardObject($resourcePayload)
    {
        if (!array_key_exists("giftCardObjects", $this->payload)) {
            $this->payload["giftCardObjects"] = [];
        }
        $this->payload["giftCardObjects"][] = $resourcePayload;

        return;
    }

    public function addEventTicketClass($resourcePayload)
    {
        if (!array_key_exists("eventTicketClasses", $this->payload)) {
            $this->payload["eventTicketClasses"] = [];
        }
        $this->payload["eventTicketClasses"][] = $resourcePayload;

        return;
    }

    public function addEventTicketObject($resourcePayload)
    {
        if (!array_key_exists("eventTicketObjects", $this->payload)) {
            $this->payload["eventTicketObjects"] = [];
        }
        $this->payload["eventTicketObjects"][] = $resourcePayload;

        return;
    }

    public function addFlightClass($resourcePayload)
    {
        if (!array_key_exists("flightClasses", $this->payload)) {
            $this->payload["flightClasses"] = [];
        }
        $this->payload["flightClasses"][] = $resourcePayload;

        return;
    }

    public function addFlightObject($resourcePayload)
    {
        if (!array_key_exists("flightObjects", $this->payload)) {
            $this->payload["flightObjects"] = [];
        }
        $this->payload["flightObjects"][] = $resourcePayload;

        return;
    }

    public function addTransitClass($resourcePayload)
    {
        if (!array_key_exists("transitClasses", $this->payload)) {
            $this->payload["transitClasses"] = [];
        }
        $this->payload["transitClasses"][] = $resourcePayload;

        return;
    }

    public function addTransitObject($resourcePayload)
    {
        if (!array_key_exists("transitObjects", $this->payload)) {
            $this->payload["transitObjects"] = [];
        }
        $this->payload["transitObjects"][] = $resourcePayload;

        return;
    }

    public function toArray() {
        return $this->payload;
    }
}