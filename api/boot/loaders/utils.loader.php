<?php
foreach (glob(__DIR__ . "/../../utils/*.php") as $filename) {
  include_once $filename;
}
