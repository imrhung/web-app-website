<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class File extends App_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    /*
     * Upload photo to same folder of source code. :)
     */
    public function upload() {
        // Codeigniter config
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1768';

        //set filename in config for upload
        $config['file_name'] = md5(time());

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Init result json file:
        $result = array();
        $result['code'] = -1;
        $result['message'] = "";
        $result['info'] = array();

        if ($this->upload->do_upload()) {

            // Upload successful
            $result['code'] = 1;
            $result['message'] = "Success";
            $result['info'] = array(
                'file_name' => $this->upload->file_name
            );
        } else {
            // Upload error
            $result['code'] = 0;
            $result['message'] = "Fail";
        }

        echo json_encode($result);
    }
    
    /*
     * Upload service for jQuery File Upload 
     */
    public function jqfupload(){
        $this->load->library('UploadHandler');
        
        // Option for the UploadHandler, but seem like not work, so I have to do
        // the config inside UploadHandler source code.
        $options = array(
            
            'upload_dir'=>'/assets/upload/', 
            'upload_url'=>  $this->config->base_url()+'assets/upload/'
            );
        
        $upload_handler = new UploadHandler($options);
    }

}
