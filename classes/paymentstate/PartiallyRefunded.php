<?php

namespace OFFLINE\Mall\Classes\PaymentState;

class PartiallyRefundedState extends PaymentState
{
    public static function getAvailableTransitions(): array
    {
        return [
            PendingState::class,
        ];
    }

    public static function color(): string
    {
        return '#a19980';
    }
}
