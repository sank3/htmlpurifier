<?php

/**
 * Defines all video-related elements found in HTML 5.
 */
class HTMLPurifier_HTMLModule_Video extends HTMLPurifier_HTMLModule
{
    /**
     * @type string
     */
    public $name = 'Video';

    /**
     * @type bool
     */
    public $safe = false;

    /**
     * @type array
     */
    public $content_sets = array(
        'Block' => 'Video'
    );

    /**
     * @param HTMLPurifier_Config $config
     */
    public function setup($config)
    {
        $this->addElement('video', 'Block', 'Optional: (source, Flow) | (Flow, source) | Flow', 'Common', array(
            'src' => 'URI',
            'type' => 'Text',
            'width' => 'Length',
            'height' => 'Length',
            'poster' => 'URI',
            'preload' => 'Enum#auto,metadata,none',
            'autoplay' => 'Bool',
            'loop' => 'Bool',
            'controls' => 'Bool',
        ));
        $this->addElement('source', 'Block', 'Flow', 'Common', array(
            'src' => 'URI',
            'type' => 'Text',
        ));
    }
}
