<?php

function a_function() {
}

const A_CONSTANT = 1;

class AClass {
  public $fld;
  function testThis() {
    echo $this->fld;
  }
}

class Exception {
}

interface I {
  const CST_IN_INTERFACE = 0;
}

function test_throw() {
  throw new Exception();
}

function test_instanceof() {
  if ($x instanceof Exception) {
  }
}

function test_interface_lookup() {
  echo I::CST_IN_INTERFACE;
}
