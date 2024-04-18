<?php

namespace App\DataTypes;

abstract class OfferStatus {
    const DRAFT = "Szkic";
    const READY = "Gotowa";
    const SENT = "Wysłana";

    const TYPES = [
        self::DRAFT,
        self::READY,
        self::SENT
    ];
}
