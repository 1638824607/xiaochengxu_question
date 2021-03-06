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

#Community

互动社区
<!-- START_5df179cd88a60b362819860b2f4a5031 -->
## postList
帖子列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/postList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":19,"token":14,"page":17,"cate_id":1}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/postList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 19,
    "token": 14,
    "page": 17,
    "cate_id": 1
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
    'http://sns.shenruxiang.com/api/v1/community/postList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 19,
            'token' => 14,
            'page' => 17,
            'cate_id' => 1,
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
                "id": 2,
                "title": "帖子标题2",
                "content": "帖子内容",
                "images": [
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    },
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    }
                ],
                "user_id": 1,
                "praise_num": 1,
                "comment_num": 3,
                "share_num": 0,
                "collect_num": 1,
                "view_num": 5,
                "created_at": "2020-08-01 19:34:33",
                "updated_at": "2020-08-01 12:21:15",
                "status": 1,
                "user": {
                    "id": 1,
                    "nick": "来日方长",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            }
        ],
        "first_page_url": "https:\/\/xlcsxcxapi.boyingzhai.com\/api\/v1\/community\/postList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "https:\/\/xlcsxcxapi.boyingzhai.com\/api\/v1\/community\/postList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1
    }
}
```

### HTTP Request
`POST api/v1/community/postList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  optional  | 页数
        `cate_id` | integer |  optional  | 分类id
    
<!-- END_5df179cd88a60b362819860b2f4a5031 -->

<!-- START_b98fa3bf1470e8f3afe6b5912e8be968 -->
## postDetail
帖子详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/postDetail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":15,"token":1,"post_id":9}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/postDetail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 15,
    "token": 1,
    "post_id": 9
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
    'http://sns.shenruxiang.com/api/v1/community/postDetail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 15,
            'token' => 1,
            'post_id' => 9,
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
        "id": 1,
        "title": "帖子标题",
        "content": "帖子内容",
        "images": [
            {
                "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
            },
            {
                "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
            }
        ],
        "user_id": 1,
        "praise_num": 0,
        "comment_num": 0,
        "share_num": 0,
        "collect_num": 0,
        "view_num": 4,
        "created_at": "2020-08-01 19:34:33",
        "updated_at": "2020-08-01 11:55:29",
        "user": {
            "id": 1,
            "nick": "来日方长",
            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
        },
        "post_praise": null
    }
}
```

### HTTP Request
`POST api/v1/community/postDetail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
    
<!-- END_b98fa3bf1470e8f3afe6b5912e8be968 -->

<!-- START_2ceabf0774d7ff01f2e3c55d5d98869f -->
## postCommentList
帖子评论列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/postCommentList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":16,"token":7,"post_id":12,"page":10}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/postCommentList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 16,
    "token": 7,
    "post_id": 12,
    "page": 10
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
    'http://sns.shenruxiang.com/api/v1/community/postCommentList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 16,
            'token' => 7,
            'post_id' => 12,
            'page' => 10,
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
                "id": 67,
                "post_id": 1,
                "user_id": 1,
                "to_user_id": 2,
                "comment_id": 0,
                "content": "帖子评论",
                "praise_num": 0,
                "status": 1,
                "created_at": "2020-08-01 12:03:20",
                "updated_at": "2020-08-01 12:03:20",
                "user": {
                    "id": 1,
                    "nick": "来日方长",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                },
                "to_user": {
                    "id": 2,
                    "nick": "无敌寂寞",
                    "avatar": ""
                },
                "comment_priase": null,
                "reply_list": [
                    {
                        "id": 69,
                        "post_id": 1,
                        "user_id": 1,
                        "to_user_id": 2,
                        "comment_id": 67,
                        "content": "帖子评论回复",
                        "praise_num": 0,
                        "status": 1,
                        "created_at": "2020-08-01 12:08:16",
                        "updated_at": "2020-08-01 12:08:16",
                        "user": {
                            "id": 1,
                            "nick": "来日方长",
                            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                        },
                        "to_user": {
                            "id": 2,
                            "nick": "无敌寂寞",
                            "avatar": ""
                        },
                        "comment_priase": null
                    }
                ]
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/community\/postCommentList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/community\/postCommentList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1
    }
}
```

### HTTP Request
`POST api/v1/community/postCommentList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
        `page` | integer |  optional  | 页数
    
<!-- END_2ceabf0774d7ff01f2e3c55d5d98869f -->

<!-- START_75ecdb8d21ef32da54445f28d7209872 -->
## sendPostComment
发送帖子评论

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/sendPostComment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":19,"token":8,"post_id":1,"comment_id":13,"comment_content":"nihil","to_user_id":4}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/sendPostComment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 19,
    "token": 8,
    "post_id": 1,
    "comment_id": 13,
    "comment_content": "nihil",
    "to_user_id": 4
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
    'http://sns.shenruxiang.com/api/v1/community/sendPostComment',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 19,
            'token' => 8,
            'post_id' => 1,
            'comment_id' => 13,
            'comment_content' => 'nihil',
            'to_user_id' => 4,
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
`POST api/v1/community/sendPostComment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
        `comment_id` | integer |  required  | 帖子评论id
        `comment_content` | string |  required  | 帖子评论内容
        `to_user_id` | integer |  required  | 对方用户id
    
<!-- END_75ecdb8d21ef32da54445f28d7209872 -->

<!-- START_a9a76e6fcb2725788d0b0c590645495a -->
## praisePost
帖子点赞

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/praisePost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":6,"token":12,"post_id":18}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/praisePost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 6,
    "token": 12,
    "post_id": 18
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
    'http://sns.shenruxiang.com/api/v1/community/praisePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 6,
            'token' => 12,
            'post_id' => 18,
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
`POST api/v1/community/praisePost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
    
<!-- END_a9a76e6fcb2725788d0b0c590645495a -->

<!-- START_9a79fe71a36dcc58334165c11485425a -->
## praisePostComment
帖子评论/回复点赞

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/praisePostComment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":1,"token":7,"post_id":13,"comment_id":6}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/praisePostComment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 1,
    "token": 7,
    "post_id": 13,
    "comment_id": 6
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
    'http://sns.shenruxiang.com/api/v1/community/praisePostComment',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 1,
            'token' => 7,
            'post_id' => 13,
            'comment_id' => 6,
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
`POST api/v1/community/praisePostComment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
        `comment_id` | integer |  required  | 帖子评论/回复id
    
<!-- END_9a79fe71a36dcc58334165c11485425a -->

<!-- START_c65626fb17c8bc0466b995e89c2d1f19 -->
## sharePost
帖子分享

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/sharePost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":19,"token":16,"post_id":19}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/sharePost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 19,
    "token": 16,
    "post_id": 19
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
    'http://sns.shenruxiang.com/api/v1/community/sharePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 19,
            'token' => 16,
            'post_id' => 19,
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
`POST api/v1/community/sharePost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
    
<!-- END_c65626fb17c8bc0466b995e89c2d1f19 -->

<!-- START_697ebd3eb9b5cfdd3a34a86edc6ada05 -->
## collectPost
帖子收藏/取消收藏

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/collectPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":20,"token":5,"post_id":5}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/collectPost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 20,
    "token": 5,
    "post_id": 5
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
    'http://sns.shenruxiang.com/api/v1/community/collectPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 20,
            'token' => 5,
            'post_id' => 5,
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
    "msg": "帖子收藏成功",
    "data": []
}
```

### HTTP Request
`POST api/v1/community/collectPost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `post_id` | integer |  required  | 帖子id
    
<!-- END_697ebd3eb9b5cfdd3a34a86edc6ada05 -->

<!-- START_ec92caf0347d803d0a9f450c4c8b276c -->
## sendPost
发帖

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/sendPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":1,"token":5,"title":"ad","content":"consequatur","images":"mollitia"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/sendPost"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 1,
    "token": 5,
    "title": "ad",
    "content": "consequatur",
    "images": "mollitia"
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
    'http://sns.shenruxiang.com/api/v1/community/sendPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 1,
            'token' => 5,
            'title' => 'ad',
            'content' => 'consequatur',
            'images' => 'mollitia',
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
`POST api/v1/community/sendPost`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `title` | string |  required  | 标题
        `content` | string |  required  | 帖子内容
        `images` | string |  required  | 帖子图片地址json src thumb_src
    
<!-- END_ec92caf0347d803d0a9f450c4c8b276c -->

<!-- START_3f2511afa5d07ba7d440d4ccb999d8b7 -->
## advisoryList
咨询求助列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/advisoryList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/advisoryList"
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
    'http://sns.shenruxiang.com/api/v1/community/advisoryList',
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
            "user_id": 1,
            "name": "沈老师",
            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "job": "心理工作者",
            "org": "王者联盟",
            "tel": "13012796666",
            "desc": "这是老师的描述",
            "created_at": "2020-08-01 20:31:40",
            "updated_at": "2020-08-01 20:31:40"
        },
        {
            "id": 2,
            "user_id": 2,
            "name": "阳老师",
            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "job": "心理工作者",
            "org": "王者联盟",
            "tel": "13012796666",
            "desc": "这是老师的描述",
            "created_at": "2020-08-01 20:31:40",
            "updated_at": "2020-08-01 20:31:40"
        }
    ]
}
```

### HTTP Request
`POST api/v1/community/advisoryList`


<!-- END_3f2511afa5d07ba7d440d4ccb999d8b7 -->

<!-- START_cbf083467bad59425f88b0451b3bce3a -->
## advisoryOrder
咨询预约

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/advisoryOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":8,"token":20,"advisory_id":19,"order_at":"veritatis"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/advisoryOrder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 8,
    "token": 20,
    "advisory_id": 19,
    "order_at": "veritatis"
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
    'http://sns.shenruxiang.com/api/v1/community/advisoryOrder',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 8,
            'token' => 20,
            'advisory_id' => 19,
            'order_at' => 'veritatis',
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
    "msg": "您已成功预约",
    "data": []
}
```

### HTTP Request
`POST api/v1/community/advisoryOrder`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `advisory_id` | integer |  required  | 咨询老师id
        `order_at` | datetime |  required  | 预约时间
    
<!-- END_cbf083467bad59425f88b0451b3bce3a -->

<!-- START_8b7666eee62023e28f8b274ce550fc8e -->
## advisoryOrderEdit
咨询预约修改

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/advisoryOrderEdit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":16,"token":4,"id":14,"order_at":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/advisoryOrderEdit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 16,
    "token": 4,
    "id": 14,
    "order_at": "reprehenderit"
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
    'http://sns.shenruxiang.com/api/v1/community/advisoryOrderEdit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 16,
            'token' => 4,
            'id' => 14,
            'order_at' => 'reprehenderit',
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
    "msg": "预约时间已更改",
    "data": []
}
```

### HTTP Request
`POST api/v1/community/advisoryOrderEdit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `id` | integer |  required  | 预约id
        `order_at` | datetime |  required  | 预约时间
    
<!-- END_8b7666eee62023e28f8b274ce550fc8e -->

<!-- START_96ddcb2af746736c53d72ec2a6a281b1 -->
## api/v1/community/advisoryDateList
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/community/advisoryDateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/community/advisoryDateList"
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
    'http://sns.shenruxiang.com/api/v1/community/advisoryDateList',
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



### HTTP Request
`POST api/v1/community/advisoryDateList`


<!-- END_96ddcb2af746736c53d72ec2a6a281b1 -->

#Knowledge

知识科普
<!-- START_a84634b5d584fedadda49194e291bd39 -->
## bannerList
轮播图列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/bannerList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/bannerList"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/bannerList',
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
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        },
        {
            "id": 3,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        },
        {
            "id": 4,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/bannerList`


<!-- END_a84634b5d584fedadda49194e291bd39 -->

<!-- START_8aebcdb8a932eef4b66c9f91155afeb1 -->
## cateList
分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/cateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/cateList"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/cateList',
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
            "name": "read",
            "title": "知识阅读",
            "sort": 3,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "is_cate": 1
        },
        {
            "id": 2,
            "name": "match",
            "title": "知识竞赛",
            "sort": 2,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "is_cate": 2
        },
        {
            "id": 3,
            "name": "health",
            "title": "健康自测",
            "sort": 1,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "is_cate": 1
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/cateList`


<!-- END_8aebcdb8a932eef4b66c9f91155afeb1 -->

<!-- START_4cd8c56486f4a12e9055ac1f59880408 -->
## readCateList
知识阅读分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/readCateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/readCateList"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/readCateList',
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
            "title": "性格",
            "sort": 6
        },
        {
            "id": 2,
            "title": "情感",
            "sort": 5
        },
        {
            "id": 3,
            "title": "亲子",
            "sort": 4
        },
        {
            "id": 4,
            "title": "职业",
            "sort": 3
        },
        {
            "id": 5,
            "title": "健康",
            "sort": 2
        },
        {
            "id": 6,
            "title": "其他",
            "sort": 1
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/readCateList`


<!-- END_4cd8c56486f4a12e9055ac1f59880408 -->

<!-- START_9282802ebd62da429dabed1705c124a0 -->
## readList
知识阅读文章列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/readList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":14,"sort":"consectetur"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/readList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 14,
    "sort": "consectetur"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/readList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 14,
            'sort' => 'consectetur',
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
            "id": 3,
            "cate_id": 1,
            "title": "人格三",
            "sort": 3,
            "hot": 0,
            "desc": "你的背后隐藏了哪种人格",
            "read_num": 33,
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "content": "这个时间点，可能疫情快过去了，国家也开启了接近40万亿的基础建设计划",
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        },
        {
            "id": 2,
            "cate_id": 1,
            "title": "人格二",
            "sort": 2,
            "hot": 0,
            "desc": "你的背后隐藏了哪种人格",
            "read_num": 22,
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "content": "这个时间点，可能疫情快过去了，国家也开启了接近40万亿的基础建设计划",
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        },
        {
            "id": 1,
            "cate_id": 1,
            "title": "人格一",
            "sort": 1,
            "hot": 0,
            "desc": "你的背后隐藏了哪种人格",
            "read_num": 11,
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "content": "这个时间点，可能疫情快过去了，国家也开启了接近40万亿的基础建设计划",
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/readList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  required  | 知识阅读分类id
        `sort` | string |  optional  | 排序（sort/hot）默认sort
    
<!-- END_9282802ebd62da429dabed1705c124a0 -->

<!-- START_38de23b27d8046f77d6c83e50642a5ab -->
## readInfo
知识阅读文章详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/readInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":7}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/readInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 7
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
    'http://sns.shenruxiang.com/api/v1/knowledge/readInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'id' => 7,
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
        "id": 1,
        "cate_id": 1,
        "title": "人格一",
        "sort": 1,
        "hot": 0,
        "desc": "你的背后隐藏了哪种人格",
        "read_num": 11,
        "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
        "src_type": 1,
        "content": "这个时间点，可能疫情快过去了，国家也开启了接近40万亿的基础建设计划",
        "create_time": "2020-08-01 15:13:48",
        "update_time": "2020-08-01 15:13:48",
        "read_cate": {
            "id": 1,
            "title": "性格"
        }
    }
}
```

### HTTP Request
`POST api/v1/knowledge/readInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | 文章id
    
<!-- END_38de23b27d8046f77d6c83e50642a5ab -->

<!-- START_c206fc2053d78f5ee63b458fa0311300 -->
## matchList
知识竞赛测评列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/matchList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"sort":"aliquam"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/matchList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "sort": "aliquam"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/matchList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'sort' => 'aliquam',
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
            "id": 3,
            "title": "测评三",
            "sort": 3,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 33,
            "duration": 180,
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        },
        {
            "id": 2,
            "title": "测评二",
            "sort": 2,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 22,
            "duration": 120,
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        },
        {
            "id": 1,
            "title": "测评一",
            "sort": 1,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 11,
            "duration": 60,
            "create_time": "2020-08-01 15:13:48",
            "update_time": "2020-08-01 15:13:48"
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/matchList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `sort` | string |  optional  | 排序（sort/hot）默认sort
    
<!-- END_c206fc2053d78f5ee63b458fa0311300 -->

<!-- START_95a956511df2dd076ef3e9c5f7bbe429 -->
## matchInfo
知识竞赛测评详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/matchInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":8}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/matchInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 8
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
    'http://sns.shenruxiang.com/api/v1/knowledge/matchInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'id' => 8,
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
        "id": 1,
        "title": "测评一",
        "sort": 1,
        "hot": 0,
        "desc": "疫情心理健康自评量表描述",
        "introduce": "疫情心理健康自评量表介绍",
        "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
        "introduce_src_type": "1",
        "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
        "src_type": 1,
        "join_num": 11,
        "duration": 60,
        "create_time": "2020-08-01 15:13:48",
        "update_time": "2020-08-01 15:13:48",
        "question": [
            {
                "id": 1,
                "match_id": 1,
                "title": "题目一",
                "number": 2,
                "type": "选择",
                "options": [
                    {
                        "type": "A",
                        "num": 1,
                        "title": "选项1"
                    },
                    {
                        "type": "B",
                        "num": 2,
                        "title": "选项2"
                    }
                ],
                "answer": 1,
                "create_time": "2020-08-01 18:03:09",
                "update_time": "2020-08-01 18:03:11"
            },
            {
                "id": 2,
                "match_id": 1,
                "title": "题目二",
                "number": 2,
                "type": "选择",
                "options": [
                    {
                        "type": "A",
                        "num": 1,
                        "title": "选项1"
                    },
                    {
                        "type": "B",
                        "num": 2,
                        "title": "选项2"
                    }
                ],
                "answer": 1,
                "create_time": "2020-08-01 18:03:09",
                "update_time": "2020-08-01 18:03:11"
            }
        ]
    }
}
```

### HTTP Request
`POST api/v1/knowledge/matchInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | 文章id
    
<!-- END_95a956511df2dd076ef3e9c5f7bbe429 -->

<!-- START_e4143db4e7eedf16cfd17e42163c895b -->
## matchRecordStart
知识竞赛测评开始

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordStart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":4,"token":15,"match_id":3}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordStart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 4,
    "token": 15,
    "match_id": 3
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
    'http://sns.shenruxiang.com/api/v1/knowledge/matchRecordStart',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 4,
            'token' => 15,
            'match_id' => 3,
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
    "msg": "测评开始",
    "data": {
        "id": 6
    }
}
```

### HTTP Request
`POST api/v1/knowledge/matchRecordStart`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `match_id` | integer |  required  | 测评id
    
<!-- END_e4143db4e7eedf16cfd17e42163c895b -->

<!-- START_41f5e00358d2c30a92c5b8cf2cba54c8 -->
## matchRecordEnd
知识竞赛测评结束

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordEnd" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":19,"record_id":10,"score":18}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordEnd"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 19,
    "record_id": 10,
    "score": 18
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
    'http://sns.shenruxiang.com/api/v1/knowledge/matchRecordEnd',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 19,
            'record_id' => 10,
            'score' => 18,
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
    "msg": "测评已完成",
    "data": []
}
```

### HTTP Request
`POST api/v1/knowledge/matchRecordEnd`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 测评记录id
        `score` | integer |  required  | 测评分数
    
<!-- END_41f5e00358d2c30a92c5b8cf2cba54c8 -->

<!-- START_2588382960fb18c9f9cfa019cc168ff5 -->
## matchRecordInfo
知识竞赛用户测评详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":15,"token":2,"record_id":6}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/matchRecordInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 15,
    "token": 2,
    "record_id": 6
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
    'http://sns.shenruxiang.com/api/v1/knowledge/matchRecordInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 15,
            'token' => 2,
            'record_id' => 6,
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
        "id": 1,
        "user_id": 1,
        "match_id": 1,
        "score": 11,
        "start_time": null,
        "end_time": "2020-08-01 10:16:01",
        "created_at": "2020-08-01 10:14:53",
        "updated_at": "2020-08-01 10:16:01",
        "match": {
            "id": 1,
            "title": "测评一",
            "sort": 1,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 11,
            "duration": 60,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        },
        "user": {
            "id": 1,
            "user_name": "var100",
            "nick": "来日方长",
            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "password": "",
            "email": "",
            "phone": "13893524930",
            "status": 2,
            "age": 0,
            "address": "",
            "wechat": "",
            "publish_article_num": 0,
            "do_question_num": 0,
            "game_accuracy": 0,
            "create_time": 0,
            "update_time": 0,
            "sex": "",
            "created_at": "2020-08-01 12:58:48",
            "openid": "",
            "login_device_type": "",
            "login_device": "",
            "province": "",
            "city": ""
        }
    }
}
```

### HTTP Request
`POST api/v1/knowledge/matchRecordInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 测评记录id
    
<!-- END_2588382960fb18c9f9cfa019cc168ff5 -->

<!-- START_51b573f98ba8dabb6bd507af0bf9f6e5 -->
## healthCateList
健康自测分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthCateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthCateList"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthCateList',
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
            "title": "性格",
            "sort": 6
        },
        {
            "id": 2,
            "title": "情感",
            "sort": 5
        },
        {
            "id": 3,
            "title": "亲子",
            "sort": 4
        },
        {
            "id": 4,
            "title": "职业",
            "sort": 3
        },
        {
            "id": 5,
            "title": "健康",
            "sort": 2
        },
        {
            "id": 6,
            "title": "其他",
            "sort": 1
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/healthCateList`


<!-- END_51b573f98ba8dabb6bd507af0bf9f6e5 -->

<!-- START_3f9c6c2ecb865ed3fa815dd287d5f131 -->
## healthList
健康自测测评列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":17,"sort":"et"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 17,
    "sort": "et"
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 17,
            'sort' => 'et',
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
            "id": 3,
            "cate_id": 1,
            "title": "测评三",
            "sort": 3,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 33,
            "duration": 180,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        },
        {
            "id": 2,
            "cate_id": 1,
            "title": "测评二",
            "sort": 2,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 22,
            "duration": 120,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        },
        {
            "id": 1,
            "cate_id": 1,
            "title": "测评一",
            "sort": 1,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 11,
            "duration": 60,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        }
    ]
}
```

### HTTP Request
`POST api/v1/knowledge/healthList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  required  | 分类id
        `sort` | string |  optional  | 排序（sort/hot）默认sort
    
<!-- END_3f9c6c2ecb865ed3fa815dd287d5f131 -->

<!-- START_8f1e014a06a642eff9b9601de87949d9 -->
## healthInfo
健康自测用户测评详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":3}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 3
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'id' => 3,
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
        "id": 1,
        "cate_id": 1,
        "title": "测评一",
        "sort": 1,
        "hot": 0,
        "desc": "疫情心理健康自评量表描述",
        "introduce": "疫情心理健康自评量表介绍",
        "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
        "introduce_src_type": "1",
        "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
        "src_type": 1,
        "join_num": 11,
        "duration": 60,
        "created_at": "2020-08-01 15:13:48",
        "updated_at": "2020-08-01 15:13:48",
        "question": [
            {
                "id": 1,
                "health_id": 1,
                "title": "题目一",
                "number": 2,
                "type": "选择",
                "options": [
                    {
                        "type": "A",
                        "num": 1,
                        "title": "选项1"
                    },
                    {
                        "type": "B",
                        "num": 2,
                        "title": "选项2"
                    }
                ],
                "answer": 1,
                "created_at": "2020-08-01 18:03:09",
                "updated_at": "2020-08-01 18:03:11"
            },
            {
                "id": 2,
                "health_id": 1,
                "title": "题目二",
                "number": 2,
                "type": "选择",
                "options": [
                    {
                        "type": "A",
                        "num": 1,
                        "title": "选项1"
                    },
                    {
                        "type": "B",
                        "num": 2,
                        "title": "选项2"
                    }
                ],
                "answer": 1,
                "created_at": "2020-08-01 18:03:09",
                "updated_at": "2020-08-01 18:03:11"
            }
        ]
    }
}
```

### HTTP Request
`POST api/v1/knowledge/healthInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | 测评id
    
<!-- END_8f1e014a06a642eff9b9601de87949d9 -->

<!-- START_890c3c632aeaa7a1493ff64d3eb23af4 -->
## healthRecordStart
健康自测测评开始

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordStart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":19,"token":4,"health_id":10}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordStart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 19,
    "token": 4,
    "health_id": 10
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthRecordStart',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 19,
            'token' => 4,
            'health_id' => 10,
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
    "msg": "测评开始",
    "data": {
        "id": 6
    }
}
```

### HTTP Request
`POST api/v1/knowledge/healthRecordStart`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `health_id` | integer |  required  | 测评id
    
<!-- END_890c3c632aeaa7a1493ff64d3eb23af4 -->

<!-- START_b1bf6b28086cdd69fabca11a46166cfb -->
## healthRecordEnd
健康自测测评结束

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordEnd" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":11,"record_id":19,"score":16}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordEnd"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 11,
    "record_id": 19,
    "score": 16
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthRecordEnd',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 11,
            'record_id' => 19,
            'score' => 16,
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
    "msg": "测评已完成",
    "data": []
}
```

### HTTP Request
`POST api/v1/knowledge/healthRecordEnd`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 测评记录id
        `score` | integer |  required  | 测评分数
    
<!-- END_b1bf6b28086cdd69fabca11a46166cfb -->

<!-- START_4db252ce48101b3189ba7831fa3eff65 -->
## healthRecordInfo
知识竞赛用户测评详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":19,"record_id":20}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/healthRecordInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 19,
    "record_id": 20
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
    'http://sns.shenruxiang.com/api/v1/knowledge/healthRecordInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 19,
            'record_id' => 20,
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
        "id": 1,
        "user_id": 1,
        "health_id": 1,
        "score": 11,
        "score_level": "",
        "start_time": null,
        "end_time": "2020-08-01 10:16:01",
        "created_at": "2020-08-01 10:14:53",
        "updated_at": "2020-08-01 10:16:01",
        "health": {
            "id": 1,
            "cate_id": 1,
            "title": "测评一",
            "sort": 1,
            "hot": 0,
            "desc": "疫情心理健康自评量表描述",
            "introduce": "疫情心理健康自评量表介绍",
            "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "introduce_src_type": "1",
            "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "src_type": 1,
            "join_num": 11,
            "duration": 60,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        },
        "user": {
            "id": 1,
            "user_name": "var100",
            "nick": "来日方长",
            "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "password": "",
            "email": "",
            "phone": "13893524930",
            "status": 2,
            "age": 0,
            "address": "",
            "wechat": "",
            "publish_article_num": 0,
            "do_question_num": 0,
            "game_accuracy": 0,
            "create_time": 0,
            "update_time": 0,
            "sex": "",
            "created_at": "2020-08-01 12:58:48",
            "openid": "",
            "login_device_type": "",
            "login_device": "",
            "province": "",
            "city": ""
        }
    }
}
```

### HTTP Request
`POST api/v1/knowledge/healthRecordInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 测评记录id
    
<!-- END_4db252ce48101b3189ba7831fa3eff65 -->

<!-- START_cf02a32f6228a4ff73308b136bdd4af3 -->
## shareHealth
健康自测分享

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/shareHealth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":3,"token":"et","health_id":10}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/knowledge/shareHealth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 3,
    "token": "et",
    "health_id": 10
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
    'http://sns.shenruxiang.com/api/v1/knowledge/shareHealth',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 3,
            'token' => 'et',
            'health_id' => 10,
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
`POST api/v1/knowledge/shareHealth`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | string |  required  | 用户token
        `health_id` | integer |  required  | 健康自测id
    
<!-- END_cf02a32f6228a4ff73308b136bdd4af3 -->

#Login

第三方登陆
<!-- START_89ab4d2e68c02976da4a993a2a2733db -->
## loginByOauth
第三方登陆

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/loginByOauth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"code":"non"}'

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
    "code": "non"
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
            'code' => 'non',
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
        "id": 50,
        "user_name": "1596384702359",
        "nick": "2222",
        "avatar": "22",
        "phone": "",
        "status": 2,
        "age": 0,
        "wechat": "",
        "publish_post_num": 0,
        "do_question_num": 0,
        "game_accuracy": 0,
        "gender": 0,
        "openid": "1111122",
        "province": "222",
        "city": "333",
        "token": "0bf1f7fb68b8c5b0c37f68af79909d66",
        "login_time": "2020-08-02 16:11:42",
        "expire_time": 1605024702,
        "created_at": "2020-08-02 16:11:42",
        "isTemp": false,
        "openId": 123456,
        "sessionKey": 556633232323
    }
}
```

### HTTP Request
`POST api/v1/loginByOauth`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `code` | string |  required  | 登录时获取的 code
    
<!-- END_89ab4d2e68c02976da4a993a2a2733db -->

<!-- START_af6e454a33c7911bbd74a46a3ea5e22c -->
## registerByOauth
第三方注册

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/registerByOauth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"openid":"sed","nick":"ut","avatar":"ut","gender":8,"province":"sunt","city":"eum"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/registerByOauth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "openid": "sed",
    "nick": "ut",
    "avatar": "ut",
    "gender": 8,
    "province": "sunt",
    "city": "eum"
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
    'http://sns.shenruxiang.com/api/v1/registerByOauth',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'openid' => 'sed',
            'nick' => 'ut',
            'avatar' => 'ut',
            'gender' => 8,
            'province' => 'sunt',
            'city' => 'eum',
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
        "id": 50,
        "user_name": "1596384702359",
        "nick": "2222",
        "avatar": "22",
        "phone": "",
        "status": 2,
        "age": 0,
        "wechat": "",
        "publish_post_num": 0,
        "do_question_num": 0,
        "game_accuracy": 0,
        "gender": 0,
        "openid": "1111122",
        "province": "222",
        "city": "333",
        "token": "0bf1f7fb68b8c5b0c37f68af79909d66",
        "login_time": "2020-08-02 16:11:42",
        "expire_time": 1605024702,
        "created_at": "2020-08-02 16:11:42",
        "isTemp": false
    }
}
```

### HTTP Request
`POST api/v1/registerByOauth`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `openid` | string |  required  | 第三方标示openid
        `nick` | string |  optional  | 昵称
        `avatar` | string |  optional  | 头像
        `gender` | integer |  optional  | 性别 0未知 1男性 2女性
        `province` | string |  optional  | 省份
        `city` | string |  optional  | 城市
    
<!-- END_af6e454a33c7911bbd74a46a3ea5e22c -->

<!-- START_cfbe208a479c5116df0228ba7a72d94c -->
## api/v1/makeToken
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/makeToken" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/makeToken"
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
    'http://sns.shenruxiang.com/api/v1/makeToken',
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



### HTTP Request
`POST api/v1/makeToken`


<!-- END_cfbe208a479c5116df0228ba7a72d94c -->

<!-- START_c9da673fc823c6746c683201b289f9e8 -->
## api/v1/getPhone
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/getPhone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/getPhone"
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
    'http://sns.shenruxiang.com/api/v1/getPhone',
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



### HTTP Request
`POST api/v1/getPhone`


<!-- END_c9da673fc823c6746c683201b289f9e8 -->

<!-- START_8fc2915cb48597f73fa96d5f1c32f353 -->
## api/v1/refreshSessionKey
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/refreshSessionKey" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/refreshSessionKey"
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
    'http://sns.shenruxiang.com/api/v1/refreshSessionKey',
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



### HTTP Request
`POST api/v1/refreshSessionKey`


<!-- END_8fc2915cb48597f73fa96d5f1c32f353 -->

#Train

训练提升
<!-- START_1eed432289ba4c22d78e9ca2fab5b4f5 -->
## bannerList
轮播图列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/bannerList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/bannerList"
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
    'http://sns.shenruxiang.com/api/v1/train/bannerList',
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
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        },
        {
            "id": 3,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        },
        {
            "id": 4,
            "image": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
            "sort": 1,
            "title": "轮播图"
        }
    ]
}
```

### HTTP Request
`POST api/v1/train/bannerList`


<!-- END_1eed432289ba4c22d78e9ca2fab5b4f5 -->

<!-- START_79cf6a7577d658fb03132f255cb73068 -->
## dayCateList
每日静心分类列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/dayCateList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/dayCateList"
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
    'http://sns.shenruxiang.com/api/v1/train/dayCateList',
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
            "title": "正念冥想",
            "sort": 6
        },
        {
            "id": 2,
            "title": "美人技术",
            "sort": 5
        }
    ]
}
```

### HTTP Request
`POST api/v1/train/dayCateList`


<!-- END_79cf6a7577d658fb03132f255cb73068 -->

<!-- START_990747a9500a3cef0ccda8a0da596623 -->
## dayList
每日静心列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/dayList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cate_id":2}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/dayList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cate_id": 2
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
    'http://sns.shenruxiang.com/api/v1/train/dayList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'cate_id' => 2,
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
            "cate_id": 1,
            "title": "开启美好一天",
            "desc": "美好的一天，从冥想开始",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "introduction": "联系简介",
            "join_num": 0,
            "created_at": "2020-08-02 16:21:17",
            "updated_at": "2020-08-02 16:21:18"
        },
        {
            "id": 2,
            "cate_id": 1,
            "title": "开启美好一天",
            "desc": "美好的一天，从冥想开始",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "introduction": "联系简介",
            "join_num": 0,
            "created_at": "2020-08-02 16:21:17",
            "updated_at": "2020-08-02 16:21:18"
        }
    ]
}
```

### HTTP Request
`POST api/v1/train/dayList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cate_id` | integer |  required  | 分类id
    
<!-- END_990747a9500a3cef0ccda8a0da596623 -->

<!-- START_9614dccfe7cffea236f3f9ea2f2599ea -->
## dayInfo
每日静心详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/dayInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"day_id":10}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/dayInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "day_id": 10
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
    'http://sns.shenruxiang.com/api/v1/train/dayInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'day_id' => 10,
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
        "id": 1,
        "cate_id": 1,
        "title": "开启美好一天",
        "desc": "美好的一天，从冥想开始",
        "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
        "introduction": "联系简介",
        "join_num": 0,
        "created_at": "2020-08-02 16:21:17",
        "updated_at": "2020-08-02 16:21:18",
        "day_step": [
            {
                "id": 1,
                "day_id": 1,
                "title": "姿势调整",
                "duration": 120,
                "src": "http:\/\/daodao.shenruxiang.com\/step.mp3",
                "created_at": "2020-08-02 16:23:19",
                "updated_at": "2020-08-02 16:23:21"
            },
            {
                "id": 2,
                "day_id": 1,
                "title": "呼吸觉察",
                "duration": 120,
                "src": "http:\/\/daodao.shenruxiang.com\/step.mp3",
                "created_at": "2020-08-02 16:23:19",
                "updated_at": "2020-08-02 16:23:21"
            }
        ]
    }
}
```

### HTTP Request
`POST api/v1/train/dayInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `day_id` | integer |  required  | day_id
    
<!-- END_9614dccfe7cffea236f3f9ea2f2599ea -->

<!-- START_27ed9348bab6cea514baffaaab27ae9a -->
## gameList
益脑游戏列表

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/gameList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/gameList"
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
    'http://sns.shenruxiang.com/api/v1/train/gameList',
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
            "title": "注意力训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "duration": 60,
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "join_num": 0,
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        },
        {
            "id": 2,
            "title": "反应时训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "duration": 60,
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "join_num": 0,
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        },
        {
            "id": 3,
            "title": "记忆力训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "duration": 60,
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "join_num": 0,
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        },
        {
            "id": 4,
            "title": "判断力训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "duration": 60,
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "join_num": 0,
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        },
        {
            "id": 5,
            "title": "时间感知训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
            "duration": 60,
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "join_num": 0,
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        }
    ]
}
```

### HTTP Request
`POST api/v1/train/gameList`


<!-- END_27ed9348bab6cea514baffaaab27ae9a -->

<!-- START_9c89d9cdcb0e0f1df0942532c5aaf584 -->
## gameInfo
益脑游戏训练详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/gameInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"game_id":13}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/gameInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "game_id": 13
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
    'http://sns.shenruxiang.com/api/v1/train/gameInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'game_id' => 13,
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
        "id": 1,
        "title": "注意力训练",
        "desc": "通过简洁的游戏训练提高儿童的注意力",
        "image": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
        "duration": 60,
        "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
        "join_num": 0,
        "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
        "created_at": "2020-08-02 16:16:11",
        "updated_at": "2020-08-02 16:16:13"
    }
}
```

### HTTP Request
`POST api/v1/train/gameInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `game_id` | integer |  required  | 游戏id
    
<!-- END_9c89d9cdcb0e0f1df0942532c5aaf584 -->

<!-- START_f226b36a18f4a47fb0fc56d36f97d133 -->
## gameRecordStart
益脑游戏训练开始

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/gameRecordStart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":9,"token":12,"game_id":20}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/gameRecordStart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 9,
    "token": 12,
    "game_id": 20
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
    'http://sns.shenruxiang.com/api/v1/train/gameRecordStart',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 9,
            'token' => 12,
            'game_id' => 20,
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
    "msg": "游戏训练开始",
    "data": {
        "id": 6
    }
}
```

### HTTP Request
`POST api/v1/train/gameRecordStart`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `game_id` | integer |  required  | 游戏id
    
<!-- END_f226b36a18f4a47fb0fc56d36f97d133 -->

<!-- START_b914cca70c823edfe7990b81b0dc8ddf -->
## gameRecordEnd
益脑游戏训练结束

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/train/gameRecordEnd" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":4,"token":18,"record_id":14,"summary":"ut"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/train/gameRecordEnd"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 4,
    "token": 18,
    "record_id": 14,
    "summary": "ut"
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
    'http://sns.shenruxiang.com/api/v1/train/gameRecordEnd',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 4,
            'token' => 18,
            'record_id' => 14,
            'summary' => 'ut',
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
    "msg": "游戏训练已完成",
    "data": []
}
```

### HTTP Request
`POST api/v1/train/gameRecordEnd`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 测评记录id
        `summary` | string |  required  | 完成总结语
    
<!-- END_b914cca70c823edfe7990b81b0dc8ddf -->

#Upload


<!-- START_5b769578a2c7d2ab8e61aa5fe83d95d7 -->
## uploadPost
帖子图片上传

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/uploadPost" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":7,"token":12,"file":"numquam"}'

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
    "user_id": 7,
    "token": 12,
    "file": "numquam"
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
            'user_id' => 7,
            'token' => 12,
            'file' => 'numquam',
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
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `file` | file |  required  | 图片文件
    
<!-- END_5b769578a2c7d2ab8e61aa5fe83d95d7 -->

<!-- START_aed041481fd822870d685374244e7c99 -->
## uploadUserAvatar
用户头像上传

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/uploadUserAvatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":13,"token":13,"file":"mollitia"}'

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
    "user_id": 13,
    "token": 13,
    "file": "mollitia"
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
            'user_id' => 13,
            'token' => 13,
            'file' => 'mollitia',
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
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `file` | file |  required  | 用户头像
    
<!-- END_aed041481fd822870d685374244e7c99 -->

#User


<!-- START_ab44101bb820ceac9a41f317639b4bc1 -->
## userInfo
用户个人信息

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":7}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 7
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
    'http://sns.shenruxiang.com/api/v1/user/userInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 7,
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
        "id": 1,
        "user_name": "var100",
        "nick": "来日方长",
        "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
        "password": "",
        "email": "",
        "phone": "13893524930",
        "status": 2,
        "age": 0,
        "address": "",
        "wechat": "",
        "publish_article_num": 0,
        "do_question_num": 0,
        "game_accuracy": 0,
        "create_time": 0,
        "update_time": 0
    }
}
```

### HTTP Request
`POST api/v1/user/userInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
    
<!-- END_ab44101bb820ceac9a41f317639b4bc1 -->

<!-- START_6e4682e52213a50a96d29fd0d6a2b4ce -->
## userInfoEdit
用户信息修改

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userInfoEdit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":7,"token":11,"nick":"qui","sex":"consequatur","avatar":"esse"}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userInfoEdit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 7,
    "token": 11,
    "nick": "qui",
    "sex": "consequatur",
    "avatar": "esse"
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
    'http://sns.shenruxiang.com/api/v1/user/userInfoEdit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 7,
            'token' => 11,
            'nick' => 'qui',
            'sex' => 'consequatur',
            'avatar' => 'esse',
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
`POST api/v1/user/userInfoEdit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `nick` | string |  required  | 昵称
        `sex` | string |  optional  | 性别 男|女
        `avatar` | string |  required  | 头像
    
<!-- END_6e4682e52213a50a96d29fd0d6a2b4ce -->

<!-- START_f4cca7d275967531ab02961919c3f1c1 -->
## userPostList
用户帖子列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userPostList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":11}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userPostList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 11
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
    'http://sns.shenruxiang.com/api/v1/user/userPostList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 11,
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
                "id": 1,
                "title": "帖子标题1",
                "content": "帖子内容",
                "images": [
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    },
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    }
                ],
                "user_id": 1,
                "praise_num": 1,
                "comment_num": 3,
                "share_num": 0,
                "collect_num": 1,
                "view_num": 5,
                "created_at": "2020-08-01 19:34:33",
                "updated_at": "2020-08-01 12:21:15",
                "status": 1,
                "user": {
                    "id": 1,
                    "nick": "来日方长",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            },
            {
                "id": 2,
                "title": "帖子标题2",
                "content": "帖子内容",
                "images": [
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    },
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    }
                ],
                "user_id": 1,
                "praise_num": 1,
                "comment_num": 3,
                "share_num": 0,
                "collect_num": 1,
                "view_num": 5,
                "created_at": "2020-08-01 19:34:33",
                "updated_at": "2020-08-01 12:21:15",
                "status": 1,
                "user": {
                    "id": 1,
                    "nick": "来日方长",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userPostList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userPostList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2
    }
}
```

### HTTP Request
`POST api/v1/user/userPostList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
    
<!-- END_f4cca7d275967531ab02961919c3f1c1 -->

<!-- START_7bc88c9dd1bf8ea62fda364b2b62daa8 -->
## userCommentedList
用户回帖列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userCommentedList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":4,"token":14,"page":13}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userCommentedList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 4,
    "token": 14,
    "page": 13
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
    'http://sns.shenruxiang.com/api/v1/user/userCommentedList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 4,
            'token' => 14,
            'page' => 13,
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
                "id": 1,
                "title": "帖子标题1",
                "content": "帖子内容",
                "images": [
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    },
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    }
                ],
                "user_id": 1,
                "praise_num": 1,
                "comment_num": 3,
                "share_num": 0,
                "collect_num": 1,
                "view_num": 5,
                "created_at": "2020-08-01 19:34:33",
                "updated_at": "2020-08-01 12:21:15",
                "status": 1,
                "post_comment": [
                    {
                        "id": 67,
                        "post_id": 1,
                        "user_id": 1,
                        "to_user_id": 2,
                        "comment_id": 0,
                        "content": "帖子评论",
                        "praise_num": 0,
                        "status": 1,
                        "created_at": "2020-08-01 12:03:20",
                        "updated_at": "2020-08-01 12:03:20",
                        "reply_list": [
                            {
                                "id": 69,
                                "post_id": 1,
                                "user_id": 1,
                                "to_user_id": 2,
                                "comment_id": 67,
                                "content": "帖子评论回复",
                                "praise_num": 0,
                                "status": 1,
                                "created_at": "2020-08-01 12:08:16",
                                "updated_at": "2020-08-01 12:08:16",
                                "to_user": {
                                    "id": 2,
                                    "nick": "来日奋斗让",
                                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                                }
                            }
                        ]
                    },
                    {
                        "id": 68,
                        "post_id": 1,
                        "user_id": 1,
                        "to_user_id": 2,
                        "comment_id": 1,
                        "content": "帖子评论回复",
                        "praise_num": 0,
                        "status": 1,
                        "created_at": "2020-08-01 12:06:38",
                        "updated_at": "2020-08-01 12:06:38",
                        "reply_list": []
                    },
                    {
                        "id": 69,
                        "post_id": 1,
                        "user_id": 1,
                        "to_user_id": 2,
                        "comment_id": 67,
                        "content": "帖子评论回复",
                        "praise_num": 0,
                        "status": 1,
                        "created_at": "2020-08-01 12:08:16",
                        "updated_at": "2020-08-01 12:08:16",
                        "reply_list": []
                    }
                ]
            },
            {
                "id": 2,
                "title": "帖子标题2",
                "content": "帖子内容",
                "images": [
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    },
                    {
                        "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                        "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                    }
                ],
                "user_id": 1,
                "praise_num": 1,
                "comment_num": 3,
                "share_num": 0,
                "collect_num": 1,
                "view_num": 5,
                "created_at": "2020-08-01 19:34:33",
                "updated_at": "2020-08-01 12:21:15",
                "status": 1,
                "post_comment": []
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userCommentedList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userCommentedList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2
    }
}
```

### HTTP Request
`POST api/v1/user/userCommentedList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  required  | 页数
    
<!-- END_7bc88c9dd1bf8ea62fda364b2b62daa8 -->

<!-- START_7bb1d58b23259fd9ca5726b387338286 -->
## matchRecordList
知识竞赛自测记录列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/matchRecordList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":8,"token":12,"page":8}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/matchRecordList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 8,
    "token": 12,
    "page": 8
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
    'http://sns.shenruxiang.com/api/v1/user/matchRecordList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 8,
            'token' => 12,
            'page' => 8,
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
            "user_id": 1,
            "match_id": 1,
            "score": 11,
            "start_time": null,
            "end_time": "2020-08-01 10:16:01",
            "created_at": "2020-08-01 10:14:53",
            "updated_at": "2020-08-01 10:16:01",
            "match": {
                "id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 2,
            "user_id": 1,
            "match_id": 1,
            "score": 0,
            "start_time": null,
            "end_time": null,
            "created_at": "2020-08-01 10:14:58",
            "updated_at": "2020-08-01 10:14:58",
            "match": {
                "id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        }
    ]
}
```

### HTTP Request
`POST api/v1/user/matchRecordList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  required  | 页数
    
<!-- END_7bb1d58b23259fd9ca5726b387338286 -->

<!-- START_09f5321311ee046bd8df745bf43919be -->
## healthRecordList
健康自测记录列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/healthRecordList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":7,"token":11,"page":6}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/healthRecordList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 7,
    "token": 11,
    "page": 6
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
    'http://sns.shenruxiang.com/api/v1/user/healthRecordList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 7,
            'token' => 11,
            'page' => 6,
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
            "user_id": 1,
            "health_id": 1,
            "score": 11,
            "start_time": null,
            "end_time": "2020-08-01 10:16:01",
            "created_at": "2020-08-01 10:14:53",
            "updated_at": "2020-08-01 10:16:01",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 2,
            "user_id": 1,
            "health_id": 1,
            "score": 0,
            "start_time": null,
            "end_time": null,
            "created_at": "2020-08-01 10:14:58",
            "updated_at": "2020-08-01 10:14:58",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 3,
            "user_id": 1,
            "health_id": 1,
            "score": 0,
            "start_time": "2020-08-01 10:52:18",
            "end_time": null,
            "created_at": "2020-08-01 10:52:18",
            "updated_at": "2020-08-01 10:52:18",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 4,
            "user_id": 1,
            "health_id": 1,
            "score": 0,
            "start_time": "2020-08-01 10:52:57",
            "end_time": null,
            "created_at": "2020-08-01 10:52:57",
            "updated_at": "2020-08-01 10:52:57",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 5,
            "user_id": 1,
            "health_id": 1,
            "score": 0,
            "start_time": "2020-08-01 10:52:58",
            "end_time": null,
            "created_at": "2020-08-01 10:52:58",
            "updated_at": "2020-08-01 10:52:58",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 6,
            "user_id": 1,
            "health_id": 1,
            "score": 11,
            "start_time": "2020-08-01 10:53:24",
            "end_time": "2020-08-01 10:53:52",
            "created_at": "2020-08-01 10:53:24",
            "updated_at": "2020-08-01 10:53:52",
            "health": {
                "id": 1,
                "cate_id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        }
    ]
}
```

### HTTP Request
`POST api/v1/user/healthRecordList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  required  | 页数
    
<!-- END_09f5321311ee046bd8df745bf43919be -->

<!-- START_77b2d959ec62f1242623d4c2a7deccf9 -->
## gameRecordList
游戏记录列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/gameRecordList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":12,"token":15,"page":12}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/gameRecordList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 12,
    "token": 15,
    "page": 12
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
    'http://sns.shenruxiang.com/api/v1/user/gameRecordList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 12,
            'token' => 15,
            'page' => 12,
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
            "user_id": 1,
            "match_id": 1,
            "score": 11,
            "start_time": null,
            "end_time": "2020-08-01 10:16:01",
            "created_at": "2020-08-01 10:14:53",
            "updated_at": "2020-08-01 10:16:01",
            "match": {
                "id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        },
        {
            "id": 2,
            "user_id": 1,
            "match_id": 1,
            "score": 0,
            "start_time": null,
            "end_time": null,
            "created_at": "2020-08-01 10:14:58",
            "updated_at": "2020-08-01 10:14:58",
            "match": {
                "id": 1,
                "title": "测评一",
                "sort": 1,
                "hot": 0,
                "desc": "疫情心理健康自评量表描述",
                "introduce": "疫情心理健康自评量表介绍",
                "introduce_src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "introduce_src_type": "1",
                "src": "http:\/\/daodao.shenruxiang.com\/fangao_about.png",
                "src_type": 1,
                "join_num": 11,
                "duration": 60,
                "created_at": "2020-08-01 15:13:48",
                "updated_at": "2020-08-01 15:13:48"
            }
        }
    ]
}
```

### HTTP Request
`POST api/v1/user/gameRecordList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  required  | 页数
    
<!-- END_77b2d959ec62f1242623d4c2a7deccf9 -->

<!-- START_bfb590aaf9c194724ed566321c719253 -->
## userPraiseList
用户点赞列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userPraiseList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"token":15,"page":1}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userPraiseList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "token": 15,
    "page": 1
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
    'http://sns.shenruxiang.com/api/v1/user/userPraiseList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 15,
            'page' => 1,
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
                "id": 114,
                "post_id": 2,
                "comment_id": 0,
                "user_id": 1,
                "to_user_id": 2,
                "type": 1,
                "created_at": "2020-05-05 01:05:17",
                "updated_at": "2020-05-05 01:05:17",
                "read_status": 1,
                "deleted_at": null,
                "to_user": {
                    "id": 2,
                    "nick": "来日奋斗让",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            },
            {
                "id": 193,
                "post_id": 67,
                "comment_id": 34,
                "user_id": 1,
                "to_user_id": 2,
                "type": 1,
                "created_at": "2020-05-12 01:34:16",
                "updated_at": "2020-05-12 01:34:16",
                "read_status": 1,
                "deleted_at": null,
                "to_user": {
                    "id": 2,
                    "nick": "来日奋斗让",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            },
            {
                "id": 213,
                "post_id": 110,
                "comment_id": 0,
                "user_id": 1,
                "to_user_id": 2,
                "type": 1,
                "created_at": "2020-07-23 13:05:08",
                "updated_at": "2020-07-23 13:05:08",
                "read_status": 1,
                "deleted_at": null,
                "to_user": {
                    "id": 2,
                    "nick": "来日奋斗让",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            },
            {
                "id": 217,
                "post_id": 110,
                "comment_id": 64,
                "user_id": 1,
                "to_user_id": 3,
                "type": 2,
                "created_at": "2020-07-23 13:17:02",
                "updated_at": "2020-07-23 13:17:02",
                "read_status": 1,
                "deleted_at": null,
                "to_user": {
                    "id": 3,
                    "nick": "haha",
                    "avatar": ""
                }
            },
            {
                "id": 218,
                "post_id": 1,
                "comment_id": 0,
                "user_id": 1,
                "to_user_id": 1,
                "type": 1,
                "created_at": "2020-08-01 12:10:46",
                "updated_at": "2020-08-01 12:10:46",
                "read_status": 1,
                "deleted_at": null,
                "to_user": {
                    "id": 1,
                    "nick": "来日方长",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg"
                }
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userPraiseList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userPraiseList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 5
    }
}
```

### HTTP Request
`POST api/v1/user/userPraiseList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  optional  | 页数
    
<!-- END_bfb590aaf9c194724ed566321c719253 -->

<!-- START_614dee70592f89821072db3d73a234ba -->
## userAdvisoryOrder
用户预约列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userAdvisoryOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":4,"token":2,"page":11}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userAdvisoryOrder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 4,
    "token": 2,
    "page": 11
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
    'http://sns.shenruxiang.com/api/v1/user/userAdvisoryOrder',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 4,
            'token' => 2,
            'page' => 11,
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
                "id": 1,
                "user_id": 1,
                "advisory_id": 1,
                "status": 1,
                "created_at": "2020-08-01 12:47:04",
                "updated_at": "2020-08-01 12:47:41",
                "order_at": "2020-08-01 20:31:40",
                "advisory": {
                    "id": 1,
                    "user_id": 1,
                    "name": "沈老师",
                    "avatar": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                    "job": "心理工作者",
                    "org": "王者联盟",
                    "tel": "13012796666",
                    "desc": "这是老师的描述",
                    "created_at": "2020-08-01 20:31:40",
                    "updated_at": "2020-08-01 20:31:40"
                }
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userAdvisoryOrder?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userAdvisoryOrder",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1
    }
}
```

### HTTP Request
`POST api/v1/user/userAdvisoryOrder`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  optional  | 页数
    
<!-- END_614dee70592f89821072db3d73a234ba -->

<!-- START_b478295d940feeb655aeaef70f36af5e -->
## userCollectList
用户收藏列表

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userCollectList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":15,"token":2,"page":13}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userCollectList"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 15,
    "token": 2,
    "page": 13
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
    'http://sns.shenruxiang.com/api/v1/user/userCollectList',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 15,
            'token' => 2,
            'page' => 13,
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
                "id": 4,
                "post_id": 1,
                "user_id": 1,
                "created_at": "2020-08-01 12:21:15",
                "updated_at": "2020-08-01 12:21:15",
                "to_user_id": 1,
                "post": {
                    "id": 1,
                    "title": "帖子标题1",
                    "content": "帖子内容",
                    "images": [
                        {
                            "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg",
                            "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/cd28b7505f3d539879ea2dda5a9b121d.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                        },
                        {
                            "src": "http:\/\/daodao.shenruxiang.com\/sns\/post\/d80a95beede76095240e053890b3a086.jpg",
                            "thumb_src": "http:\/\/daodao.shenruxiang.com\/\/sns\/post\/d80a95beede76095240e053890b3a086.jpg?imageView2\/2\/w\/600\/h\/600\/q\/75"
                        }
                    ],
                    "user_id": 1,
                    "praise_num": 1,
                    "comment_num": 3,
                    "share_num": 0,
                    "collect_num": 1,
                    "view_num": 5,
                    "created_at": "2020-08-01 19:34:33",
                    "updated_at": "2020-08-01 12:21:15",
                    "status": 1
                }
            }
        ],
        "first_page_url": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userCollectList?page=1",
        "from": 1,
        "next_page_url": null,
        "path": "http:\/\/www.questionapi.com:8888\/api\/v1\/user\/userCollectList",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2
    }
}
```

### HTTP Request
`POST api/v1/user/userCollectList`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `page` | integer |  optional  | 页数
    
<!-- END_b478295d940feeb655aeaef70f36af5e -->

<!-- START_ced8d4e60fc5729a06ac6f15df4e91b8 -->
## api/v1/user/userReplyDel
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userReplyDel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userReplyDel"
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
    'http://sns.shenruxiang.com/api/v1/user/userReplyDel',
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



### HTTP Request
`POST api/v1/user/userReplyDel`


<!-- END_ced8d4e60fc5729a06ac6f15df4e91b8 -->

<!-- START_f3193574e2b5285f3bb27717204312a4 -->
## api/v1/user/userReplyList
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/userReplyList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/userReplyList"
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
    'http://sns.shenruxiang.com/api/v1/user/userReplyList',
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



### HTTP Request
`POST api/v1/user/userReplyList`


<!-- END_f3193574e2b5285f3bb27717204312a4 -->

<!-- START_43363a1dc87b0415d843dbb0b7ceac7d -->
## matchRecordInfo
知识竞赛自测记录详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/matchRecordInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":6,"token":2,"record_id":19}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/matchRecordInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 6,
    "token": 2,
    "record_id": 19
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
    'http://sns.shenruxiang.com/api/v1/user/matchRecordInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 6,
            'token' => 2,
            'record_id' => 19,
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
        "id": 1,
        "user_id": 1,
        "match_id": 1,
        "score": 11,
        "score_level": "优秀",
        "question": "",
        "start_time": "2020-08-01 10:16:01",
        "end_time": "2020-08-01 10:16:01",
        "created_at": "2020-08-01 10:14:53",
        "updated_at": "2020-08-01 10:16:01",
        "match": {
            "id": 1,
            "title": "比平时更加积极的分享一些自己认为  有用的或是感到触动的疫情相关知识",
            "desc": "疫情心理健康自评量表描述",
            "sort": 1,
            "hot": 0,
            "introduce": "比平时更加积极的分享一些自己认为用的或是感到触动的疫情相关知识",
            "introduce_src": "\/uploads\/image\/20200810\/2020081004262330.png",
            "introduce_src_type": 1,
            "src": "\/uploads\/image\/20200810\/2020081004262330.png",
            "src_type": 1,
            "join_num": 11,
            "click_num": 0,
            "share_num": 0,
            "duration": 60,
            "created_at": "2020-08-01 15:13:48",
            "updated_at": "2020-08-01 15:13:48"
        }
    }
}
```

### HTTP Request
`POST api/v1/user/matchRecordInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 记录id
    
<!-- END_43363a1dc87b0415d843dbb0b7ceac7d -->

<!-- START_49f8cc0ee184123eefd38530d1951da5 -->
## gameRecordInfo
游戏记录详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/gameRecordInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":12,"token":15,"record_id":7}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/gameRecordInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 12,
    "token": 15,
    "record_id": 7
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
    'http://sns.shenruxiang.com/api/v1/user/gameRecordInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 12,
            'token' => 15,
            'record_id' => 7,
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
        "id": 1,
        "game_id": 1,
        "user_id": 1,
        "summary": "sdfsd ",
        "start_at": "2020-08-10 21:02:39",
        "end_at": "2020-08-10 21:02:41",
        "data_json": "1231",
        "created_at": null,
        "updated_at": null,
        "game": {
            "id": 1,
            "title": "注意力训练",
            "desc": "通过简洁的游戏训练提高儿童的注意力",
            "image": "\/uploads\/image\/20200810\/2020081011012145.jpg",
            "introduction": "本部分属于训练提升模块中训练游戏，通过简洁的游戏训练提高儿童的注意力，经验表明保持一段时间的训练注意力能显著提升。",
            "guide": "接下来我们会看到一张打乱数字顺序的表格，在保持正确的情况下尽可能快的按顺序点击数字，注意不要出错哦。",
            "duration": 60,
            "join_num": 0,
            "sort": 0,
            "created_at": "2020-08-02 16:16:11",
            "updated_at": "2020-08-02 16:16:13"
        }
    }
}
```

### HTTP Request
`POST api/v1/user/gameRecordInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 记录id
    
<!-- END_49f8cc0ee184123eefd38530d1951da5 -->

<!-- START_8c36791c9703f90bc6c21df701c6d3d0 -->
## healthRecordInfo
健康自测记录详情

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/healthRecordInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":1,"token":16,"record_id":18}'

```

```javascript
const url = new URL(
    "http://sns.shenruxiang.com/api/v1/user/healthRecordInfo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 1,
    "token": 16,
    "record_id": 18
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
    'http://sns.shenruxiang.com/api/v1/user/healthRecordInfo',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 1,
            'token' => 16,
            'record_id' => 18,
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
        "id": 7,
        "user_id": 54,
        "health_id": 4,
        "score": 11,
        "score_level": "良好",
        "question": "",
        "start_time": "2020-08-01 10:53:24",
        "end_time": "2020-08-01 10:53:52",
        "created_at": "2020-07-17 10:53:24",
        "updated_at": "2020-08-01 10:53:52",
        "health": {
            "id": 4,
            "cate_id": 2,
            "title": "健康自测测评题目",
            "sort": 1,
            "hot": 0,
            "desc": "健康自测测评题目",
            "introduce": "健康自测测评题目",
            "introduce_src": "\/uploads\/image\/20200810\/2020081010123791.png",
            "introduce_src_type": "1",
            "src": "\/uploads\/image\/20200810\/2020081010122018.png",
            "src_type": 1,
            "join_num": 0,
            "click_num": 0,
            "share_num": 0,
            "duration": 100,
            "created_at": null,
            "updated_at": null
        }
    }
}
```

### HTTP Request
`POST api/v1/user/healthRecordInfo`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `record_id` | integer |  required  | 记录id
    
<!-- END_8c36791c9703f90bc6c21df701c6d3d0 -->


