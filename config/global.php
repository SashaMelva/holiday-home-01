<?php
return [
    'DATE_ARRIVAL' => date("Y-m-d"),
    'DATE_DEPARTURE' => date("Y-m-d", strtotime("+1 days")),
];
