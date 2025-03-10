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

class LabelColor extends \BookneticVendor\Google\Model
{
    /**
     * @var string
     */
    public $backgroundColor;
    /**
     * @var string
     */
    public $textColor;
    /**
     * @param string
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }
    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * @param string
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;
    }
    /**
     * @return string
     */
    public function getTextColor()
    {
        return $this->textColor;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LabelColor::class, 'BookneticVendor\\Google_Service_Gmail_LabelColor');
