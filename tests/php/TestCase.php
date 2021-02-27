<?php
/**
 * Tests Case class.
 *
 * @package SocialMedia
 */

namespace \SocialMedia;

use Mockery;
use WP_Mock;

/**
 * Tests for the Router class.
 */
class TestCase extends WP_Mock\Tools\TestCase {

	use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

}
