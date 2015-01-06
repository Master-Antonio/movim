<?php

class ContactController extends BaseController {
    function load() {
        $this->session_only = true;
    }

    function dispatch() {
        $this->page->setTitle(__('title.main', APP_TITLE));
        $this->page->setColor('orange');
    }
}