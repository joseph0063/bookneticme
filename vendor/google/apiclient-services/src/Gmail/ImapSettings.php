<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace BookneticVendor\Google\Service\Gmail;

class ImapSettings extends \BookneticVendor\Google\Model
{
    /**
     * @var bool
     */
    public $autoExpunge;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $expungeBehavior;
    /**
     * @var int
     */
    public $maxFolderSize;
    /**
     * @param bool
     */
    public function setAutoExpunge($autoExpunge)
    {
        $this->autoExpunge = $autoExpunge;
    }
    /**
     * @return bool
     */
    public function getAutoExpunge()
    {
        return $this->autoExpunge;
    }
    /**
     * @param bool
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    /**
     * @param string
     */
    public function setExpungeBehavior($expungeBehavior)
    {
        $this->expungeBehavior = $expungeBehavior;
    }
    /**
     * @return string
     */
    public function getExpungeBehavior()
    {
        return $this->expungeBehavior;
    }
    /**
     * @param int
     */
    public function setMaxFolderSize($maxFolderSize)
    {
        $this->maxFolderSize = $maxFolderSize;
    }
    /**
     * @return int
     */
    public function getMaxFolderSize()
    {
        return $this->maxFolderSize;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ImapSettings::class, 'BookneticVendor\\Google_Service_Gmail_ImapSettings');
