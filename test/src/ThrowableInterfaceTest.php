<?php declare(strict_types=1);
/**
 * Copyright 2020 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace Wayang\Stdlib;

use Throwable;
use ReflectionClass;
use PHPUnit\Framework\TestCase;

class ThrowableInterfaceTest extends TestCase
{
  public function testMustBeInterface(){
    $rc = new ReflectionClass(ThrowableInterface::class);
    $this->assertTrue($rc->isInterface());
  }

  public function testMustBeSubclassOfThrowable(){
    $rc = new ReflectionClass(ThrowableInterface::class);
    $this->assertTrue($rc->isSubclassOf(Throwable::class));
  }
}