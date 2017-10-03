<div class="page-header">
    <h3>Login</h3>
    <p class="lead">Disable the responsiveness of Bootstrap by fixing the width of the container and using the first grid system tier. <a href="http://getbootstrap.com/getting-started/#disable-responsive">Read the documentation</a> for more information.</p>
</div>

<!-- 로그인 폼 -->
<div class="row" style="margin: 0;">
    <div class="col-xs-8"></div>
    <div class="col-xs-4" style="background-color: #ffffff">
        <form action="/doLogin" method="post">
            <div class="input-group">
                <span id="sizing-addon2" class="input-group-addon" style="width: 100px;">ID</span>
                <input class="form-control" type="text" name="memberId"  placeholder="MemberId" aria-describedby="sizing-addon2" style="width: 200px;">
            </div>
            <p></p>
            <div class="input-group">
                <span id="sizing-addon2" class="input-group-addon" style="width: 100px;">PW</span>
                <input class="form-control" type="password" name="password" placeholder="Password" aria-describedby="sizing-addon2" style="width: 200px;">
            </div>
            <p></p>
            <button type="submit" class="btn btn-default" style="float: right;">Login</button>
            <a class="btn btn-default" href="/signUp/" style="float: right; margin-right: 10px;">SignUp</a>
        </form>
    </div>
</div>
<!-- /로그인 폼 -->

<h3>What changes</h3>
<p>Note the lack of the <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code>, which disables the zooming aspect of sites in mobile devices. In addition, we reset our container's width and changed the navbar to prevent collapsing, and are basically good to go.</p>

<h3>Regarding navbars</h3>
<p>As a heads up, the navbar component is rather tricky here in that the styles for displaying it are rather specific and detailed. Overrides to ensure desktop styles display are not as performant or sleek as one would like. Just be aware there may be potential gotchas as you build on top of this example when using the navbar.</p>

<h3>Browsers, scrolling, and fixed elements</h3>
<p>Non-responsive layouts highlight a key drawback to fixed elements. <strong class="text-danger">Any fixed component, such as a fixed navbar, will not be scrollable when the viewport becomes narrower than the page content.</strong> In other words, given the non-responsive container width of 970px and a viewport of 800px, you'll potentially hide 170px of content.</p>
<p>There is no way around this as it's default browser behavior. The only solution is a responsive layout or using a non-fixed element.</p>