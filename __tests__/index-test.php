<?php

header("Content-type: text/javascript");
error_reporting(E_ALL);

class Expectation {
  public $_expected;
  
  public function __construct($value) {
    $this->_expected = $value;
    return $this;
  }
  
  private function get() {
    return $this->_expected;
  }
  
  private function dieTrace() {
    echo "Hmm, something went wrong. Backtrace:\n\n";
    $trace = debug_backtrace();
    for ($i = 2; $i < count($trace); $i++) {
      list($file, $line, $func, $args) = array_values($trace[$i]);
      $file = basename($file);
      $args = print_r($args, true);
      echo "$file,\tLine $line: function \"$func\" with arguments: $args\n\n";
    }
    die();
  }
  
  private function testCase($condition) {
    if ($condition) {
      echo "Case passed!\n";
    } else {
      $this->dieTrace();
    }
  }
  
  public function toBe($compare) {
    $this->testCase($this->get() == $compare);
  }
  
  public function toBeTruthy() {
    $this->testCase($this->get());
  }
  
  public function toBeFalsy() {
    $this->testCase(!$this->get());
  }
  
  public function toBeLessThan($compare) {
    $this->testCase($this->get() < $compare);
  }
  
  public function toBeLessThanOrEqualTo($compare) {
    $this->testCase($this->get() <= $compare);
  }
  
  public function toBeGreaterThan($compare) {
    $this->testCase($this->get() > $compare);
  }
  
  public function toBeGreaterThanOrEqualTo($compare) {
    $this->testCase($this->get() >= $compare);
  }
}

function expect($value) {
  return new Expectation($value);
}

function it($explanation, $func) {
  $func();
}

function xit($explanation, $func) {
  // Do nothing.
}

it ('should expect properly', function() {
  expect(1 + 2)->toBe(3);
  expect(3)->toBeTruthy();
  expect(0)->toBeFalsy();
  expect(1)->toBeLessThan(2);
  expect(2)->toBeLessThanOrEqualTo(2);
  expect(2)->toBeLessThanOrEqualTo(1);
});

?>
