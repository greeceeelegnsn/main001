<?php

define('LANDING_DIR', '');

$apiKey = 'x69ZVW3eH31d4Vv98Cj7wTlR4NPLGE7mM8SgsPQKYC0uN1jws';          // Ключ доступа к API
$offer_id = 4729;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = 'Y58HrN0z';     // id потока
$landKey = '1ca92e67267c4dd04390706382bce08f';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"19288":{"id":19288,"name":"WowBra - \u0431\u044e\u0441\u0442\u0433\u0430\u043b\u044c\u0442\u0435\u0440 3 \u0432 1","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"price":"1990","price2":"4422","currency":{"code":"RUB","name":"\u0440\u0443\u0431"}},"23647":{"id":23647,"name":"WowBra - \u0431\u044e\u0441\u0442\u0433\u0430\u043b\u044c\u0442\u0435\u0440 3 \u0432 1","country":{"code":"UZ","name":"\u0423\u0437\u0431\u0435\u043a\u0438\u0441\u0442\u0430\u043d"},"price":"399900","price2":"799800","currency":{"code":"UZS","name":"\u0441\u0443\u043c"}},"24754":{"id":24754,"name":"WowBra - \u0431\u044e\u0441\u0442\u0433\u0430\u043b\u044c\u0442\u0435\u0440 3 \u0432 1","country":{"code":"KZ","name":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d"},"price":"11990","price2":"23980","currency":{"code":"KZT","name":"\u0442\u04a3\u0433"}}}';
$dataOffer = '{"id":24754,"name":"WowBra - \u0431\u044e\u0441\u0442\u0433\u0430\u043b\u044c\u0442\u0435\u0440 3 \u0432 1","country":{"code":"KZ","name":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d"},"price":"11990","price2":"23980","currency":{"code":"KZT","name":"\u0442\u04a3\u0433"}}';
$is_geo_detect = '';
$productName = 'WowBra - бюстгальтер 3 в 1';
$invoice = 'index.php';
$push_link = '';
$language = 'ru';
$companyInfo = array('address' => '656056, Алтайский край, городской округ город Барнаул, г. Барнаул, ул. Льва Толстого, д. 13А, офис 310', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "АУДИТ БИЗНЕС ТОРГ" ОГРН: 1202200038842 ИНН: 2225217398 КПП: 222501001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');
$fb_verification = '';

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'fb_verify', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika',
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
