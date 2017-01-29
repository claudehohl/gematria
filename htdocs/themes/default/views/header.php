<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$page_title = 'Gematriakartei';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
$theme = $this->config->item('theme');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=320" />
		<title><?php echo $page_title; ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() . 'favicon.ico'; ?>" />
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/default/js/',
    'style_dir'  => 'themes/' . $theme . '/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => $this->config->item('base_url'),
    'combine'	 => true,
    'dev'		 => false,
));

// CSS
$this->carabiner->css('bootstrap.css');
$this->carabiner->css('bootstrap-theme.css');
$this->carabiner->css('jquery.atwho.css');
$this->carabiner->css('main.css');

$this->carabiner->display('css'); 

$searchparams = ($this->input->get('search') ? '?search=' . $this->input->get('search') : '');
$searchparams = str_replace('"', '&quot;', $searchparams);

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>
	<body>

