<?php
/*
 * TG Recover 自动申诉工具
 * https://github.com/yellowface233/TGRecover
*/

// note: 基本上改手机号就可以 预设的内容也差不多了

echo '[' . date('Y-m-d H:i:s') . '] 申诉流程开始<hr />
';

// 提交Telegram Support 注意必须用能访问到tg的服务器或者富强
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://telegram.org/support');
curl_setopt($ch, CURLOPT_POSTFIELDS, "message=Dear+Sir%2FMa%27am.%0D%0AMY+number+%2B区号不带加号+手机号+been+banned+and+i+am+not+able+to+figure+out+the+reason+for+supension%2Cplease+help+me+to+recover+my+account.%0D%0AThank+you.&email=邮箱前缀（用户名）%40邮箱后缀（域名）&phone=%2B区号不带加号+手机号&setln=");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo '提交<code>Telegram Support</code>申诉:';
$lines = explode("\n", $response);
$data = $lines[49];
echo '<pre>' . htmlspecialchars($data) . '</pre><hr />';

// 邮件申诉
echo '提交<code>邮件</code>申诉:';
$url = 'https://api.zeptomail.com.cn/v1.1/email';
$ch = curl_init($url);
$headers = array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: 替换成你的apikey'
);
$postData = json_encode(
    array(
        'from' => array('address' => 'please_recover_my_account' . mt_rand() . '@i45s.com'), // 这里随机生成了一个邮箱用户名 用zeptomail的话修改域名即可
        'to' => array(
            array('email_address' => array('address' => 'login@stel.com', 'name' => 'Dear Telegram Team')),
            array('email_address' => array('address' => 'recover@telegram.org', 'name' => 'Dear Telegram Team')),
            array('email_address' => array('address' => 'login@telegram.org', 'name' => 'Dear Telegram Team')),
        ),
        'subject' => 'Banned phone number: 手机号记得带区号',
        'htmlbody' => '<div>I\'m trying to use my mobile phone number: 手机号记得带区号<br />
        But Telegram says it\'s banned. Please help.<br />
        I need this account it\'s on my most used number.<br /><br />
        
        App version: 10.14.2(not sure)<br />
        OS version: iOS 13.7<br />
        Device Name: iPhone XR<br /><br />
        
        Thank you.<br /></div>'
    )
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ret = curl_exec($ch);
curl_close($ch);
echo '<pre>'.$ret.'</pre>';
