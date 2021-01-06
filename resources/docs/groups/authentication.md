# Authentication

Authentication endpoints

## Login


Gain access to the application

> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"optio","password":"ratione"}'

```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "optio",
    "password": "ratione"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "authorization",
    "id": "token",
    "attributes": {
        "access_token": null,
        "token_type": null,
        "expires_in": null
    },
    "links": {
        "self": "http:\/\/localhost\/api\/login"
    }
}
```
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
The registered user email.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
The user secret code.</p>

</form>


## Forgot password


Send user an email with a link to change password in the event user forgot password or needs to change password

> Example request:

```bash
curl -X POST \
    "http://localhost/api/forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"sunt"}'

```

```javascript
const url = new URL(
    "http://localhost/api/forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "sunt"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "authorization",
    "id": "forgot_password",
    "attributes": {
        "message": "Please check your email to get the change password link"
    },
    "links": {
        "self": "http:\/\/localhost\/api\/forgot_password"
    }
}
```
<div id="execution-results-POSTapi-forgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-forgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot_password"></code></pre>
</div>
<div id="execution-error-POSTapi-forgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot_password"></code></pre>
</div>
<form id="form-POSTapi-forgot_password" data-method="POST" data-path="api/forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-forgot_password" onclick="tryItOut('POSTapi-forgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-forgot_password" onclick="cancelTryOut('POSTapi-forgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-forgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/forgot_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-forgot_password" data-component="body" required  hidden>
<br>
The registered user email.</p>

</form>


## Change password


Set a new password that will be used to gain access the application

> Example request:

```bash
curl -X POST \
    "http://localhost/api/change_password/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"aut","password_confirmation":"alias"}'

```

```javascript
const url = new URL(
    "http://localhost/api/change_password/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "aut",
    "password_confirmation": "alias"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "authorization",
    "id": "logout",
    "attributes": {
        "message": "The password was set successfully"
    },
    "links": {
        "self": "http:\/\/localhost\/api\/change_password\/1"
    }
}
```
<div id="execution-results-POSTapi-change_password--$link-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-change_password--$link-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_password--$link-"></code></pre>
</div>
<div id="execution-error-POSTapi-change_password--$link-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_password--$link-"></code></pre>
</div>
<form id="form-POSTapi-change_password--$link-" data-method="POST" data-path="api/change_password/{$link}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_password--$link-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-change_password--$link-" onclick="tryItOut('POSTapi-change_password--$link-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-change_password--$link-" onclick="cancelTryOut('POSTapi-change_password--$link-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-change_password--$link-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/change_password/{$link}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>$link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="$link" data-endpoint="POSTapi-change_password--$link-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-change_password--$link-" data-component="body" required  hidden>
<br>
The new password that is a minimum of 8 characters.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTapi-change_password--$link-" data-component="body" required  hidden>
<br>
Re-type the new password as a confirmation.</p>

</form>


## Refresh token


Refresh the bearer token when user is logged in and token is about to expire

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "authorization",
    "id": "token",
    "attributes": {
        "access_token": null,
        "token_type": null,
        "expires_in": null
    },
    "links": {
        "self": "http:\/\/localhost\/api\/refresh"
    }
}
```
<div id="execution-results-GETapi-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-refresh"></code></pre>
</div>
<form id="form-GETapi-refresh" data-method="GET" data-path="api/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-refresh" onclick="tryItOut('GETapi-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-refresh" onclick="cancelTryOut('GETapi-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/refresh</code></b>
</p>
</form>


## Log out


Voluntatirly end access to the application

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "authorization",
    "id": "logout",
    "attributes": {
        "message": "Successfully logged out"
    },
    "links": {
        "self": "http:\/\/localhost\/api\/logout"
    }
}
```
<div id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"></code></pre>
</div>
<div id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout"></code></pre>
</div>
<form id="form-GETapi-logout" data-method="GET" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-logout" onclick="tryItOut('GETapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-logout" onclick="cancelTryOut('GETapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/logout</code></b>
</p>
</form>



