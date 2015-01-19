<? $active = "home"; ?>
<? $page = "home"; ?>
<? include_once("inc/header.php"); ?>


<h1>Theme Modification Documentation</h1>

<h2 class="section-title">Introduction <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p>
  This document was made to serve as a guide to the theme modifications for the ICC stores, 
  the goal for us is to do this once and then have it be the same for all stores, so this will be the only time we have to do this.
  The first sections are general global template styles that apply to all pages, then at the bottom I will include each of the other pages I did with some notes.
  They were all done with what I could see on <a href="https://icccad.accpacwebstore.com/">our current site site</a>, so I am sure that they are missing a few things like related products
  <em>(which can be styled the same as 'People who bought this also bought' products)</em> But! If I missed a section or other content please let me know and I will
  whip up some styles for it real quick for you. Same goes if you have questions or are confused about anything, shoot me <em>(Eric Frisino)</em> a quick email.
</p>
<p>
 We are good with all the js animations and fading etc. however i did not build any of that into the template site, this site is for display, looks only.
<p>
  <strong>Along with this page, I have included a few others for you to reference:</strong><br />
  <em style="color:#AAA;">
    You can access the page by clicking the link below or up in the left hand corner under "Pages"<br />
  </em>
</p>
<table>
  <tr>
    <th>Link</th>
    <th>Description</th>
    <th style="text-align:center;">Notes</th>
    <th style="text-align:center;">Image</th>
    <th style="text-align:center;">Source</th>
  </tr>
  <tr>
    <td><a href="#">This Page</a></td>
    <td>An informational page about the theme modifications.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="shots/"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href=""><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="style-guide.php">Style guide</a></td>
    <td>A page that has all generic HTML styles.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="shots/style-guide.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/style-guide.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="product-category-parent.php">Product Category Parent Grid</a></td>
    <td>Styling modifications for the grid view of a parent product category.</td>
    <td style="text-align:center;"><a href="#product-category-parent"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/product-category-parent.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-category-parent.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="product-category-parent-rows.php">Product Category Parent Row</a></td>
    <td>Styling modifications for the row view of a parent product category.</td>
    <td style="text-align:center;"><a href="#product-category-parent-rows"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/product-category-parent-rows.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-category-parent-rows.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="product-packaging-bags.php">Product Category Grid</a></td>
    <td>Styling modifications for the grid view of a product category.</td>
    <td style="text-align:center;"><a href="#product-packaging-bags"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/product-packaging-bags.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-packaging-bags.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="product-packaging-bags-rows.php">Product Category Row</a></td>
    <td>Styling modifications for the row view of a product category.</td>
    <td style="text-align:center;"><a href="#product-packaging-bags-rows"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/product-packaging-bags-rows.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-packaging-bags-rows.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="product-single.php">Single Product</a></td>
    <td>Styling modifications for a single product.</td>
    <td style="text-align:center;"><a href="#product-single"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/product-single.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-single.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="form-general-request.php">Forms</a></td>
    <td>Styling modifications for forms.</td>
    <td style="text-align:center;"><a href="#form-general-request"><i class="fa fa-pencil"></i></a></td>
    <td style="text-align:center;"><a href="shots/form-general-request.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/form-general-request.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <th colspan="5" style="text-align:center; color:#999; background-color:#FFF; height:30px; vertical-align:bottom; border-bottom:1px solid #EEE; ">Pages that are not necessary for theme modification but may be nice to have for reference</th>
  </tr>
  <tr>
    <td><a href="labeling-software.php">Labeling Software</a></td>
    <td>A completed page for our Labeling Software Service.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="shots/labeling-software.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/labeling-software.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="chemplianceweb.php">ChemplianceWeb</a></td>
    <td>A completed page for our ChemplianceWeb Software.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="shots/chemplianceweb.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/chemplianceweb.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td><a href="packaging-documentation.php">Packaging Documentation</a></td>
    <td>Completed page for customer facing downloads on a specific topic.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="shots/packaging-documentation.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/packaging-documentation.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <th colspan="5" style="text-align:center; color:#999; background-color:#FFF; height:30px; vertical-align:bottom; border-bottom:1px solid #EEE; ">Other source files</th>
  </tr>
  <tr>
    <td>LESS Stylesheet</td>
    <td>Working LESS Stylesheet.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.less"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td>CSS Stylesheet</td>
    <td>Compiled CSS Stylesheet.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.css"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td>Header</td>
    <td>File included in all pages, calls <code>small-nav.php</code> or <code>nav-full.php</code>.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/inc/header.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td>Small Navigation</td>
    <td>Contains a small navigation bar that only highlights the current pages parent.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/inc/small-nav.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td>Full Navigation</td>
    <td>Contains a full navigation list for your reference. <em>Only displays on this page.</em></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/inc/nav-full.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
  <tr>
    <td>Footer</td>
    <td>Contains the whole footer and is included on every page.</td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><i class="fa fa-meh-o" style="color:#DDD;"></i></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/inc/footer.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<h2 class="section-title">Custom Typography <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<ul class="circle">
  <li><p><strong>Place the following lines of code in the <code>&lt;head&gt; &lt;/head&gt;</code> section of our theme:</strong></p>
<pre class="xmsg-code">&lt;link rel="stylesheet" type="text/css" href="//cloud.typography.com/6579332/617026/css/fonts.css" /&gt;
&lt;link rel="stylesheet" type="text/css" href="http://icc.pub/cms/resources/xm-custom-typography.css" /&gt;
&lt;link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"&gt;</pre>
    <p>This will enable all of our custom typography to be used across the website.</p>
  </li>
  <li><p><strong>ICC's Corporate Typography:</strong></p>
    <p>I see that you pre-compile your styles, you can put the following styles in your style sheet as well, so that you can reference them throughout the style sheet.</p>
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

<h2 class="section-title">Global Styles <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>

<p>
  We made a few changes to the global styles so that it would be more usable and hierarchically correct, as well as conforming to our brand and looking nice.
  I encourage you to <a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.less">check out the style sheet</a> 
  for all the changes, but I'll list the big ones here. While making these changes, 
  I tried to stick as much to your pre-existing style names as I could, but after a while the pages just got too complicated, so I just created the same layouts
  with many less divs, named intuitively to what the data it was containing was, so it should be easy to match up to your pre-existing styles.
</p>

<p>
  You can check out what all these styles look like over on the <a href="style-gude.php">Style Guide Page</a>. 
  The <a href="style-gude.php">Style Guide Page</a> has all of the elements listed below on it. For you to check out.

<p>
  Below I have <span class="highlight">highlighted</span> the places where our fonts are subbed out for specific styles
</p>

<ul class="circle">
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
    <p>It is <strong>very important</strong> that the sizes of the headings are adjusted so that they can be hierarchically correct in the page flow.</p>
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


<h2 class="section-title">Header &amp; Navigation Styles <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>

<ul class="circle">
  <li><p><strong>Header</strong></p>
    <p>
      In the header itself the only thing that really changed was the fonts.. everything else was solid. 
      To save time, I didn't actually put in a search box in the header, just styled it like we want it styled, with the font etc.
      I also didn't style the drop-down for the add to cart thing, but i did change the icon to a fontawesome icon.
      The drop-down should just be switched over to the <span class="highlight">.gotham-narrow-light;</span> font.
    </p>

    <p>
      I would like to change the Cart icon to FontAweseome's <code>&lt;i class="fa fa-shopping-cart"&gt;&lt;/i&gt;</code><br />
      and the home icon in the navigation to FontAwesome's <code>&lt;i class="fa fa-home"&gt;&lt;/i&gt;</code>
    </p>
    <pre class="xmsg-code">.welcome-notice {
  padding: 10px 0;
  font-size: .8em;
  <span class="highlight">.gotham-medium;</span>

  .welcome {
    display: inline-block;
    padding-right: 20px; }
}

.branding {
  .col3-1 {
    width: 33.33%;
    float: left;
    padding: 20px 0;
    display: table-cell; }

  .form-search {
    margin-top: 10px; 
    border: 1px solid #BBB;
    padding: 10px;
    color: #AAA; }

  .cart a {
    color: #000;
    text-decoration: none;

    &amp;:visited { 
      color: #000; }
    
    &amp;:hover { 
      color: darken(#2BABE2, 10%); }
  }// .cart a
}// .branding</pre></li>
  
  <li><p><strong>Navigation</strong></p>
    <p>
      This changed quite a bit, I was told on a few occasions that we could change how the nav drop-down looked but we were never told how we could do it.
      So I have included what we want it to look like in this mock-up if you go to the top and hover over "<span class="archer-bold">PRODUCTS</span>" 
      you will be able to see it live so you can inspect it, but can also
      <a href="https://github.com/complancecenter/xm-style-guide/blob/master/style.less" target="_blank">check it out on github</a>. 
    </p>

    <p>
      I would like to change the Cart icon to FontAweseome's <code>&lt;i class="fa fa-shopping-cart"&gt;&lt;/i&gt;</code><br />
      and the home icon in the navigation to FontAwesome's <code>&lt;i class="fa fa-home"&gt;&lt;/i&gt;</code>
    </p>

    <p>
      <strong>Note 1:</strong> <em>The class names are not even close to what you have setup, in your theme so I wont display it below. 
      I believe it would be less confusing to inspect the different sections. </em> 
    </p>

    <p>
      <strong>Note 2:</strong> <em>When the list items are highlighted blue, I would like them the text to stay white the entire time.
      But I believe that I styled the list wrong to be able to make that happen.</em> 
    </p>

    <p>
      <strong>Note 3:</strong> <em>If a parent page of the current page is displayed in the nav bar it should be highlighted, 
      dark grey with white type but still highlight blue when rolled over. You can see how this should be implemented on almost all the pages.</em> 
    </p>
</ul>


<h2 class="section-title">Footer Styles <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>

<p>
  For the footer the only big changes are the headers, and the social media icons. Scroll down to the bottom and hover over each one, 
  I'v set them so that they will light up the primary brand color of each company.
</p>

<p class="list-title">A couple of the other notable changes are:</p>
<ul class="circle">
  <li>All the copy is set to .9em</li>
  <li>Social Media Icons are using FontAwesome</li>
</ul>

<pre class="xmgs-code">footer {
  padding-top: 50px;

  input[type="text"],
  input[type="email"] {
    width: 253px; }

  .grid12-3 {
    width: 23%;
    margin: 0 1%;
    float: left; }

  h6.section-title {
    margin: 0 0 10px 0;
    padding: 0; }

  a {
    <span class="highlight">.gotham-narrow-medium;</span>
    color: #666 !important;
    text-decoration: none;
    font-size: .9em;
    display: inline-block;
    padding: 10px 10px 7px 10px;
    margin-bottom: 10px;

    &amp;:hover {
      background-color: #2BABE2;
      color: #FFF !important; }
  }// a

  .main-footer {
    background-color: rgb( 248, 248, 248);
    padding: 50px 0 ; }

  .main-footer-content {
    background-color: #FFF;
    padding: 20px;

    a {
      <span class="highlight">.gotham-narrow-medium;</span>
      color: #666 !important;
      text-decoration: none;
      font-size: .9em;
      display: inline-block;
      padding: 0;
      margin-bottom: 0;

      &amp;:hover {
        background-color: #FFF;
        color: #2BABE2 !important; }
    }// a
  }// .main-footer-content

  .about {
    a {
      color: #2BABE2 !important;
      <span class="highlight">.gotham-narrow-light;</span>
      text-decoration: underline;
      font-size: 1em;

      &amp;:visited { 
        color: darken(#2BABE2, 10%) !important; }
      
      &amp;:hover { 
        color: darken(#2BABE2, 20%) !important; }
    }// a
  }// .about

  .copywrite-notice {
    background-color: #EEE;
    padding: 20px 0;

    p { 
      font-size: .9em;
      color: #AAA;
      margin: 0; }
  }// .copywrite-notice



  ul.social-media-boxes {
    margin: 20px 0 0 0;

    li {
      display: inline-block;
      margin-bottom: 0px;
      margin-right: 10px; }

    a {
      display: table-cell;
      font-size: 1.4em;
      text-align: center;
      height: 40px;
      width: 40px;
      vertical-align: middle;
      background-color: #CCC;
      color: #FFF !important;

      &amp;:hover {
        color: #FFF !important; }

      &amp;.linkedin:hover  { background-color: #007bb6 !important; }
      &amp;.facebook:hover  { background-color: #3b5998 !important; }
      &amp;.twitter:hover   { background-color: #55ACEE !important; }
      &amp;.gplus:hover     { background-color: #DD4B39 !important; }
      &amp;.youtube:hover   { background-color: #CD201F !important; }
    }// a
  }// ul.social-media-boxes
}// footer</pre>


<a name="product-category-parent"></a>
<h2 class="section-title">Product Category Parent Grid  <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>I made a couple changes to the View As: icons to make them less obtrusive<!-- , you can find them here:<br />
      <a href="img/grid.gif">img/grid.gif</a> &amp; <a href="img/grid-off.gif">img/grid-off.gif</a><br />
      <a href="img/row.gif">img/row.gif</a> &amp; <a href="img/row-off.gif">img/row-off.gif</a> -->However, you can use the icons you already have for these.
  </li>
  <li>Removed styling from drop-downs (this should be done site-wide).</li>
  <li>Set all the text in the category description to <code>.9em</code> the size it normally is.</li>
  <li>Changed the way the categories on the left highlight and the colors.</li>
  <li>The paged styles that show on this page should be applied across the entire site.</li>
  <li>tweaked most of the styles to fit better with our brand.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="product-category-parent.php">Product Category Parent Grid</a></td>
    <td>Styling modifications for the grid view of a parent product category.</td>
    <td style="text-align:center;"><a href="shots/product-category-parent.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-category-parent.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<a name="product-category-parent-rows"></a>
<h2 class="section-title">Product Category Parent Rows <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>I made a couple changes to the View As: icons to make them less obtrusive<!-- , you can find them here:<br />
      <a href="img/grid.gif">img/grid.gif</a> &amp; <a href="img/grid-off.gif">img/grid-off.gif</a><br />
      <a href="img/row.gif">img/row.gif</a> &amp; <a href="img/row-off.gif">img/row-off.gif</a> -->However, you can use the icons you already have for these.
  </li>
  <li>I made the images 1-fifth the width of the column because the existing image size is far to large for people with small or low res monitors.</li>
  <li>The layout of the columns is as follows:<br />
      1-fifth for the product image<br />
      3-fifths for the product name and sub-info<br />
      1-fifth for the product price and add to cart button.<br />
  </li>
  <li>Removed styling from drop-downs (this should be done site-wide).</li>
  <li>Set all the text in the category description to <code>.9em</code> the size it normally is.</li>
  <li>Changed the way the categories on the left highlight and the colors.</li>
  <li>The paged styles that show on this page should be applied across the entire site.</li>
  <li>tweaked most of the styles to fit better with our brand.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="product-category-parent-rows.php">Product Category Parent Row</a></td>
    <td>Styling modifications for the row view of a parent product category.</td>
    <td style="text-align:center;"><a href="shots/product-category-parent-rows.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-category-parent-rows.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<a name="product-packaging-bags"></a>
<h2 class="section-title">Product Category Grid <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>I made a couple changes to the View As: icons to make them less obtrusive<!-- , you can find them here:<br />
      <a href="img/grid.gif">img/grid.gif</a> &amp; <a href="img/grid-off.gif">img/grid-off.gif</a><br />
      <a href="img/row.gif">img/row.gif</a> &amp; <a href="img/row-off.gif">img/row-off.gif</a> -->However, you can use the icons you already have for these.
  </li>
  <li>Removed styling from drop-downs (this should be done site-wide).</li>
  <li>Set all the text in the category description to <code>.9em</code> the size it normally is.</li>
  <li>tweaked most of the styles to fit better with our brand.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="product-packaging-bags.php">Product Category Grid</a></td>
    <td>Styling modifications for the grid view of a product category.</td>
    <td style="text-align:center;"><a href="shots/product-packaging-bags.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-packaging-bags.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<a name="product-packaging-bags-rows"></a>
<h2 class="section-title">Product Category Rows <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>I made a couple changes to the View As: icons to make them less obtrusive<!-- , you can find them here:<br />
      <a href="img/grid.gif">img/grid.gif</a> &amp; <a href="img/grid-off.gif">img/grid-off.gif</a><br />
      <a href="img/row.gif">img/row.gif</a> &amp; <a href="img/row-off.gif">img/row-off.gif</a> -->However, you can use the icons you already have for these.
  </li>
  <li>I made the images 1-fifth the width of the column because the existing image size is far to large for people with small or low res monitors.</li>
  <li>The layout of the columns is as follows:<br />
      1-fifth for the product image<br />
      3-fifths for the product name and sub-info<br />
      1-fifth for the product price and add to cart button.<br />
  </li>
  <li>Removed styling from drop-downs (this should be done site-wide).</li>
  <li>Set all the text in the category description to <code>.9em</code> the size it normally is.</li>
  <li>tweaked most of the styles to fit better with our brand.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="product-packaging-bags-rows.php">Product Category Row</a></td>
    <td>Styling modifications for the row view of a product category.</td>
    <td style="text-align:center;"><a href="shots/product-packaging-bags-rows.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-packaging-bags-rows.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<a name="product-single"></a>
<h2 class="section-title">Single Product <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>I could only style what I could see on our install on your servers and they didn't have any of the up-sells 
    or related products on them so I styled the "you may also be interested in..." section,
    the styles for this section can be taken and used in the other sections wherever they show up.
  </li>
  <li>Most of the global styles that were set up worked well here but there was still some need to tweak styles to fit better with our brand.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="product-single.php">Single Product</a></td>
    <td>Styling modifications for a single product.</td>
    <td style="text-align:center;"><a href="shots/product-single.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/product-single.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>

<a name="form-general-request"></a>
<h2 class="section-title">Forms <span style="float:right;"><a href="#top"><i class="fa fa-chevron-up"></i></a></span></h2>
<p class="list-title">Some Notes on this layout:</p>
<ul class="disc">
  <li>There were no styles/the styles that did exist were all broken when we set up test forms on our install on your servers, so I built out styles in the global styles, but you can see them in this page.</li>
</ul>
<table>
  <tr>
    <th style="width:320px;">Link</th>
    <th>Description</th>
    <th style="text-align:center; width:75px;">Image</th>
    <th style="text-align:center; width:75px;">Source</th>
  </tr>
  <tr>
    <td><a href="form-general-request.php">Forms</a></td>
    <td>Styling modifications for forms.</td>
    <td style="text-align:center;"><a href="shots/form-general-request.png"><i class="fa fa-file-image-o"></i></a></td>
    <td style="text-align:center;"><a href="https://github.com/complancecenter/xm-style-guide/blob/master/form-general-request.php"><i class="fa fa-github-alt"></i></a></td>
  </tr>
</table>




  
  
  
  


<div class="clear"> </div>

</div><!-- content -->

<? include_once("inc/footer.php"); ?>

</body>

</html>