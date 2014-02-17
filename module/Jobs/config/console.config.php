<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   AGPLv3
 */

return array(
        'router' => array(
            'routes' => array(
                'jobs' => array(
                    'options' => array(
                        'route' => 'jobs generatekeywords [--filter=]',
                        'defaults' => array(
                            'controller' => 'Jobs/Console',
                            'action' => 'generatekeywords',
                        ),
                    ),
                ),
            ),
        ),
);