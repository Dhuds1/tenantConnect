<?php

namespace App\Enums;

enum PriorityType: string
{
  case LOW = 'low';
  case MEDIUM = 'medium';
  case HIGH = 'high';
  case URGENT = 'urgent';
}