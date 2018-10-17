<?php
class Daybreaker {
    function toGroups($array) {
        foreach($array as $item) {
            $groups[$item[1] . $item[2]][] = $item;
        }
        return $groups;
    }

    function toTime($item) {
        $from = (isset($item[1]) && !empty($item[1])) ? $item[1] : null;
        $to = (isset($item[2]) && !empty($item[2])) ? $item[2] : null;

        if($from && $to) return $from . ' - ' . $to;
        elseif($to || $from) return $from . $to;
        else return 'Stängt';

    }

    function toInterval($groups) {
        $interval = [];

        foreach($groups as $group) {
            if(count($group) < 2) {
                $interval[$group[0][0]] = $this->toTime($group[0]);
            } else {
                $first = mb_substr($group[0][0], 0, 3);
                $last = mb_substr(end($group)[0], 0, 3);
                $time = $this->toTime($group[0]);
                $interval[$first . ' - ' . $last] = $time;
            }
        }
        return $interval;
    }

   function convert($array, $weekdays) {
    $groups = $this->toGroups($array);
    $interval = $this->toInterval($groups);
    
    return $interval;
  }
}