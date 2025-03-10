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
namespace BookneticVendor\Google\Service\Calendar;

class EventExtendedProperties extends \BookneticVendor\Google\Model
{
    /**
     * @var string[]
     */
    public $private;
    /**
     * @var string[]
     */
    public $shared;
    /**
     * @param string[]
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }
    /**
     * @return string[]
     */
    public function getPrivate()
    {
        return $this->private;
    }
    /**
     * @param string[]
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
    }
    /**
     * @return string[]
     */
    public function getShared()
    {
        return $this->shared;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(EventExtendedProperties::class, 'BookneticVendor\\Google_Service_Calendar_EventExtendedProperties');
