<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace Wayang\Stdlib;

use ReflectionClass;
use PHPUnit\Framework\TestCase;

class StringableInterfaceTest extends TestCase
{
  public function testMustBeInterface(){
    $rc = new ReflectionClass(StringableInterface::class);
    $this->assertTrue($rc->isInterface());
  }

  public function testMustBeSubclassOfStringable(){
    $rc = new ReflectionClass(StringableInterface::class);
    if (PHP_VERSION_ID >= 80000) {
      $this->assertTrue($rc->isSubclassOf(\Stringable::class));
    } else {
      $this->assertTrue(true);
    }
  }
}