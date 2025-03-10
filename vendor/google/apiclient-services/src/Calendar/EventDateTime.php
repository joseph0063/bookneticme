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

class EventDateTime extends \BookneticVendor\Google\Model
{
    /**
     * @var string
     */
    public $date;
    /**
     * @var string
     */
    public $dateTime;
    /**
     * @var string
     */
    public $timeZone;
    /**
     * @param string
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param string
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }
    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * @param string
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(EventDateTime::class, 'BookneticVendor\\Google_Service_Calendar_EventDateTime');
