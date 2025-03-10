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

class MessagePartBody extends \BookneticVendor\Google\Model
{
    /**
     * @var string
     */
    public $attachmentId;
    /**
     * @var string
     */
    public $data;
    /**
     * @var int
     */
    public $size;
    /**
     * @param string
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }
    /**
     * @return string
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }
    /**
     * @param string
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param int
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MessagePartBody::class, 'BookneticVendor\\Google_Service_Gmail_MessagePartBody');
