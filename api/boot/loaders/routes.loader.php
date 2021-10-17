<?php
foreach (glob(__DIR__ . "/../../routes/*.php") as $filename) {
  include_once $filename;
}
