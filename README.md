# 为什么会有这玩意？
说来也是真无语了，周日用**gv**注册的号，周四被封了，手动去发了三封邮件、support等了一天没有反应

于是便写了个这个玩意，设置了cron 一个小时自动提交一次申诉请求，不过挺好使的，一天后就解封了，数据都还在。

# 使用
我的环境是php8.3 amh面板，发邮件我用的是zeptomail的邮件推送，故没有提供smtp发送方式，如果用不来就直接注释掉吧，据说support申诉也就差不多了.

把tgshensu.php放到服务器上 修改一下提交的内容（比如手机号码之类的），就完了

然后在AMH的计划任务里添加一小时执行一次php 我的命令是：`amh amcrontab run_php main_lamp php-8.3 /home/wwwroot/main_lamp/domain/oi8.cc/web/proj/tgshensu.php` 不能直接用，建议改一改

顺便给一下我的任务日志，8点多就发现解开了
```
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-02 19:27:49] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.408d1500-50c2-11ef-950a-5254009e233a.19112d89a50","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-02 20:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.c0845760-50c6-11ef-af41-525400ee2bb1.19112f617d6","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-02 21:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.22272da0-50cf-11ef-af41-525400ee2bb1.191132d057a","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-02 22:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.83ac1ba0-50d7-11ef-950a-5254009e233a.1911363f25a","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-02 23:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.e53aa690-50df-11ef-950a-5254009e233a.191139adf79","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 00:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.47674640-50e8-11ef-af41-525400ee2bb1.19113d1d0a4","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 01:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.a9385870-50f0-11ef-950a-5254009e233a.1911408bf77","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 02:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.0aaaa8d0-50f9-11ef-950a-5254009e233a.191143fabdd","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 03:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.6ca5b130-5101-11ef-af41-525400ee2bb1.19114769bc3","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 04:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.ce2484b0-5109-11ef-950a-5254009e233a.19114ad887b","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 05:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.3080e6f0-5112-11ef-af41-525400ee2bb1.19114e47adf","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 06:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.91e18410-511a-11ef-950a-5254009e233a.191151b66d1","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 07:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.f408cc90-5122-11ef-950a-5254009e233a.191155257d9","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 08:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.5553bed0-512b-11ef-950a-5254009e233a.1911589433d","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 09:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre></pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.04d916e0-5134-11ef-950a-5254009e233a.19115c22f4e","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 10:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.18d49f90-513c-11ef-af41-525400ee2bb1.19115f72009","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 11:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.7a913f60-5144-11ef-af41-525400ee2bb1.191162e0e56","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 12:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.dc891370-514c-11ef-950a-5254009e233a.1911664fe27","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 13:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.3e8d6aa0-5155-11ef-950a-5254009e233a.191169bee4a","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 14:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.a0086d90-515d-11ef-950a-5254009e233a.19116d2dae9","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 15:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.0198f450-5166-11ef-950a-5254009e233a.1911709c815","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 16:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.635b1260-516e-11ef-af41-525400ee2bb1.1911740b686","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 17:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.c527ded0-5176-11ef-950a-5254009e233a.1911777a53d","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 18:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.26ec1fc0-517f-11ef-950a-5254009e233a.19117ae93bc","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 19:00:01] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.891dc880-5187-11ef-af41-525400ee2bb1.19117e58508","object":"email"}</pre>=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab run_php]
=============================================================
=============================================================
 [Linux] AMH 7.1
 https://amh.sh

[amcrontab-2.5 run_php]
=============================================================
[OK] amcrontab-2.5 is already installed.
Failed loading /home/wwwroot/main_lamp/ext/ioncube_loader.so:  /home/wwwroot/main_lamp/ext/ioncube_loader.so: undefined symbol: zend_class_serialize_deny
Failed loading /home/wwwroot/main_lamp/ext/sourceguardian.so:  /home/wwwroot/main_lamp/ext/sourceguardian.so: undefined symbol: zend_class_unserialize_deny
[2024-08-03 20:00:02] 申诉流程开始<hr />
提交<code>Telegram Support</code>申诉:<pre>    &lt;div class=&quot;alert alert-success&quot;&gt;&lt;b&gt;Thanks for your report&amp;#33;&lt;/b&gt;&lt;br/&gt;We will try to reply as soon as possible.&lt;/div&gt;</pre><hr />提交<code>邮件</code>申诉:<pre>{"data":[{"code":"EM_104","additional_info":[],"message":"Email request received"}],"message":"OK","request_id":"e3ab.1c77c8c9c78db2f1.m1.eb0a7900-518f-11ef-af41-525400ee2bb1.191181c7490","object":"email"}</pre>
```
