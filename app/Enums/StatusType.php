<?php

namespace App\Enums;

enum StatusType: string
{
  case OPEN = 'open';
  case REVIEW = 'review';
  case ACCEPT = 'accept';
  case CLOSE = 'close';
  case ARCHIVE = 'archive';
}
