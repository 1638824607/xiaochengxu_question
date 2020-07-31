<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>登陆注册</h1>
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
<h2>登陆</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":3,"room_id":"eum","forever":false,"another_one":44308.969781,"yet_another_param":{"name":"illum"},"even_more_param":[1724.05666],"book":{"name":"eligendi","author_id":11,"pages_count":2},"ids":[5],"users":[{"first_name":"John","last_name":"Doe"}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 3,
    "room_id": "eum",
    "forever": false,
    "another_one": 44308.969781,
    "yet_another_param": {
        "name": "illum"
    },
    "even_more_param": [
        1724.05666
    ],
    "book": {
        "name": "eligendi",
        "author_id": 11,
        "pages_count": 2
    },
    "ids": [
        5
    ],
    "users": [
        {
            "first_name": "John",
            "last_name": "Doe"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/v1/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_id' =&gt; 3,
            'room_id' =&gt; 'eum',
            'forever' =&gt; false,
            'another_one' =&gt; 44308.969781,
            'yet_another_param' =&gt; [
                'name' =&gt; 'illum',
            ],
            'even_more_param' =&gt; [
                1724.05666,
            ],
            'book' =&gt; [
                'name' =&gt; 'eligendi',
                'author_id' =&gt; 11,
                'pages_count' =&gt; 2,
            ],
            'ids' =&gt; [
                5,
            ],
            'users' =&gt; [
                [
                    'first_name' =&gt; 'John',
                    'last_name' =&gt; 'Doe',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/login</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>integer</td>
<td>required</td>
<td>用户DI</td>
</tr>
<tr>
<td><code>room_id</code></td>
<td>string</td>
<td>optional</td>
<td>范德萨发水淀粉.</td>
</tr>
<tr>
<td><code>forever</code></td>
<td>boolean</td>
<td>optional</td>
<td>Whether to ban the user forever.</td>
</tr>
<tr>
<td><code>another_one</code></td>
<td>number</td>
<td>optional</td>
<td>Just need something here.</td>
</tr>
<tr>
<td><code>yet_another_param</code></td>
<td>object</td>
<td>required</td>
<td>Some object params.</td>
</tr>
<tr>
<td><code>yet_another_param.name</code></td>
<td>string</td>
<td>required</td>
<td>Subkey in the object param.</td>
</tr>
<tr>
<td><code>even_more_param</code></td>
<td>array</td>
<td>optional</td>
<td>Some array params.</td>
</tr>
<tr>
<td><code>even_more_param.*</code></td>
<td>float</td>
<td>optional</td>
<td>Subkey in the array param.</td>
</tr>
<tr>
<td><code>book.name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>book.author_id</code></td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td><code>book[pages_count]</code></td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td><code>ids.*</code></td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td><code>users.*.first_name</code></td>
<td>string</td>
<td>optional</td>
<td>The first name of the user.</td>
</tr>
<tr>
<td><code>users.*.last_name</code></td>
<td>string</td>
<td>optional</td>
<td>The last name of the user.</td>
</tr>
</tbody>
</table>
<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->
<!-- START_3ab4d7754472397e018957fa8110ac8c -->
<h2>注销</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/logout</code></p>
<!-- END_3ab4d7754472397e018957fa8110ac8c -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                              </div>
                </div>
    </div>
  </body>
</html>