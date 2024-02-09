<?php

namespace App\Enums;

enum StatusType: string
{
  case OPEN = 'open';
  case UNDER_REVIEW = 'under_review';
  case DONE = 'done';
}