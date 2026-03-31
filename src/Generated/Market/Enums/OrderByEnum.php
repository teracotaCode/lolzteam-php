<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Enums;

/**
 * Auto-generated enum.
 */
enum OrderByEnum: string
{
    case PRICE_TO_UP = 'price_to_up';
    case PRICE_TO_DOWN = 'price_to_down';
    case PDATE_TO_DOWN = 'pdate_to_down';
    case PDATE_TO_UP = 'pdate_to_up';
    case PDATE_TO_DOWN_UPLOAD = 'pdate_to_down_upload';
    case PDATE_TO_UP_UPLOAD = 'pdate_to_up_upload';
    case EDATE_TO_UP = 'edate_to_up';
    case EDATE_TO_DOWN = 'edate_to_down';
    case DDATE_TO_UP = 'ddate_to_up';
    case DDATE_TO_DOWN = 'ddate_to_down';
}
