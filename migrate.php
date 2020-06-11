<?php

use DB;

$results = DB::select('SELECT * FROM `users` WHERE `id` = 1');
