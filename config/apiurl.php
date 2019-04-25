<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'lyonabeauty');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');
Configure::write('API.url_admins_updateprofile', 'admins/updateprofile');

Configure::write('API.url_companies_addupdate', 'companies/addupdate');
Configure::write('API.url_companies_detail', 'companies/detail');

Configure::write('API.url_banners_list', 'banners/list');
Configure::write('API.url_banners_addupdate', 'banners/addupdate');
Configure::write('API.url_banners_detail', 'banners/detail');

Configure::write('API.url_cates_list', 'cates/list');
Configure::write('API.url_cates_addupdate', 'cates/addupdate');
Configure::write('API.url_cates_detail', 'cates/detail');
Configure::write('API.url_cates_all', 'cates/all');