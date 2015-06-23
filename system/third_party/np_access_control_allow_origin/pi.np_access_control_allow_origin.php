<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
    'pi_name'           => 'Set Memory',
    'pi_version'        => '1.0',
    'pi_author'         => 'Nathan Pitman',
    'pi_author_url'     => 'http://github.com/nathanpitman',
    'pi_description'    => 'Useful if you want to grant access to content in a template via a AJAX request from another domain',
    'pi_usage'          => Np_access_control_allow_origin::usage()
);

/**
 * Np_access_control_allow_origin Class
 *
 * @package         ExpressionEngine
 * @category        Plugin
 * @author          Nathan Pitman
 * @copyright       Copyright (c) 2015 Nathan Pitman.
 * @link            http://github.com/nathanpitman
 */

class Np_access_control_allow_origin {

    /**
     * Constructor
     *
     */
    function Np_access_control_allow_origin()
    {

        if (!$domain = ee()->TMPL->fetch_param('domain')) {
            header('Access-Control-Allow-Origin: *');
        } else {
            header('Access-Control-Allow-Origin: {$domain}');
        }
    }

    /**
     * Usage
     *
     * Plugin Usage
     *
     * @access  public
     * @return  string
     */
    function usage()
    {
        ob_start();
        ?>

        {exp:np_access_control_allow_origin domain="www.example.com"}

        <?php
        $buffer = ob_get_contents();

        ob_end_clean();

        return $buffer;
    }

}

// END CLASS

/* End of file pi.np_access_control_allow_origin.php */
/* Location: ./system/expressionengine/third_party/np_access_control_allow_origin/pi.np_access_control_allow_origin.php */