<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace Wayang\Stdlib;

if (PHP_VERSION_ID >= 80000) {
  interface StringableInterface extends \Stringable{}
} else {
  interface StringableInterface{}
}