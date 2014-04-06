<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\EventDispatcher\Event;

use Behat\Gherkin\Node\BackgroundNode;
use Behat\Gherkin\Node\NodeInterface;
use Behat\Testwork\EventDispatcher\Event\LifecycleEvent;

/**
 * Represents a background event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class BackgroundTested extends LifecycleEvent implements ScenarioLikeTested
{
    const BEFORE = 'tester.background_tested.before';
    const AFTER = 'tester.background_tested.after';

    /**
     * Returns background node.
     *
     * @return BackgroundNode
     */
    abstract public function getBackground();

    /**
     * Returns node.
     *
     * @return NodeInterface
     */
    final public function getNode()
    {
        return $this->getBackground();
    }
}
