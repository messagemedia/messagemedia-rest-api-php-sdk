<?php
/**
 * StatusBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */

/**
 * MessageMedia REST API
 *
 * Australia's Leading Messaging Solutions for Business and Enterprise.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@messagemedia.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Do not edit the class manually.
 */

namespace MessageMedia\RESTAPI\Model;

use \ArrayAccess;

/**
 * StatusBody Class Doc Comment
 *
 * @category    Class */
 // @description Filter results by message status. Can&#39;t be combined with statuses.
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class StatusBody {
    const CANCELLED = 'CANCELLED';
    const DELIVERED = 'DELIVERED';
    const ENROUTE = 'ENROUTE';
    const EXPIRED = 'EXPIRED';
    const HELD = 'HELD';
    const PROCESSED = 'PROCESSED';
    const PROCESSING = 'PROCESSING';
    const QUEUED = 'QUEUED';
    const REJECTED = 'REJECTED';
    const SCHEDULED = 'SCHEDULED';
    const SUBMITTED = 'SUBMITTED';
    

    
}


