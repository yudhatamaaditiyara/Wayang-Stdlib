<?php declare(strict_types=1);
/**
 * Copyright 2020 Yudha Tama Aditiyara
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
}