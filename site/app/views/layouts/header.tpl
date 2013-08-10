<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Title -->
<title>{$page_title}</title>

<!-- Javascript -->
<script src="http://code.jquery.com/jquery.js"></script>
{foreach from=$javascripts item=js}
<script type="text/javascript" src="{$request.base_path}/js/{$js}"></script>
{/foreach}

<!-- Stylesheet -->
{foreach from=$stylesheets item=css}
<link rel="stylesheet" type="text/css" href="{$request.base_path}/css/{$css}" rel="stylesheet" media="screen"/>
{/foreach}
