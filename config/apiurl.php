<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'lyonabeauty');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');

Configure::write('API.url_companies_addupdate', 'companies/addupdate');
Configure::write('API.url_companies_detail', 'companies/detail');
