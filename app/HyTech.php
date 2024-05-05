<?php
class HyTech {
    protected $variables = array();
    protected $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function set($name, $value) {
        $this->variables[$name] = $value;
    }

    public function render() {
        if (!file_exists($this->file)) {
            return 'Error: Template file not found';
        }

        extract($this->variables);

        ob_start();
        include($this->file);
        return ob_get_clean();
    }
}

