<? $active = "home"; ?>
<? $page = "home"; ?>
<? include_once("inc/header.php"); ?>


<h1>Theme Modification Documentation</h1>

<h2 class="section-title">Custom Typography</h2>
<ul class="disc">
  <li><p><strong>Place the following lines of code in the <code>&lt;head&gt; &lt;/head&gt;</code> section of our theme:</strong></p>
<pre class="xmsg-code">&lt;link rel="stylesheet" type="text/css" href="//cloud.typography.com/6579332/617026/css/fonts.css" /&gt;
&lt;link rel="stylesheet" type="text/css" href="http://icc.pub/cms/resources/xm-custom-typography.css" /&gt;
&lt;link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"&gt;</pre>
    <p>This will enable all of our custom typography to be used across the website.</p>
  </li>
  <li><p><strong>ICC's Corporate Typography:</strong></p>
    <p>I see that you precompile your styles, you can put the following styles in your style sheet as well, so that you can reference them throughout the style sheet.</p>
    <pre class="xmsg-code">.archer-light                       { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 400; font-style: normal; }
.archer-light-italic                { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 400; font-style: italic; }
.archer-book                        { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 500; font-style: normal; }
.archer-book-italic                 { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 500; font-style: italic; }
.archer-medium                      { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 600; font-style: normal; }
.archer-medium-italic               { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 600; font-style: italic; }
.archer-semibold                    { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 700; font-style: normal; }
.archer-semibold-italic             { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 700; font-style: italic; }
.archer-bold                        { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 800; font-style: normal; }
.archer-bold-italic                 { font-family: 'Archer SSm A', 'Archer SSm B'; font-weight: 800; font-style: italic; }

.gotham-extra-light                 { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 200; font-style: normal; }
.gotham-extra-light-italic          { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 200; font-style: italic; }
.gotham-light                       { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 300; font-style: normal; }
.gotham-light-italic                { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 300; font-style: italic; }
.gotham-book                        { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 400; font-style: normal; }
.gotham-book-italic                 { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 400; font-style: italic; }
.gotham-medium                      { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 500; font-style: normal; }
.gotham-medium-italic               { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 500; font-style: italic; }
.gotham-bold                        { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 700; font-style: normal; }
.gotham-bold-italic                 { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 700; font-style: italic; }
.gotham-black                       { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 800; font-style: normal; }
.gotham-black-italic                { font-family: 'Gotham SSm A', 'Gotham SSm B'; font-weight: 800; font-style: italic; }

.gotham-narrow-extra-light          { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 200; font-style: normal; }
.gotham-narrow-extra-light-italic   { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 200; font-style: italic; }
.gotham-narrow-light                { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 300; font-style: normal; }
.gotham-narrow-light-italic         { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 300; font-style: italic; }
.gotham-narrow-book                 { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 400; font-style: normal; }
.gotham-narrow-book-italic          { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 400; font-style: italic; }
.gotham-narrow-medium               { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 500; font-style: normal; }
.gotham-narrow-medium-italic        { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 500; font-style: italic; }
.gotham-narrow-bold                 { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 700; font-style: normal; }
.gotham-narrow-bold-italic          { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 700; font-style: italic; }
.gotham-narrow-black                { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 800; font-style: normal; }
.gotham-narrow-black-italic         { font-family: 'Gotham Narrow SSm A', 'Gotham Narrow SSm B'; font-weight: 800; font-style: italic; }

.mercury-light                      { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 300; font-style: normal; }
.mercury-light-italic               { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 300; font-style: italic; }
.mercury-book                       { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 400; font-style: normal; }
.mercury-book-italic                { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 400; font-style: italic; }
.mercury-medium                     { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 500; font-style: normal; }
.mercury-medium-italic              { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 500; font-style: italic; }
.mercury-bold                       { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 700; font-style: normal; }
.mercury-bold-italic                { font-family: 'Mercury SSm A', 'Mercury SSm B'; font-weight: 700; font-style: italic; }</pre>
  </li>
</ul>

<h2 class="section-title">Global Styles</h2>

<p>
  We made a few changes to the global styles so that it would be more usable and hierarchically correct, as well as conforming to our brand and looking nice.
  I encourage you to <a href="#">check out the global style sheet</a> for all the changes, but I'll list the big ones here. While making these changes, 
  I tried to stick as much to your pre-existing style names as I could, but after a while the pages just got too complicated, so I just created the same layouts
  with many less divs, named intuitively to what the data it was containing was, so it should be easy to match up to your pre-existing styles.
</p>

<ul class="disc">
  <li><p><strong>Body</strong></p>
    <pre class="xmsg-code">body {
  .gotham-narrow-light; <span class="xmsg-note">&lt;!-- This is the default font for all copy on the site --&gt;</span>
  line-height: 1.6;
  font-size: 14px;
  margin: 0;
  padding: 0;
  border-top: 5px solid rgb(51, 51, 51); }</pre>
  </li>

  <li><p><strong>Headings</strong></p>
    <pre class="xmsg-code">h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 { 
  .archer-bold; <span class="xmsg-note">&lt;!-- This is the default font for all headings on the site --&gt;</span>
  line-height: 1.4em; }

<span class="xmsg-note">&lt;!-- These are all resized so that they can all be utilized --&gt;</span>
h1, .h1 { font-size: 2.2em; }
h2, .h2 { font-size: 2em; }
h3, .h3 { font-size: 1.8em; }
h4, .h4 { font-size: 1.6em; }
h5, .h5 { font-size: 1.4em; }
h6, .h6 { font-size: 1.2em; }

<span class="xmsg-note">&lt;!-- Various classes were added to create different headings --&gt;</span>
h1.page-title { 
  background-color: #333;
  color: #FFF;
  margin: 0px;
  padding: 50px 0;
  text-align: center;
  width:100%; }

.section-title { 
  color: #333;
  margin: 50px 0 20px 0;
  text-transform: uppercase;
  border-bottom: 1px dashed #aaa; }

.table-title {
  border-bottom: 1px solid #DDD;
  margin-bottom: 0px;
  padding-left: 10px;
  text-transform: uppercase; }

.paragraph-title {
  margin-bottom: 0px; }</pre>
  </li>

  <li><p><strong>Links</strong></p>
    <pre class="xmsg-code">a {
  color: #2BABE2;
  text-decoration: underline; <span class="xmsg-note">&lt;!-- This is important to us for usability --&gt;</span>

  &amp;:visited { 
    color: darken(#2BABE2, 10%); } <span class="xmsg-note">&lt;!-- #1A8EC0 --&gt;</span>
  
  &amp;:hover { 
    color: darken(#2BABE2, 20%); } <span class="xmsg-note">&lt;!-- #146D93 --&gt;</span>
}</pre>
  </li>

  <li><p><strong>Forms</strong></p>
    <p>
      After setting up some forms on the site, we found out that the form styles were all broken.
      You can find our styles in our <a href="">style sheet</a> or below:
    </p>
    <pre class="xmsg-code"></pre>
  </li>

  <li><p><strong>Tables</strong></p>

  </li>

  <li><p><strong>Lists</strong></p>
    <p>
      Definition Lists: <br />
      Ordered/Unordered Lists: 
  </li>

  <li><p><strong>Images</strong></p>

  </li>

  <li><p><strong>Selection</strong></p>

  </li>
</ul>




<div class="clear"> </div>

</div><!-- content -->

<? include_once("inc/footer.php"); ?>

</body>

</html>