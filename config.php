<?php

// please refer to "Engine parameters" article if you want to know more about engine parameters
// https://github.com/deseven/vodka/wiki/Engine-parameters

$params["system"] = [
	"base_url"          => "http://vodka.d7.wtf/",
	"root"              => realpath(dirname(__FILE__)),
	"show_errors"       => true,
	"forbid_scriptname" => true,
	"clean_unused_vars" => true,
	"main_page"         => "main",
	"404_page"          => "404",
	"auto_pages"        => "pages"
];

$params["templates"] = [
	"demo" => "tpl/demo"
];

$params["menu"] = [
	"html"                 => '<li><a href="{VODKA:URL}" id="{VODKA:NAME}" class="{VODKA:CLASS}">{VODKA:TITLE}</a></li>',
	"selected_class"       => "selected",
	"selected_class_first" => "selected_top",
	"selected_class_last"  => "selected_bottom"
];

$params["pages"] = [
	[
		"path"        => "pages/main.html",
		"title"       => "main page",
		"description" => "main page of this site",
		"keywords"    => "vodka, php, site engine, lightweight, flat-file, seo-friendly",
		"custom"      => [
			"GREETING"  => 'Hello, this is a demo site of Vodka, simple and tiny flat-file engine, written in PHP. You can <a href="{URL}">grab the latest version on github</a>.',
			"URL"       => "https://github.com/deseven/vodka/"
		]
	],
	[
		"path"        => "pages/sec.html",
		"name"        => "second",
		"title"       => "second page"
	],
	[
		"path"        => "pages/third.html",
		"title"       => "third page"
	],
		[
		"path"        => "pages/form.html",
		"title"       => "form test"
	],
	[
		"path"        => "pages/form-result.html",
		"name"        => "form/result",
		"title"       => "form result",
		"visible"     => false
	],
	[
		"path"        => "pages/utf8.html",
		"name"        => "utf8test",
		"title"       => "utf8 test"
	],
	[
		"path"        => "pages/ajax.html",
		"name"        => "ajaxtest",
		"title"       => "AJAX test"
	],
	[
		"path"        => "pages/ajax-content.html",
		"isAJAX"      => true,
		"visible"     => false
	],
	[
		"path"        => "pages/404.html",
		"title"       => "page not found",
		"visible"     => false
	]
];

$params["aliases"] = [
	"other_page"                   => "third",
	"i=like&to=use&some=variables" => "second",
	"абвгд đšćčž ћђљњ"             => "utf8test"
];

?>