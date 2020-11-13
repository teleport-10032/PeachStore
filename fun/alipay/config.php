<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016102500757170",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAssx15M2ejG9dwmVJH8f3t5z9yw0dVPtVJ6RdAJETPsYDLrqApUP6fW29ADY+kwZiHJhW/KmAgmrGnjpoUgRMLreO5nlnhEj3miOmc9NbpkoDAi03z6Js/zZWzq3g5JsXlke+6bMd6oJWesCQ0z9LLZ73YZWQOZ11tyqQfVWAdFz3xcXEogPXx1iUtcrZ6zw1LQNHQ23E+L+OMAMuoIxkEQC/zRanzNpIPPMCS0pHj19MHHrRPh1780tyqN2aVU2dGTjQv7EF/K3OcHdGfv6NAFJkK1JmM0gDvPuR2JsvmtelWyFY0lDXWKL7yFv/kpJK7jSvT7FxdSJEciy5FFl4twIDAQABAoIBABnBGbo7Y/sWj4rQzBen1ia8llIJMZBsI3fyVPMf8oW4P/0bICyt/gbTJ8ZACgNjh/5WczExuTEP8EwaXaxysgaIqizIkACeAgxR1kgYybrKLmTB3qgp3Ullqlta8Gn9bQhYjUdcZZLB83L7CeFj3JBVtYx43q1t4ObhWq6zAi3Ad9AmzLGyoisNeF5oDgoHlYblNC0Q5NdJOMrQJA2eJliH3kgLe6PJUtMtp3CBu7wyGJqt5KffVoS29l+G0Egl21iuY/SP4juYdY/wSIq4qnmIspgSKk8inLbwXT7T5eOKws83V15mvuuxLfHNYlTuOmfBIvso780FLS676FoWewECgYEA/+QqKrRDNsJnwQDK45wc9eBiFEZJ95lPNI+OHjki43YHXbDoQb9PNkyi99t9uTmooKAEeGLZVtsKWZ++puE7rjSMSN767Nmrs/PS+DloNrYKxSCv5bm3SsknWRI/eMzKcX/2P+yx2ed+Mo9IZgl4X7ATj8NWJ/fuarfRnN6Qs+UCgYEAst/o67R/AWhQMRtja9bHnKDy59zk1dQ1xY7b7cC8RPrqAxa1rMxS6vuUvh7YX4ersTbcw99/Mt6dN6qbfCjW1Af9U7rbqb9bBW6ZOnKuD4FMf8evdEpamQTUis20GfdBGR4ltj8OI/4obgYA1HuinWmj3pBfVCzL30M4o9uQqGsCgYAYEUm2AoZf3CEOEhkDF2fR6GzRI1tJom3Er8vaI92YLz26Hi16IZg9ry+UyFwm07l8ghBpkkKG3Ms4asHvyDdoxyB6qh5HsKFpp4EsP5oBq1WP/OcOYE1RB2JgCktV/Uz9J9/tW0HPEOrZrohMsI9V0KXGW8T6tWMDPo7Ehlpt0QKBgQCY3oVIE3zLbiPCpB6GxgrYEDEn+P9Uw0SlLx9EBIiiBzJBK4JeSEzA5/tJtEDE+8S+8h0gBPzHM7t3HIY/SQO4N4/HpBUg8BnQ/aFUczfQpncDaVvIbdcZmSgv6/b0jfwDhGFEbIUgO5C/3r+M2JC0KNlUV1wxKwudJezdFMN/OwKBgQC4M2/einptRMkH6gjiFD+DZsuDtgETcs2jaaf5hnMBQWnHDwxRz2fSwfvDpUWO5pHkS37JfLc57plVsRcJZ3pykCXylzcTDd60B+iNU5hdv3Ft5pFykUbn5nLugzh2L2n2aeAfr8MnGhNuWIBGZJs6QrSy8kFpI4/k4rpWe44qAg==",
		
		//异步通知地址
		'notify_url' => "http://127.0.0.1/fun/alipaynotify_url.php",
		
		//同步跳转
		'return_url' => "http://127.0.0.1/fun/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqnbkg8WAlB4BOTuP7kTpUb3n6vYdHptf4esBCSB7x6QLQFxSMNM/NCQu+XHIugh9HymxtUoGX6o1Y1Kd26JauJjxnCmnUYVMPyXhkhN8M0TFHDwcYHKxnAq3vu8l/Roq4WNNmsRc6yyK4k6Tk/JwCd51l5b6k3hBQzo+/2+k/aauD9EjVkffT0wiYbX8GGmytIbTp0R++/5Oss3k54ME6jAtSVVhgcDSfNdfYuQl8trbrMPqf42xO3gXUZDJ2GajLA/po2TiGRTcrPYUDYXPN4UwE4srBGY9n5/iSVFCGK4Z+7bgsZZ2DfPEkvLJhxEIp1B9fe+OFPL5L1DwTzOSfQIDAQAB",
);