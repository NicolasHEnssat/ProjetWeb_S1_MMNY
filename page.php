<?php
class page
{
    protected $page;

    public function __construct()
    {
        $this->page = array();
        $this->page['head'] = '<!DOCTYPE html>'."\n".'<html>'."\n".'<head>'."\n".'<meta charset="utf-8">'."\n".'<title>ENSSATBook</title>'."\n".'</head>'."\n".'<body>';
        $this->page['body'] = array();
        $this->page['footer'] = '<footer>'."\n".'</footer>'."\n".'</body>'."\n".'</html>';
    }

    public function add_body($body)
    {
        if (is_scalar($body))
        {
            $this->page['body'][] = $body;
            return true;
        }
        return false;
    }

    public function execute()
    {
        $this->header();
        $this->body();
        $this->footer();
    }

    // entete html balise body ouvrante incluse
    protected function header()
    {
      echo $this->page['head'];
    }

    // contenu de la balise body
    protected function body()
    {
        if (is_array($this->page['body']))
        {
            echo implode("\n", $this->page['body']);
        }
    }

    // cloture html balise body fermante incluse
    protected function footer()
    {
      echo $this->page['footer'];
    }
}
?>
