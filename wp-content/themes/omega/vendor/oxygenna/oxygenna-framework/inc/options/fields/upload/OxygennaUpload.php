<?php
/**
 * Upload option
 *
 * @package ThemeFramework
 * @subpackage Options
 * @since 1.0
 *
 * @copyright (c) 2014 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.7.3
 */

/**
 * Uploads media files
 */
class OxygennaUpload extends OxygennaOption
{
    /**
     * Creates option
     *
     * @return void
     *              @since 1.0
     **/
    public function __construct($field, $value, $attr)
    {
        parent::__construct($field, $value, $attr);
        $this->set_attr('type', 'hidden');
        $this->set_attr('value', esc_attr($value));
        $this->set_attr('id', $field['id']);
        $this->set_attr('data-store', $field['store']);
    }

    /**
     * Overrides super class render function
     *
     * @return string HTML for option
     *                @since 1.0
     **/
    public function render($echo = true)
    {
        switch ($this->_field['store']) {
            case 'id':
                $image = wp_get_attachment_image_src($this->_value, 'full');
                $url = $image !== false ? $image[0] : '';
                $value = $this->_value;
                break;
            case 'url':
                $url = $this->_value;
                $value = $this->_value;
                break;
        }

        $this->create_option($value, $url);
    }

    private function create_option($value, $url)
    {
        $src = ' src="' . $url . '"';
        // hide / show image and buttons
        $hide_preview = $url ? '' : 'display:none;';
        $hide_set_button = !$url ? '' : 'display:none;';

        // create preview image
        $option = '<img' .  $src . ' class="oxy-image-option-preview" style="' . $hide_preview . '" />';
        $option .= '<input ' . $this->create_attributes() . '/>';
        $option .= '<input type="button" class="oxy-set-image" value="' . __('Set Image', 'omega-admin-td') . '" style="' . $hide_set_button . '"/>';
        $option .= '<input type="button" class="oxy-remove-image" value="' . __('Remove Image', 'omega-admin-td') . '" style="' . $hide_preview . '"/>';

        echo $option;
    }

    public function enqueue()
    {
        parent::enqueue();
        // load styles
        wp_enqueue_style('oxy-option-upload', OXY_TF_URI . 'assets/css/options/oxy-option-upload.css', array('thickbox'));
        // load scripts
        wp_enqueue_script('upload-field', OXY_TF_URI . 'inc/options/fields/upload/upload.js', array('jquery', 'thickbox', 'media-upload'));
    }
}
