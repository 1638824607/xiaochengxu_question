---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://sns.shenruxiang.com/docs/collection.json)

<!-- END_INFO -->

#adv

广告
<!-- START_089aaccc14b2040430885631f1ece7e0 -->
## cateAdvList
分类广告列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/cateAdvList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":12}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/cateAdvList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 12
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/cateAdvList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 12,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "id": 5,
            "cate_id": "2",
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/CateAdv\/2020-04-13\/U1lHNWXWFgbVtdWX96um5xJAB1Cfq5E00JoRwPEd.jpeg",
            "position": 2,
            "status": 1,
            "created_at": "2020-03-05 21:52:19",
            "updated_at": "2020-04-13 20:13:06",
            "href": ""
        },
        {
            "id": 6,
            "cate_id": "2",
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/CateAdv\/2020-04-13\/esb4rMeYbEUvMIkn8rQapuPG7e9P2LLvCWBnxwbq.jpeg",
            "position": 1,
            "status": 1,
            "created_at": "2020-03-05 21:57:39",
            "updated_at": "2020-04-13 20:12:29",
            "href": ""
        },
        {
            "id": 7,
            "cate_id": "2",
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/CateAdv\/2020-04-13\/fu0hMXsRcSp210177pmZywPrS7RDm1tWJNAnax9L.jpeg",
            "position": 0,
            "status": 1,
            "created_at": "2020-03-05 22:00:19",
            "updated_at": "2020-04-13 20:11:10",
            "href": ""
        }
    ]
}
```

### HTTP Request
`POST api/v1/cateAdvList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  required  | 分类id
    
<!-- END_089aaccc14b2040430885631f1ece7e0 -->

<!-- START_5b6bdc6a1e80b1855270345878dcd030 -->
## catePostAdvList
分类帖子详情广告列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/catePostAdvList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":17}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/catePostAdvList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/catePostAdvList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "id": 8,
            "cate_id": "2",
            "src": "http:\/\/daodao.shenruxiang.com\/adv_test\/6af1e3ed0f3111d54da3d71cc42c28b6.jpg",
            "status": 1,
            "created_at": "2020-03-06 08:38:57",
            "updated_at": "2020-04-06 20:38:10",
            "href": ""
        }
    ]
}
```

### HTTP Request
`POST api/v1/catePostAdvList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
    
<!-- END_5b6bdc6a1e80b1855270345878dcd030 -->

<!-- START_8b6a1e495c3ac8277cb397d83bc122aa -->
## advList
便民广告列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/advList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/advList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/advList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "id": 8,
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/PostAdv\/2020-03-18\/YGAXhOLdiPRabO2mH7FUwvyB3SxvZmVSuKsKLG22.jpeg",
            "status": 1,
            "href": "",
            "created_at": "2020-03-07 09:39:33",
            "updated_at": "2020-03-18 19:07:20"
        },
        {
            "id": 6,
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/PostAdv\/2020-03-18\/YGAXhOLdiPRabO2mH7FUwvyB3SxvZmVSuKsKLG22.jpeg",
            "status": 1,
            "href": "",
            "created_at": "2020-03-05 21:57:39",
            "updated_at": "2020-04-06 14:58:23"
        },
        {
            "id": 5,
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/PostAdv\/2020-03-18\/YGAXhOLdiPRabO2mH7FUwvyB3SxvZmVSuKsKLG22.jpeg",
            "status": 1,
            "href": "",
            "created_at": "2020-03-05 21:52:19",
            "updated_at": "2020-04-06 14:58:58"
        }
    ]
}
```

### HTTP Request
`POST api/v1/advList`


<!-- END_8b6a1e495c3ac8277cb397d83bc122aa -->

#login

第三方登陆
<!-- START_89ab4d2e68c02976da4a993a2a2733db -->
## loginByOauth
第三方登陆注册

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/loginByOauth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"openid":"delectus","login_type":"perspiciatis","login_device_type":"esse","login_device":"cumque","nickname":"voluptatem","avatar":"cum","province":"iusto","city":"blanditiis"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/loginByOauth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "openid": "delectus",
    "login_type": "perspiciatis",
    "login_device_type": "esse",
    "login_device": "cumque",
    "nickname": "voluptatem",
    "avatar": "cum",
    "province": "iusto",
    "city": "blanditiis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/loginByOauth',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'openid' => 'delectus',
            'login_type' => 'perspiciatis',
            'login_device_type' => 'esse',
            'login_device' => 'cumque',
            'nickname' => 'voluptatem',
            'avatar' => 'cum',
            'province' => 'iusto',
            'city' => 'blanditiis',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "id": 2,
        "openid": "123456-dsf-21321312",
        "name": "wx_1595156242730",
        "nick_name": "",
        "sex": "男",
        "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
        "desc": "简介",
        "status": 1,
        "is_super": 1,
        "grade": 1,
        "login_type": "wx",
        "login_device_type": "android",
        "login_device": "",
        "login_time": "2020-07-23 12:22:37",
        "expire_time": 1604146957,
        "register_ip": "114.249.135.32",
        "token": "8f8c0682dae88f9426729e63be8af3a3",
        "province": "",
        "city": "",
        "birthday": "",
        "feeling": "",
        "job": "",
        "created_at": "2020-07-19 10:57:22"
    }
}
```

### HTTP Request
`POST api/v1/loginByOauth`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `openid` | string |  required  | 第三方标示openid
        `login_type` | string |  required  | 第三方登陆类型（wx/qq）
        `login_device_type` | string |  required  | 登陆设备类型（android/ios）
        `login_device` | string |  optional  | 登陆设备(小米10)
        `nickname` | string |  optional  | 昵称
        `avatar` | string |  optional  | 头像
        `province` | string |  optional  | 省份
        `city` | string |  optional  | 城市
    
<!-- END_89ab4d2e68c02976da4a993a2a2733db -->

<!-- START_bb7aca107272785daf791426242c6a54 -->
## appStartList
启动页列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/appStartList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/appStartList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/appStartList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "id": 1,
            "name": "1112",
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/AppStart\/2020-05-16\/ncK9jKGRXccfr8BfQrh2lOQIRrULbYMCoWJ0XSlN.jpeg",
            "type": 1,
            "status": 1,
            "created_at": "2020-03-05 12:40:24",
            "sort": 0,
            "href": ""
        },
        {
            "id": 2,
            "name": "222",
            "src": "http:\/\/daodao.shenruxiang.com\/storage\/AppStart\/2020-03-27\/SAPvGr1z6X9nNg5tdaJPIgz6xtMiZRvIuDayIJAO.mp4",
            "type": 2,
            "status": 1,
            "created_at": "2020-03-05 13:05:23",
            "sort": 0,
            "href": ""
        }
    ]
}
```

### HTTP Request
`POST api/v1/appStartList`


<!-- END_bb7aca107272785daf791426242c6a54 -->

#post

帖子
<!-- START_86e98b473cf2e428508bd9315b3de885 -->
## postList
帖子列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/postList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":19}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/postList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 19
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/postList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 19,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 110,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "哦哟上找也软用",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 1,
                "praise_num": 0,
                "view_num": 2,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-17 22:07:57",
                "updated_at": "2020-05-17 23:02:01",
                "is_adv": 0,
                "source": "[{\"source_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4\",\"source_thumb_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4?vframe\\\/png\\\/offset\\\/1\\\/w\\\/600\\\/h\\\/600\"}]",
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": {
                    "id": 210,
                    "post_id": 110,
                    "user_id": 1
                }
            },
            {
                "id": 109,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "21321321312",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-15 21:36:40",
                "updated_at": "2020-05-15 21:36:40",
                "is_adv": 0,
                "source": "",
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 67,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "侧睡侧睡侧睡侧睡侧睡侧睡",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 18,
                "praise_num": 2,
                "view_num": 50,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 21:27:44",
                "updated_at": "2020-05-17 23:02:23",
                "is_adv": 0,
                "source": "",
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 66,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "null",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 20:59:18",
                "updated_at": "2020-04-14 20:59:18",
                "is_adv": 0,
                "source": "",
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 43,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "2",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 2,
                "praise_num": 3,
                "view_num": 8,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-11 23:38:48",
                "updated_at": "2020-05-12 01:48:24",
                "is_adv": 0,
                "source": "",
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 22,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11111111",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 7,
                "praise_num": 0,
                "view_num": 13,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:50:16",
                "updated_at": "2020-05-12 01:42:32",
                "is_adv": 0,
                "source": null,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 21,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 1,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:46:21",
                "updated_at": "2020-04-14 17:24:55",
                "is_adv": 0,
                "source": null,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 17,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 9,
                "praise_num": 4,
                "view_num": 4,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 17:22:18",
                "updated_at": "2020-05-15 21:34:03",
                "is_adv": 0,
                "source": null,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 16,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 3,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 17:21:57",
                "updated_at": "2020-05-12 00:11:46",
                "is_adv": 0,
                "source": null,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 15,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 1,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 17:21:52",
                "updated_at": "2020-05-12 01:52:34",
                "is_adv": 0,
                "source": null,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            }
        ],
        "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/postList?page=1",
        "from": 1,
        "next_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/postList?page=2",
        "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/postList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10
    }
}
```

### HTTP Request
`POST api/v1/postList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  optional  | 分类id
    
<!-- END_86e98b473cf2e428508bd9315b3de885 -->

<!-- START_e2d2fdc79f20f56c48d8ad5caf329da7 -->
## cateList
帖子分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/cateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/cateList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/cateList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "id": 2,
            "name": "健康",
            "color": "#90ee90",
            "sort": 1111
        },
        {
            "id": 6,
            "name": "电竞",
            "color": "#e9f4e8",
            "sort": 6
        },
        {
            "id": 5,
            "name": "金融",
            "color": "#f21b1b",
            "sort": 5
        },
        {
            "id": 3,
            "name": "房产",
            "color": "#f4e9e9",
            "sort": 1
        },
        {
            "id": 4,
            "name": "汽车",
            "color": "#ef1515",
            "sort": 0
        },
        {
            "id": 7,
            "name": "足球",
            "color": "#de1f1f",
            "sort": 0
        }
    ]
}
```

### HTTP Request
`POST api/v1/cateList`


<!-- END_e2d2fdc79f20f56c48d8ad5caf329da7 -->

<!-- START_fe981f6ff32b1e28d50e6e77628ef157 -->
## postHotList
帖子热点列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/postHotList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/postHotList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/postHotList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 112,
                "cate_id": 2,
                "user_id": 1,
                "post_content": "22222",
                "phone_model": "mini",
                "post_position": "北京",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-07-24 12:12:29",
                "updated_at": "2020-07-24 12:12:29",
                "is_adv": 0,
                "source": "2",
                "is_hot": 1,
                "user": {
                    "id": 1,
                    "nick_name": "哈哈",
                    "avatar": "http:\/\/sns.com:8888\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 110,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "哦哟上找也软用",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 4,
                "praise_num": 1,
                "view_num": 3,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-17 22:07:57",
                "updated_at": "2020-07-23 13:38:23",
                "is_adv": 0,
                "source": "[{\"source_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4\",\"source_thumb_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4?vframe\\\/png\\\/offset\\\/1\\\/w\\\/600\\\/h\\\/600\"}]",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": {
                    "id": 213,
                    "post_id": 110,
                    "user_id": 1
                }
            },
            {
                "id": 109,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "21321321312",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-15 21:36:40",
                "updated_at": "2020-05-15 21:36:40",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 67,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "侧睡侧睡侧睡侧睡侧睡侧睡",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 18,
                "praise_num": 2,
                "view_num": 50,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 21:27:44",
                "updated_at": "2020-05-17 23:02:23",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 66,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "null",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 20:59:18",
                "updated_at": "2020-04-14 20:59:18",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 54,
                "cate_id": 4,
                "user_id": 2,
                "post_content": "苏打粉是非得失隋东风",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-13 20:19:24",
                "updated_at": "2020-04-13 20:19:24",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 53,
                "cate_id": 4,
                "user_id": 2,
                "post_content": "321321321321",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 1,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-13 20:14:36",
                "updated_at": "2020-05-05 00:22:31",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 43,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "2",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 2,
                "praise_num": 3,
                "view_num": 8,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-11 23:38:48",
                "updated_at": "2020-05-12 01:48:24",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 22,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11111111",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 7,
                "praise_num": 0,
                "view_num": 13,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:50:16",
                "updated_at": "2020-05-12 01:42:32",
                "is_adv": 0,
                "source": null,
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 21,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 1,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:46:21",
                "updated_at": "2020-04-14 17:24:55",
                "is_adv": 0,
                "source": null,
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            }
        ],
        "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/postHotList?page=1",
        "from": 1,
        "next_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/postHotList?page=2",
        "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/postHotList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10
    }
}
```

### HTTP Request
`POST api/v1/postHotList`


<!-- END_fe981f6ff32b1e28d50e6e77628ef157 -->

<!-- START_6c10f1c2e30fbb1d387c32e5616b4f8f -->
## postDetail
帖子详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/postDetail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":2}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/postDetail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/postDetail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "id": 110,
        "cate_id": 2,
        "user_id": 2,
        "post_content": "哦哟上找也软用",
        "phone_model": "小米10",
        "post_position": "北京市 朝阳区",
        "share_num": 0,
        "comment_num": 1,
        "praise_num": 0,
        "view_num": 2,
        "status": 1,
        "sort": 0,
        "is_top": 1,
        "post_type": 1,
        "created_at": "2020-05-17 22:07:57",
        "updated_at": "2020-05-17 23:02:01",
        "is_adv": 0,
        "source": "[{\"source_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4\",\"source_thumb_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4?vframe\\\/png\\\/offset\\\/1\\\/w\\\/600\\\/h\\\/600\"}]",
        "user": {
            "id": 2,
            "nick_name": "",
            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
            "sex": "男",
            "desc": "简介"
        },
        "user_praise": {
            "id": 210,
            "post_id": 110,
            "user_id": 1
        }
    }
}
```

### HTTP Request
`POST api/v1/postDetail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
    
<!-- END_6c10f1c2e30fbb1d387c32e5616b4f8f -->

<!-- START_51d8ede32cc4c916427afc23b88469b0 -->
## postCommentList
帖子评论列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/postCommentList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":10}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/postCommentList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 10
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/postCommentList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 10,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 62,
                "post_id": 110,
                "user_id": 2,
                "to_user_id": 1,
                "comment_id": 0,
                "content": "发评论",
                "praise_num": 111,
                "status": 1,
                "created_at": "2020-05-17 22:08:13",
                "updated_at": "2020-05-17 22:08:13",
                "read_status": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg"
                },
                "to_user": {
                    "id": 1,
                    "nick_name": "哈哈",
                    "avatar": "http:\/\/sns.com:8888\/img\/default_avatar.jpg"
                },
                "comment_priase": {
                    "comment_id": 62,
                    "user_id": 1
                },
                "reply_list": [
                    {
                        "id": 63,
                        "post_id": 110,
                        "user_id": 1,
                        "to_user_id": 2,
                        "comment_id": 62,
                        "content": "回复",
                        "praise_num": 22,
                        "status": 1,
                        "created_at": "2020-05-17 23:02:15",
                        "updated_at": "2020-05-17 23:02:15",
                        "read_status": 1,
                        "user": {
                            "id": 1,
                            "nick_name": "哈哈",
                            "avatar": "http:\/\/sns.com:8888\/img\/default_avatar.jpg"
                        },
                        "to_user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg"
                        },
                        "comment_priase": null
                    }
                ]
            }
        ],
        "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/postCommentList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/postCommentList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1
    }
}
```

### HTTP Request
`POST api/v1/postCommentList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
    
<!-- END_51d8ede32cc4c916427afc23b88469b0 -->

<!-- START_96819fc79dbe9fe8fe12281adf32876b -->
## sendPostComment
发送帖子评论

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/sendPostComment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":1,"comment_id":9,"comment_content":"adipisci","to_user_id":17}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/sendPostComment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 1,
    "comment_id": 9,
    "comment_content": "adipisci",
    "to_user_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/sendPostComment',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 1,
            'comment_id' => 9,
            'comment_content' => 'adipisci',
            'to_user_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "发送评论成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/sendPostComment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
        `comment_id` | integer |  required  | 帖子评论id
        `comment_content` | string |  required  | 帖子评论内容
        `to_user_id` | integer |  required  | 对方用户id
    
<!-- END_96819fc79dbe9fe8fe12281adf32876b -->

<!-- START_3139c362b85d6ca8e5a801fa36000163 -->
## praisePost
帖子点赞

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/praisePost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":13}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/praisePost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/praisePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 13,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "帖子点赞成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/praisePost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
    
<!-- END_3139c362b85d6ca8e5a801fa36000163 -->

<!-- START_22fb9352b12bddc87302a63d1a1aba10 -->
## praisePostComment
帖子评论/回复点赞

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/praisePostComment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":4,"comment_id":17}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/praisePostComment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 4,
    "comment_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/praisePostComment',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 4,
            'comment_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "评论点赞成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/praisePostComment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
        `comment_id` | integer |  required  | 帖子评论/回复id
    
<!-- END_22fb9352b12bddc87302a63d1a1aba10 -->

<!-- START_6aacc62d5c6024c5a80f67582f267042 -->
## reportPost
帖子举报

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/reportPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":8,"report_content":"omnis"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/reportPost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 8,
    "report_content": "omnis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/reportPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 8,
            'report_content' => 'omnis',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "举报成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/reportPost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
        `report_content` | string |  required  | 举报内容
    
<!-- END_6aacc62d5c6024c5a80f67582f267042 -->

<!-- START_db09800fa922a67f94cac90dba7a7d6b -->
## sharePost
帖子分享

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/sharePost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":4,"share_type":20}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/sharePost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 4,
    "share_type": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/sharePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'post_id' => 4,
            'share_type' => 20,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "分享成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/sharePost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | 帖子id
        `share_type` | integer |  required  | 分享方式 1-微信 2-微博 3-QQ
    
<!-- END_db09800fa922a67f94cac90dba7a7d6b -->

<!-- START_b140c81a7b29d208c3efade11ac1385b -->
## sendPost
发帖

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/sendPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":20,"post_content":"voluptates","post_type":3,"source":"quae","phone_model":"sit","post_position":"a"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/sendPost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 20,
    "post_content": "voluptates",
    "post_type": 3,
    "source": "quae",
    "phone_model": "sit",
    "post_position": "a"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/sendPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 20,
            'post_content' => 'voluptates',
            'post_type' => 3,
            'source' => 'quae',
            'phone_model' => 'sit',
            'post_position' => 'a',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "发帖成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/sendPost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  required  | 分类id
        `post_content` | string |  required  | 帖子内容
        `post_type` | integer |  required  | 帖子类型 1-图片 2-视频
        `source` | string |  required  | 帖子图片/视频地址json source_src source_thumb_src
        `phone_model` | string |  optional  | 手机型号
        `post_position` | string |  optional  | 发帖位置
    
<!-- END_b140c81a7b29d208c3efade11ac1385b -->

<!-- START_f4a777906e5764c1f984cfa7348edbef -->
## searchList
搜索列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/searchList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"veniam"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/searchList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "veniam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/searchList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'search' => 'veniam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "type": 1,
            "name": "用户",
            "list": {
                "current_page": 1,
                "data": [
                    {
                        "id": 3,
                        "openid": "oC-6xv7yC8Hf4_1xskuWi6eF1gsI",
                        "name": "wx_11595156255113",
                        "nick_name": "哈哈11",
                        "sex": "",
                        "avatar": "null",
                        "desc": "简介",
                        "status": 1,
                        "is_super": 1,
                        "grade": 1,
                        "login_type": "wx",
                        "login_device_type": "ios",
                        "login_device": "小米10",
                        "login_time": "2020-07-19 10:57:35",
                        "expire_time": 1603796255,
                        "register_ip": "120.244.120.193",
                        "token": "6a7677576dda741d1a8ff042dae99bb3",
                        "province": "",
                        "city": "",
                        "birthday": "",
                        "feeling": "",
                        "job": "",
                        "created_at": "2020-07-19 10:57:35"
                    }
                ],
                "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchList?page=1",
                "from": 1,
                "next_page_url": null,
                "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchList",
                "per_page": 10,
                "prev_page_url": null,
                "to": 1
            }
        },
        {
            "type": 2,
            "name": "帖子",
            "list": {
                "current_page": 1,
                "data": [
                    {
                        "id": 109,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "21321321312",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 0,
                        "view_num": 0,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-05-15 21:36:40",
                        "updated_at": "2020-05-15 21:36:40",
                        "is_adv": 0,
                        "source": "",
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 53,
                        "cate_id": 4,
                        "user_id": 2,
                        "post_content": "321321321321",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 0,
                        "view_num": 1,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-04-13 20:14:36",
                        "updated_at": "2020-05-05 00:22:31",
                        "is_adv": 0,
                        "source": "",
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 22,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11111111",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 7,
                        "praise_num": 0,
                        "view_num": 13,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 18:50:16",
                        "updated_at": "2020-05-12 01:42:32",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 21,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 1,
                        "view_num": 0,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 18:46:21",
                        "updated_at": "2020-04-14 17:24:55",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 17,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 9,
                        "praise_num": 4,
                        "view_num": 4,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:22:18",
                        "updated_at": "2020-05-15 21:34:03",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 16,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 0,
                        "view_num": 3,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:21:57",
                        "updated_at": "2020-05-12 00:11:46",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 15,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 1,
                        "view_num": 0,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:21:52",
                        "updated_at": "2020-05-12 01:52:34",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 14,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 1,
                        "view_num": 4,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:20:57",
                        "updated_at": "2020-05-12 00:10:55",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 13,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 1,
                        "praise_num": 0,
                        "view_num": 2,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:20:29",
                        "updated_at": "2020-05-11 22:47:26",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    },
                    {
                        "id": 12,
                        "cate_id": 2,
                        "user_id": 2,
                        "post_content": "11",
                        "phone_model": "小米10",
                        "post_position": "北京市 朝阳区",
                        "share_num": 0,
                        "comment_num": 0,
                        "praise_num": 1,
                        "view_num": 0,
                        "status": 1,
                        "sort": 0,
                        "is_top": 1,
                        "post_type": 1,
                        "created_at": "2020-03-20 17:19:54",
                        "updated_at": "2020-05-12 00:10:58",
                        "is_adv": 0,
                        "source": null,
                        "is_hot": 1,
                        "user": {
                            "id": 2,
                            "nick_name": "",
                            "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                            "sex": "男",
                            "desc": "简介"
                        }
                    }
                ],
                "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchList?page=1",
                "from": 1,
                "next_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchList?page=2",
                "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchList",
                "per_page": 10,
                "prev_page_url": null,
                "to": 10
            }
        }
    ]
}
```

### HTTP Request
`POST api/v1/searchList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `search` | string |  required  | 搜索内容
    
<!-- END_f4a777906e5764c1f984cfa7348edbef -->

<!-- START_00c4ebfc2fb0f1403bfa5493ee798adf -->
## searchTypeList
搜索分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/searchTypeList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"est","type":12,"page":2}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/searchTypeList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "est",
    "type": 12,
    "page": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/searchTypeList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'search' => 'est',
            'type' => 12,
            'page' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 3,
                "openid": "oC-6xv7yC8Hf4_1xskuWi6eF1gsI",
                "name": "wx_11595156255113",
                "nick_name": "哈哈11",
                "sex": "",
                "avatar": "null",
                "desc": "简介",
                "status": 1,
                "is_super": 1,
                "grade": 1,
                "login_type": "wx",
                "login_device_type": "ios",
                "login_device": "小米10",
                "login_time": "2020-07-19 10:57:35",
                "expire_time": 1603796255,
                "register_ip": "120.244.120.193",
                "token": "6a7677576dda741d1a8ff042dae99bb3",
                "province": "",
                "city": "",
                "birthday": "",
                "feeling": "",
                "job": "",
                "created_at": "2020-07-19 10:57:35"
            }
        ],
        "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchTypeList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/searchTypeList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1
    }
}
```

### HTTP Request
`POST api/v1/searchTypeList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `search` | string |  required  | 搜索内容
        `type` | integer |  required  | 搜索类型 1用户 2帖子
        `page` | integer |  required  | 页数
    
<!-- END_00c4ebfc2fb0f1403bfa5493ee798adf -->

#upload

文件上传
<!-- START_5b769578a2c7d2ab8e61aa5fe83d95d7 -->
## uploadPost
帖子图片/视频上传

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/uploadPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file":{"":"nihil"},"type":11}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/uploadPost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file": {
        "": "nihil"
    },
    "type": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/uploadPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'file' => [
                '' => 'nihil',
            ],
            'type' => 11,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "source_src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/5e0914ce14ff1ef5de15a5a708629a66.jpeg",
            "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/5e0914ce14ff1ef5de15a5a708629a66.jpeg?vframe\/png\/offset\/1\/w\/600\/h\/600"
        },
        {
            "source_src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/dc60a911dfc8de01232e53bbf4a0482b.png",
            "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/dc60a911dfc8de01232e53bbf4a0482b.png?vframe\/png\/offset\/1\/w\/600\/h\/600"
        }
    ]
}
```

### HTTP Request
`POST api/v1/uploadPost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `file[]` | file |  required  | 图片/视频文件列表
        `type` | integer |  required  | 图片/视频类型 1图片 2视频
    
<!-- END_5b769578a2c7d2ab8e61aa5fe83d95d7 -->

<!-- START_4fd7150162aee9a668c3b210b9f77e9a -->
## uploadUserCert
用户认证图片上传

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/uploadUserCert" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file":{"":"reiciendis"}}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/uploadUserCert"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file": {
        "": "reiciendis"
    }
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/uploadUserCert',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'file' => [
                '' => 'reiciendis',
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        "http:\/\/daodao.shenruxiang.com\/sns\/cert\/70e285883f49f89d08ec483becc9a769.jpg"
    ]
}
```

### HTTP Request
`POST api/v1/uploadUserCert`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `file[]` | file |  required  | 手持身份证图片
    
<!-- END_4fd7150162aee9a668c3b210b9f77e9a -->

<!-- START_aed041481fd822870d685374244e7c99 -->
## uploadUserAvatar
用户头像上传

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/uploadUserAvatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file":{"":"corrupti"}}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/uploadUserAvatar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file": {
        "": "corrupti"
    }
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/uploadUserAvatar',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'file' => [
                '' => 'corrupti',
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        "http:\/\/daodao.shenruxiang.com\/sns\/avatar\/afc213b7e586b712be7ae60036f41113.jpg"
    ]
}
```

### HTTP Request
`POST api/v1/uploadUserAvatar`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `file[]` | file |  required  | 用户头像
    
<!-- END_aed041481fd822870d685374244e7c99 -->

#user

用户
<!-- START_6806312eaa89291596ad73d46920aedf -->
## userInfo
用户个人信息

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":17}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "id": 2,
        "openid": "123456-dsf-21321312",
        "name": "wx_1595156242730",
        "nick_name": "",
        "sex": "男",
        "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
        "desc": "简介",
        "status": 1,
        "is_super": 1,
        "grade": 1,
        "login_type": "wx",
        "login_device_type": "android",
        "login_device": "",
        "login_time": "2020-07-23 12:22:37",
        "expire_time": 1604146957,
        "register_ip": "114.249.135.32",
        "token": "8f8c0682dae88f9426729e63be8af3a3",
        "province": "",
        "city": "",
        "birthday": "",
        "feeling": "",
        "job": "",
        "created_at": "2020-07-19 10:57:22"
    }
}
```

### HTTP Request
`POST api/v1/userInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
    
<!-- END_6806312eaa89291596ad73d46920aedf -->

<!-- START_5f26518965d969d5d275bc20e1ac9f4b -->
## userInfoEdit
用户信息修改

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userInfoEdit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nick_name":"sed","sex":"porro","avatar":"reiciendis","desc":"et","province":"et","city":"neque","birthday":"omnis","feeling":"dolorum","job":"iste"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userInfoEdit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nick_name": "sed",
    "sex": "porro",
    "avatar": "reiciendis",
    "desc": "et",
    "province": "et",
    "city": "neque",
    "birthday": "omnis",
    "feeling": "dolorum",
    "job": "iste"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userInfoEdit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'nick_name' => 'sed',
            'sex' => 'porro',
            'avatar' => 'reiciendis',
            'desc' => 'et',
            'province' => 'et',
            'city' => 'neque',
            'birthday' => 'omnis',
            'feeling' => 'dolorum',
            'job' => 'iste',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "编辑资料成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/userInfoEdit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nick_name` | string |  required  | 昵称
        `sex` | string |  required  | 性别 男|女
        `avatar` | string |  required  | 头像
        `desc` | string |  required  | 简介
        `province` | string |  required  | 省份
        `city` | string |  required  | 城市
        `birthday` | string |  required  | 生日
        `feeling` | string |  required  | 感情状态
        `job` | string |  required  | 职业
    
<!-- END_5f26518965d969d5d275bc20e1ac9f4b -->

<!-- START_5e842c0c8f214e4abdc53a0280c7fc5c -->
## userPostList
用户帖子列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userPostList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":17}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userPostList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userPostList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 17,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 110,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "哦哟上找也软用",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 4,
                "praise_num": 1,
                "view_num": 3,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-17 22:07:57",
                "updated_at": "2020-07-23 13:38:23",
                "is_adv": 0,
                "source": "[{\"source_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4\",\"source_thumb_src\":\"http:\\\/\\\/daodao.shenruxiang.com\\\/android_39309_20200402_203525_0114400.mp4?vframe\\\/png\\\/offset\\\/1\\\/w\\\/600\\\/h\\\/600\"}]",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": {
                    "id": 213,
                    "post_id": 110,
                    "user_id": 1
                }
            },
            {
                "id": 109,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "21321321312",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-05-15 21:36:40",
                "updated_at": "2020-05-15 21:36:40",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 67,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "侧睡侧睡侧睡侧睡侧睡侧睡",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 18,
                "praise_num": 2,
                "view_num": 50,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 21:27:44",
                "updated_at": "2020-05-17 23:02:23",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 66,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "null",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-14 20:59:18",
                "updated_at": "2020-04-14 20:59:18",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 54,
                "cate_id": 4,
                "user_id": 2,
                "post_content": "苏打粉是非得失隋东风",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-13 20:19:24",
                "updated_at": "2020-04-13 20:19:24",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 53,
                "cate_id": 4,
                "user_id": 2,
                "post_content": "321321321321",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 0,
                "view_num": 1,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-13 20:14:36",
                "updated_at": "2020-05-05 00:22:31",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 43,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "2",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 2,
                "praise_num": 3,
                "view_num": 8,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-04-11 23:38:48",
                "updated_at": "2020-05-12 01:48:24",
                "is_adv": 0,
                "source": "",
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 22,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11111111",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 7,
                "praise_num": 0,
                "view_num": 13,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:50:16",
                "updated_at": "2020-05-12 01:42:32",
                "is_adv": 0,
                "source": null,
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 21,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 0,
                "praise_num": 1,
                "view_num": 0,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 18:46:21",
                "updated_at": "2020-04-14 17:24:55",
                "is_adv": 0,
                "source": null,
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            },
            {
                "id": 17,
                "cate_id": 2,
                "user_id": 2,
                "post_content": "11",
                "phone_model": "小米10",
                "post_position": "北京市 朝阳区",
                "share_num": 0,
                "comment_num": 9,
                "praise_num": 4,
                "view_num": 4,
                "status": 1,
                "sort": 0,
                "is_top": 1,
                "post_type": 1,
                "created_at": "2020-03-20 17:22:18",
                "updated_at": "2020-05-15 21:34:03",
                "is_adv": 0,
                "source": null,
                "is_hot": 1,
                "user": {
                    "id": 2,
                    "nick_name": "",
                    "avatar": "http:\/\/sns.shenruxiang.com\/img\/default_avatar.jpg",
                    "sex": "男",
                    "desc": "简介"
                },
                "user_praise": null
            }
        ],
        "first_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/userPostList?page=1",
        "from": 1,
        "next_page_url": "http:\/\/sns.shenruxiang.com\/api\/v1\/userPostList?page=2",
        "path": "http:\/\/sns.shenruxiang.com\/api\/v1\/userPostList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10
    }
}
```

### HTTP Request
`POST api/v1/userPostList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
    
<!-- END_5e842c0c8f214e4abdc53a0280c7fc5c -->

<!-- START_54815e2f8fc404fb7ce4482c426f28ac -->
## userFollowStatus
用户关注状态

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userFollowStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"to_user_id":6}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userFollowStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "to_user_id": 6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userFollowStatus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'to_user_id' => 6,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "未关注",
    "data": {
        "status": 0
    }
}
```

### HTTP Request
`POST api/v1/userFollowStatus`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `to_user_id` | integer |  required  | 对方用户id
    
<!-- END_54815e2f8fc404fb7ce4482c426f28ac -->

<!-- START_da0a6da903fdbe527a1022e1b98aac61 -->
## userFollow
用户关注

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userFollow" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"to_user_id":20}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userFollow"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "to_user_id": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userFollow',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'to_user_id' => 20,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "关注成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/userFollow`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `to_user_id` | integer |  required  | 对方用户id
    
<!-- END_da0a6da903fdbe527a1022e1b98aac61 -->

<!-- START_c56710dc829c0af61393e6020a42eba1 -->
## userPostSourceList
用户相册列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userPostSourceList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":11}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userPostSourceList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userPostSourceList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 11,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "2020-07-25": [
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            },
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            },
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            }
        ],
        "2020-07-24": [
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            },
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            }
        ],
        "2020-07-23": [
            {
                "source_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4",
                "source_thumb_src": "http:\/\/daodao.shenruxiang.com\/android_39309_20200402_203525_0114400.mp4?vframe\/png\/offset\/1\/w\/600\/h\/600"
            }
        ]
    }
}
```

### HTTP Request
`POST api/v1/userPostSourceList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
    
<!-- END_c56710dc829c0af61393e6020a42eba1 -->

<!-- START_9d868f79659f6e8a2294145108f8d744 -->
## userCert
用户认证

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userCert" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"truename":"excepturi","tel":"eligendi","id_card":"voluptas","img_zheng":"assumenda","img_fan":"ut"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userCert"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "truename": "excepturi",
    "tel": "eligendi",
    "id_card": "voluptas",
    "img_zheng": "assumenda",
    "img_fan": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userCert',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'truename' => 'excepturi',
            'tel' => 'eligendi',
            'id_card' => 'voluptas',
            'img_zheng' => 'assumenda',
            'img_fan' => 'ut',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "审核中",
    "data": []
}
```

### HTTP Request
`POST api/v1/userCert`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `truename` | string |  required  | 姓名
        `tel` | string |  required  | 手机号码
        `id_card` | string |  required  | 身份证号码
        `img_zheng` | string |  required  | 身份证正面
        `img_fan` | string |  required  | 身份证反面
    
<!-- END_9d868f79659f6e8a2294145108f8d744 -->

<!-- START_d8d901316a6888d76eff18ccac1d85ab -->
## userCertStatus
用户认证状态

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userCertStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userCertStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userCertStatus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 201,
    "msg": "审核中",
    "data": []
}
```

### HTTP Request
`POST api/v1/userCertStatus`


<!-- END_d8d901316a6888d76eff18ccac1d85ab -->

<!-- START_c1ebff130674988b256e46b658df54d1 -->
## userSuggest
用户反馈

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/userSuggest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"content":"vel"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/userSuggest"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "vel"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/userSuggest',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'content' => 'vel',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "反馈成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/userSuggest`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `content` | string |  required  | 反馈内容
    
<!-- END_c1ebff130674988b256e46b658df54d1 -->

<!-- START_ab77b871b749d330d17fb22fe615bcf1 -->
## help
帮助中心

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/help" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/help"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/help',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "id": 3,
        "type": "help",
        "content": "<p style=\"text-align: center;\">我们<\/p><p style=\"text-align: left;\">一、我们<\/p><p style=\"text-align: center;\"><img src=\"http:\/\/daodao.shenruxiang.com\/storage\/Help\/2020-05-16\/z0ODKkUyLpWYOiLn1rw9278LWKrKuQRMmNbRpaz3.jpeg\" alt=\"图片\"><br><\/p><p style=\"text-align: left;\">对方说的发送到发送到发送<\/p><p style=\"text-align: left;\"><br><\/p><p style=\"text-align: left;\"><br><\/p><p style=\"text-align: left;\"><br><\/p><p style=\"text-align: left;\"><br><\/p><p style=\"text-align: left;\"><br><\/p>",
        "created_at": "2020-03-10 12:08:50",
        "updated_at": "2020-05-16 20:12:25"
    }
}
```

### HTTP Request
`POST api/v1/help`


<!-- END_ab77b871b749d330d17fb22fe615bcf1 -->

<!-- START_e6893755bad6b97127dc4bc2e2217dfe -->
## about
关于我们

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/about" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/about"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://sns.shenruxiang.com/api/v1/about',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "id": 4,
        "type": "about",
        "content": "<p style=\"text-align: center;\">2222211fdsfsd<\/p>",
        "created_at": "2020-03-10 12:08:54",
        "updated_at": "2020-05-16 20:00:55"
    }
}
```

### HTTP Request
`POST api/v1/about`


<!-- END_e6893755bad6b97127dc4bc2e2217dfe -->


