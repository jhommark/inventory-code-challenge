<?php

class JsonSummary extends Summary implements SummaryInterface {
  public function output(): string {
    header("Content-type: application/json");

    return json_encode($this->data());
  }
}
