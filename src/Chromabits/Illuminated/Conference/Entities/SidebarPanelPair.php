<?php

/**
 * Copyright 2015, Eduardo Trujillo <ed@chromabits.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Illuminated package
 */

namespace Chromabits\Illuminated\Conference\Entities;

use Chromabits\Nucleus\Foundation\BaseObject;

/**
 * Class SidebarPanelPair.
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Illuminated\Conference\Entities
 */
class SidebarPanelPair extends BaseObject
{
    /**
     * @var mixed
     */
    protected $sidebar;

    /**
     * @var mixed
     */
    protected $panel;

    /**
     * Construct an instance of a SidebarPanelPair.
     *
     * @param mixed $sidebar
     * @param mixed $panel
     */
    public function __construct($sidebar, $panel)
    {
        parent::__construct();

        $this->sidebar = $sidebar;
        $this->panel = $panel;
    }

    /**
     * @return mixed
     */
    public function getSidebar()
    {
        return $this->sidebar;
    }

    /**
     * @return mixed
     */
    public function getPanel()
    {
        return $this->panel;
    }

    /**
     * @return bool
     */
    public function hasSidebar()
    {
        return $this->sidebar !== null;
    }
}
