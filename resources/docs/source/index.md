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
    -d '{"user_id":14,"token":11,"page":13,"cate_id":18}'

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
    "user_id": 14,
    "token": 11,
    "page": 13,
    "cate_id": 18
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
            'user_id' => 14,
            'token' => 11,
            'page' => 13,
            'cate_id' => 18,
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
    -d '{"user_id":6,"token":5,"post_id":11}'

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
    "user_id": 6,
    "token": 5,
    "post_id": 11
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
            'user_id' => 6,
            'token' => 5,
            'post_id' => 11,
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
    -d '{"user_id":20,"token":11,"post_id":19,"page":19}'

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
    "user_id": 20,
    "token": 11,
    "post_id": 19,
    "page": 19
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
            'user_id' => 20,
            'token' => 11,
            'post_id' => 19,
            'page' => 19,
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
    -d '{"user_id":18,"token":16,"post_id":7,"comment_id":6,"comment_content":"corporis","to_user_id":17}'

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
    "user_id": 18,
    "token": 16,
    "post_id": 7,
    "comment_id": 6,
    "comment_content": "corporis",
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
    'http://sns.shenruxiang.com/api/v1/community/sendPostComment',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 18,
            'token' => 16,
            'post_id' => 7,
            'comment_id' => 6,
            'comment_content' => 'corporis',
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
    -d '{"user_id":2,"token":18,"post_id":17}'

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
    "user_id": 2,
    "token": 18,
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
    'http://sns.shenruxiang.com/api/v1/community/praisePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 2,
            'token' => 18,
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
    -d '{"user_id":5,"token":5,"post_id":12,"comment_id":8}'

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
    "user_id": 5,
    "token": 5,
    "post_id": 12,
    "comment_id": 8
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
            'user_id' => 5,
            'token' => 5,
            'post_id' => 12,
            'comment_id' => 8,
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
    -d '{"user_id":1,"token":9,"post_id":13}'

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
    "user_id": 1,
    "token": 9,
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
    'http://sns.shenruxiang.com/api/v1/community/sharePost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 1,
            'token' => 9,
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
    -d '{"user_id":14,"token":6,"post_id":16}'

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
    "user_id": 14,
    "token": 6,
    "post_id": 16
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
            'user_id' => 14,
            'token' => 6,
            'post_id' => 16,
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
    -d '{"user_id":17,"token":9,"title":"natus","content":"a","images":"ipsa"}'

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
    "user_id": 17,
    "token": 9,
    "title": "natus",
    "content": "a",
    "images": "ipsa"
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
            'user_id' => 17,
            'token' => 9,
            'title' => 'natus',
            'content' => 'a',
            'images' => 'ipsa',
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
    -d '{"user_id":20,"advisory_id":13,"order_at":"alias"}'

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
    "user_id": 20,
    "advisory_id": 13,
    "order_at": "alias"
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
            'user_id' => 20,
            'advisory_id' => 13,
            'order_at' => 'alias',
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
    -d '{"id":1,"user_id":20,"order_at":"quo"}'

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
    "id": 1,
    "user_id": 20,
    "order_at": "quo"
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
            'id' => 1,
            'user_id' => 20,
            'order_at' => 'quo',
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
    `id` | integer |  required  | 预约id
        `user_id` | integer |  required  | 用户id
        `order_at` | datetime |  required  | 预约时间
    
<!-- END_8b7666eee62023e28f8b274ce550fc8e -->

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
    -d '{"cate_id":17,"sort":"accusamus"}'

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
    "cate_id": 17,
    "sort": "accusamus"
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
            'cate_id' => 17,
            'sort' => 'accusamus',
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
    -d '{"id":10}'

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
    "id": 10
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
            'id' => 10,
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
    -d '{"sort":"culpa"}'

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
    "sort": "culpa"
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
            'sort' => 'culpa',
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
    -d '{"id":12}'

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
    "id": 12
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
            'id' => 12,
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
    -d '{"match_id":4,"user_id":4}'

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
    "match_id": 4,
    "user_id": 4
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
            'match_id' => 4,
            'user_id' => 4,
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
    `match_id` | integer |  required  | 测评id
        `user_id` | integer |  required  | 用户id
    
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
    -d '{"record_id":5,"user_id":7,"score":14}'

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
    "record_id": 5,
    "user_id": 7,
    "score": 14
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
            'record_id' => 5,
            'user_id' => 7,
            'score' => 14,
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
    `record_id` | integer |  required  | 测评记录id
        `user_id` | integer |  required  | 用户id
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
    -d '{"record_id":15}'

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
    "record_id": 15
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
            'record_id' => 15,
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
    -d '{"cate_id":19,"sort":"numquam"}'

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
    "cate_id": 19,
    "sort": "numquam"
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
            'cate_id' => 19,
            'sort' => 'numquam',
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
健康自测测评详情

> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/knowledge/healthInfo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1}'

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
    "id": 1
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
            'id' => 1,
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
    -d '{"health_id":6,"user_id":3}'

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
    "health_id": 6,
    "user_id": 3
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
            'health_id' => 6,
            'user_id' => 3,
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
    `health_id` | integer |  required  | 测评id
        `user_id` | integer |  required  | 用户id
    
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
    -d '{"record_id":8,"user_id":6,"score":8}'

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
    "record_id": 8,
    "user_id": 6,
    "score": 8
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
            'record_id' => 8,
            'user_id' => 6,
            'score' => 8,
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
    `record_id` | integer |  required  | 测评记录id
        `user_id` | integer |  required  | 用户id
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
    -d '{"record_id":13}'

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
    "record_id": 13
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
            'record_id' => 13,
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
    `record_id` | integer |  required  | 测评记录id
    
<!-- END_4db252ce48101b3189ba7831fa3eff65 -->

#Login

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
    -d '{"openid":"eius","login_device_type":"perferendis","login_device":"voluptate","nick":"sed","avatar":"minus","province":"consequuntur","city":"pariatur"}'

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
    "openid": "eius",
    "login_device_type": "perferendis",
    "login_device": "voluptate",
    "nick": "sed",
    "avatar": "minus",
    "province": "consequuntur",
    "city": "pariatur"
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
            'openid' => 'eius',
            'login_device_type' => 'perferendis',
            'login_device' => 'voluptate',
            'nick' => 'sed',
            'avatar' => 'minus',
            'province' => 'consequuntur',
            'city' => 'pariatur',
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
        `login_device_type` | string |  required  | 登陆设备类型（android/ios）
        `login_device` | string |  optional  | 登陆设备(小米10)
        `nick` | string |  optional  | 昵称
        `avatar` | string |  optional  | 头像
        `province` | string |  optional  | 省份
        `city` | string |  optional  | 城市
    
<!-- END_89ab4d2e68c02976da4a993a2a2733db -->

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
    -d '{"cate_id":3}'

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
    "cate_id": 3
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
            'cate_id' => 3,
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
    -d '{"day_id":19}'

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
    "day_id": 19
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
            'day_id' => 19,
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
    -d '{"game_id":2}'

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
    "game_id": 2
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
            'game_id' => 2,
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
    -d '{"game_id":15,"user_id":7}'

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
    "game_id": 15,
    "user_id": 7
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
            'game_id' => 15,
            'user_id' => 7,
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
    `game_id` | integer |  required  | 游戏id
        `user_id` | integer |  required  | 用户id
    
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
    -d '{"record_id":19,"summary":"est"}'

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
    "record_id": 19,
    "summary": "est"
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
            'record_id' => 19,
            'summary' => 'est',
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
    -d '{"user_id":7,"token":17,"file":{"":"necessitatibus"}}'

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
    "token": 17,
    "file": {
        "": "necessitatibus"
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
    'http://sns.shenruxiang.com/api/v1/uploadPost',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_id' => 7,
            'token' => 17,
            'file' => [
                '' => 'necessitatibus',
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
        `file[]` | file |  required  | 图片文件列表
    
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
    -d '{"user_id":6,"token":20,"file":{"":"in"}}'

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
    "user_id": 6,
    "token": 20,
    "file": {
        "": "in"
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
            'user_id' => 6,
            'token' => 20,
            'file' => [
                '' => 'in',
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
    `user_id` | integer |  required  | 用户id
        `token` | integer |  required  | 用户token
        `file[]` | file |  required  | 用户头像
    
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
    -d '{"user_id":13}'

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
    "user_id": 13
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
            'user_id' => 13,
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
    -d '{"nick_name":"rerum","sex":"ducimus","avatar":"reiciendis"}'

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
    "nick_name": "rerum",
    "sex": "ducimus",
    "avatar": "reiciendis"
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
            'nick_name' => 'rerum',
            'sex' => 'ducimus',
            'avatar' => 'reiciendis',
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
    `nick_name` | string |  required  | 昵称
        `sex` | string |  required  | 性别 男|女
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
    -d '{"user_id":5}'

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
    "user_id": 5
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
            'user_id' => 5,
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
    -d '{"user_id":12,"page":15}'

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
    "user_id": 12,
    "page": 15
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
            'user_id' => 12,
            'page' => 15,
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
        `page` | integer |  required  | 页数
    
<!-- END_7bc88c9dd1bf8ea62fda364b2b62daa8 -->

<!-- START_7bb1d58b23259fd9ca5726b387338286 -->
## matchRecordList
知识竞赛自测记录

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/matchRecordList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":13,"page":9}'

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
    "user_id": 13,
    "page": 9
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
            'user_id' => 13,
            'page' => 9,
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
        `page` | integer |  required  | 页数
    
<!-- END_7bb1d58b23259fd9ca5726b387338286 -->

<!-- START_09f5321311ee046bd8df745bf43919be -->
## healthRecordList
健康自测自测记录

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://sns.shenruxiang.com/api/v1/user/healthRecordList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":9,"page":7}'

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
    "user_id": 9,
    "page": 7
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
            'user_id' => 9,
            'page' => 7,
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
        `page` | integer |  required  | 页数
    
<!-- END_09f5321311ee046bd8df745bf43919be -->

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
    -d '{"user_id":18,"token":19,"page":14}'

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
    "token": 19,
    "page": 14
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
            'token' => 19,
            'page' => 14,
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
    -d '{"user_id":5,"page":18}'

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
    "user_id": 5,
    "page": 18
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
            'user_id' => 5,
            'page' => 18,
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
    -d '{"user_id":3,"page":16}'

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
    "user_id": 3,
    "page": 16
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
            'user_id' => 3,
            'page' => 16,
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
        `page` | integer |  optional  | 页数
    
<!-- END_b478295d940feeb655aeaef70f36af5e -->


