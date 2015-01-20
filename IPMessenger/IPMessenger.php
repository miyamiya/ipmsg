<?php
/**
 * IPMsg Library
 *
 *
 * @see http://ipmsg.org/protocol.txt
 */
class IPMessenger
{
    /**
     * can use options
     *
     * @param array
     */
    private $defined_options = array(
        'makeconfig',
        'login',
        'users',
        'send',
        'msgs',
        'logout'
    );

    /**
     * Constructor
     *
     * setup process
     *
     * @param mixed $option  see $defined_options
     * @param mixed $value   option value
     */
    public function __construct($option, $value)
    {
        if (array_search($option, $this->defined_options, true) === false
            || ($option === 'send' && empty($value))){
                throw new Exception($this->usage(), 1); 
        }
    }

    /**
     * Usage
     *
     * @return string    usage text
     */
    private function usage()
    {
        return <<<HELP
Usage: ipmsg makeconfig
       ipmsg login [<config path>]
       ipmsg users
       ipmsg send <user id>
       ipmsg msgs [<message id>]
       ipmsg logout

HELP;
    }
}
