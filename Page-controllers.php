<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("page_model");
        $this->load->library('parser');
    }

    public function page_detail($link=false){
        $content = $this->page_model->get_content($link); 
        if(isset($content)){
                $keywords = $this->page_model->get_keywords($content->id);
                $content_gallery = $this->page_model->page_gallery($content->id);
                if($content->image <> "") {$page_image = '<img class="page-image" src="images/'.$page->image.'">';}else{$page_image="";}
                $data = array(
                    'id'               => $content->id,
                    'name'             => $content->name,
                    'content'          => $content->content,
                    'image'            => $page_image,
                    'link'             => $content->link,
                    'meta_description' => $content->meta_description,
                    'seo_title'        => $content->seo_title,
                    'keywords'         => $keywords->result_array(),
                    'icerik_gallery'   => $content_gallery->result_array(),
                );
                $this->parser->parse('page-template', $data);
            }else{
                $this->load->view("404.html");
            }
    }

}
