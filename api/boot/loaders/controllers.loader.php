<?php
foreach (glob(__DIR__ . "/../../controllers/*.php") as $filename) {
  include_once $filename;
}
