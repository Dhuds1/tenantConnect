<?php

namespace App\Enums;

enum TopicTypes: string
{
  case BUILDING = "building";
  case FLOOR = "floor";
  case UNIT = "unit";
  case SUGGESTION = "suggestion";
  case CONCERN = "concern";
}
