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
  I encourage you to <a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.less">check out the style sheet</a> for all the changes, but I'll list the big ones here. While making these changes, 
  I tried to stick as much to your pre-existing style names as I could, but after a while the pages just got too complicated, so I just created the same layouts
  with many less divs, named intuitively to what the data it was containing was, so it should be easy to match up to your pre-existing styles.
</p>

<p>
  You can check out what all these styles look like over on the <a href="style-gude.php">Style Guide Page</a>. 
  The <a href="style-gude.php">Style Guide Page</a> has all of the elements listed below on it. For you to check out.

<p>
  Below I have <span class="highlight">highlighted</span> the places where our fonts are subbed out for specific styles
</p>

<ul class="disc">
  <li><p><strong>Body</strong></p>
    <pre class="xmsg-code">body {
  <span class="highlight">.gotham-narrow-light;</span> <span class="xmsg-note">&lt;!-- This is the default font for all copy on the site --&gt;</span>
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
  <span class="highlight">.archer-bold;</span> <span class="xmsg-note">&lt;!-- This is the default font for all headings on the site --&gt;</span>
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
  color: #2BABE2;<span class="xmsg-note">&lt;!-- ICC Brand Blue --&gt;</span>
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
      You can find our styles in our <a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.less">style sheet</a> or below:
    </p>
    <pre class="xmsg-code">fieldset { 
  border : 1px solid #DDD;
  margin: 0px;
  padding-left: 1%;
  padding-right: 1%;
  padding-top: 10px;
  padding-bottom: 10px; }

legend {
  <span class="highlight">.gotham-narrow-light-italic;</span>
  padding: 0 10px;
  color: #999; }

label {
  display: block; }

input[type="text"],
input[type="password"],
input[type="email"] {
  padding-left: .5%;
  padding-right: .5%;
  padding-top: 6px;
  padding-bottom: 6px;
  <span class="highlight">.gotham-narrow-medium;</span> }

textarea {
  padding-left: .5%;
  padding-right: .5%;
  padding-top: 6px;
  padding-bottom: 6px;
  height: 80px;
  <span class="highlight">.gotham-narrow-medium;</span>
  border-color: #CCC; }

  form { 
    font-size: .9em;
    
    input[type="color"],
    input[type="date"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="email"],
    input[type="month"],
    input[type="number"],
    input[type="range"],
    input[type="search"],
    input[type="tel"],
    input[type="text"],
    input[type="time"],
    input[type="url"],
    input[type="week"] { 
      padding: 5px 5px;
      border: 1px solid #CCC; }

    input[type="search"] {
      -webkit-appearance: none; }

    input[type="submit"],
    input[type="reset"] {
      <span class="highlight">.gotham-narrow-medium;</span>
      border-radius: 0px;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #AAA;
      text-transform: uppercase;
      border: 0px;
      font-size: 1.5em;
      padding: 5px 15px;
      color: #FFF;

      &amp;:hover {
        background-color: #2BABE2;
        color: #FFF;
        cursor: pointer; }
    }// input[type="submit"]
  }// form</pre>
  </li>

  <li><p><strong>Tables</strong></p>
    <pre class="xmsg-code">table {
  border-top: 1px solid #EEE;
  margin: 0 0 1.5em;
  width: 100%;
  font-size: .9em;
  border-collapse: collapse;

  .fa-check {
    color: green; }

  .fa-times {
    color: #DDD; }
}// table

tr:nth-child(even) {
  background-color: #FEFEFE; }
  
th {
  <span class="highlight">.gotham-narrow-medium;</span>
  text-align: left;
  padding: 10px;
  padding-top: 15px;
  background-color: #EEE;
  text-transform: uppercase;
  color: #444;
  line-height: 1em;
  border-bottom: 1px solid #FFF; }

td {
  text-align: left;
  padding: 10px 10px;
  border-bottom: 1px solid #EEE;
  color: #666; }</pre>

  </li>

  <li><p><strong>Lists</strong></p>
    <p>
      Definition Lists:
      <pre class="xmsg-code">dl { }

dt {
  .gotham-narrow-medium;
  float: left;
  clear: left;
  margin-right: 15px; }
  
dd {
  .gotham-narrow-light;
  margin-left: 30px;
  margin-bottom: 10px; }</pre>
      Ordered/Unordered Lists:
      <pre class="xmsg-code">ul, ol {
  margin: 0;
  padding: 0;
  list-style: none; }

li { 
  margin-bottom: 10px; }

ul ol, ul ul, ol ol, ol ul {
  margin-top: 10px; }

ul {
  &amp;.none   { list-style: none;        margin-bottom: 20px; }
  &amp;.disc   { list-style-type: disc;   margin-bottom: 20px; }
  &amp;.square { list-style-type: square; margin-bottom: 20px; }
  &amp;.circle { list-style-type: circle; margin-bottom: 20px; }
}// ul

ol {
  &amp;.armenian              { list-style-type: armenian;              margin-bottom: 20px; }
  &amp;.cjk-ideographic       { list-style-type: cjk-ideographic;       margin-bottom: 20px; }
  &amp;.decimal               { list-style-type: decimal;               margin-bottom: 20px; }
  &amp;.decimal-leading-zero  { list-style-type: decimal-leading-zero;  margin-bottom: 20px; }
  &amp;.georgian              { list-style-type: georgian;              margin-bottom: 20px; }
  &amp;.hebrew                { list-style-type: hebrew;                margin-bottom: 20px; }
  &amp;.hiragana              { list-style-type: hiragana;              margin-bottom: 20px; }
  &amp;.hiragana-iroha        { list-style-type: hiragana-iroha;        margin-bottom: 20px; }
  &amp;.katakana              { list-style-type: katakana;              margin-bottom: 20px; }
  &amp;.katakana-iroha        { list-style-type: katakana-iroha;        margin-bottom: 20px; }
  &amp;.lower-alpha           { list-style-type: lower-alpha;           margin-bottom: 20px; }
  &amp;.lower-greek           { list-style-type: lower-greek;           margin-bottom: 20px; }
  &amp;.lower-latin           { list-style-type: lower-latin;           margin-bottom: 20px; }
  &amp;.lower-roman           { list-style-type: lower-roman;           margin-bottom: 20px; }
  &amp;.upper-alpha           { list-style-type: upper-alpha;           margin-bottom: 20px; }
  &amp;.upper-latin           { list-style-type: upper-latin;           margin-bottom: 20px; }
  &amp;.upper-roman           { list-style-type: upper-roman;           margin-bottom: 20px; }
  &amp;.none                  { list-style: none;                       margin-bottom: 20px; }
}// ol</pre>
  </li>

  <li><p><strong>Images</strong></p>
  <pre class="xmsg-code">img {
  max-width: 100%; }

.photo-caption {
  outline: 1px solid #DDD;
  display: inline-block;
  padding: 3px;
  <span class="highlight">.gotham-narrow-light-italic;</span> }

.caption {
  margin: 0 0 5px 0;
  text-align: center;
  font-size: .8em;
  color: #333;
  <span class="highlight">.gotham-narrow-light-italic;</span> }</pre>
  </li>

  <li><p><strong>Copy</strong></p>
    <p>
      Included in this section are a few styles such as <code>.list-title</code> &amp; <code>.fine-print</code>, if these are redundant for what you have, 
      let me know what the name of the styles are so I can document them for my team and we can use them internally.
    </p>
    <pre class="xmsg-code">strong, .strong { 
  <span class="highlight">.gotham-narrow-medium;</span> }

pre { 
  padding: 10px;
  color: #555;
  background-color: #FAFAFA;
  font-size: .9em; }

code,
kbd,
tt,
var {  }

big,
.big {
  font-size: 1.25em; }

small,
.small { 
  font-size: .8em; }

abbr,
acronym {
  border-bottom: 1px dotted #666;
  cursor: help; }
  
mark,
ins {
  background: #fff9c0;
  text-decoration: none; }
  
sup,
sub {
  font-size: 12px;
  height: 0;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }
  
sup {
  bottom: 1ex; }
  
sub {
  top: .5ex; }

figure {
  margin: 0; }

.list-title {
  <span class="highlight">.gotham-narrow-medium;</span>
  margin-bottom: 0px; }

.fine-print {
  font-size: .8em;
  color: #999; }

.center {       text-align: center; }
.justify {      text-align: justify; }
.right {        text-align: right; }

.float-left {   float: left; }
.float-right {  float: right; }
.clear {        clear: both; }

.top {          vertical-align: top; }
.middle {       vertical-align: middle; }
.bottom {       vertical-align: bottom; }</pre>
  </li>

  <li><p><strong>Selection</strong></p>
    <p>
      We would like to use our brand colors for highlighting text.
    </p>
    <pre class="xmsg-code">::selection {
  background: #2BABE2;
  color:#FFF; }

::-moz-selection {
  background: #2BABE2;
  color: #FFF; }

img::selection {
  background: transparent; }

img::-moz-selection {
  background: transparent; }</pre>
  </li>

  <li><p><strong>Horizontal Rule</strong></p>
    <pre class="xmsg-code">hr {
  height: 1px;
  border: none;
  background-color: #EEE; }</pre>
  </li>
</ul>




<div class="clear"> </div>

</div><!-- content -->

<? include_once("inc/footer.php"); ?>

</body>

</html>