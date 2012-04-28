<?php

// Convert site's url to https
$site = elgg_get_site_entity();

$url = parse_url($site->url);

$url['scheme'] = 'https';

$site->url = elgg_http_build_url($url, false);
$site->save();