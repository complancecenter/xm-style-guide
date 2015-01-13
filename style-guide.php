<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ICC Website Style Guide</title>
	<!-- CALL STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CALL CUSTOM TYPOGRAPHY -->
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6579332/617026/css/fonts.css" />
	<!-- CALL FONTAWESOME -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<? include_once("inc/top-bar.php"); ?>
	

	<div class="content">
		<!-- SECTION 1: Images -->
		
		<h2 class="section-title">Photographs</h2>
		
    <p>
		  <img src="img/3000x1750.gif" alt="A photograph too large for the space its given" />
    </p>

    <p class="right">
    <div class="photo-caption">
      <img src="img/300x175.gif" alt="A photograph too large for the space its given" />
      <p class="caption">Photographic Caption</p>
    </div>
    </p>


		<!-- SECTION 2: Elements -->

		<h2 class="section-title">Elements</h2>
		
		<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

		<!-- SECTION 3: Headings -->

		<h2 class="section-title">Headings</h2>

		<h1>Heading 1</h1>

		<h2>Heading 2</h2>

		<h3>Heading 3</h3>

		<h4>Heading 4</h4>

		<h5>Heading 5</h5>

		<h6>Heading 6</h6>

		<!-- SECTION 4: Paragraphs -->

		<h2 class="section-title">Paragraphs</h2>

		<p>
			Lorem ipsum dolor sit amet, <a href="#" title="Test Link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.
		</p>

		<p>
			Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.
		</p>

		<!-- SECTION 5: Links -->

		<h2 class="section-title">Links</h2>

		<p>
			Here are a few well known links: <a href="http://google.com" title="Google">Google</a>, <a href="http://amazon.com" title="Amazon Marketplace">Amazon</a>, and <a href="http://wordpress.com">WordPress</a>.
		</p>

		<!-- SECTION 6: Forms -->

		<h2 class="section-title">Forms</h2>
		<fieldset>
			<legend>Legend</legend>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.
			</p>
			<form>
				<h3>Form Elements</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.
				</p>

				<p>
					<label for="text-field">Text Field</label>
					<input type="text" id="text-field" class="width50" />
				</p>

        <p>
          <label for="color-picker">Color Picker</label>
          <input type="color" id="color-picker" class="width50" />
        </p>

        <p>
          <label for="date-picker">Date Picker</label>
          <input type="date" id="date-picker" class="width50" />
        </p>

        <p>
          <label for="datetime">Enter Date &amp; Time</label>
          <input type="datetime" id="datetime" class="width50" />
        </p>

        <p>
          <label for="datetime-local">Enter Local Date &amp; Time</label>
          <input type="datetime-local" id="datetime-local" class="width50" />
        </p>

        <p>
          <label for="email">Enter Email</label>
          <input type="email" id="email" class="width50" />
        </p>

        <p>
          <label for="month">Enter Month</label>
          <input type="month" id="month" class="width50" />
        </p>

        <p>
          <label for="number">Enter Number</label>
          <input type="number" id="number" class="width50" />
        </p>

        <p>
          <label for="range">Enter Range</label>
          <input type="range" id="range" class="width50" />
        </p>

        <p>
          <label for="search">Search Here</label>
          <input type="search" id="search" class="width50" />
        </p>

        <p>
          <label for="tel">Enter Telephone</label>
          <input type="tel" id="tel" class="width50" />
        </p>

        <p>
          <label for="time">Enter Time</label>
          <input type="time" id="time" class="width50" />
        </p>

        <p>
          <label for="url">Enter URL</label>
          <input type="url" id="url" class="width50" />
        </p>

        <p>
          <label for="week">Enter Week</label>
          <input type="week" id="week" class="width50" />
        </p>

				<p>
					<label for="text-area">Text Area</label>
					<textarea id="text-area" class="width100" ></textarea>
				</p>

				<p>
					<label for="select-element">Select Element</label>
					<select name="select-element">
						<optgroup label="Option Group 1">
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</optgroup>
						<optgroup label="Option Group 2">
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</optgroup>
					</select>
				</p>

				<p>
					<label for="radio-buttons">Radio Buttons</label>
					<input type="radio" class="radio" name="radio-button" value="radio_1"> Radio 1<br />
					<input type="radio" class="radio" name="radio-button" value="radio_2"> Radio 2<br />
					<input type="radio" class="radio" name="radio-button" value="radio_3"> Radio 3
				</p>

				<p>
					<label for="checkboxes">Checkboxes:</label>
					<input type="checkbox" class="checkbox" name="checkboxes" value="check_1">Checkbox 1<br />
					<input type="checkbox" class="checkbox" name="checkboxes" value="check_2">Checkbox 2<br />
					<input type="checkbox" class="checkbox" name="checkboxes" value="check_3">Checkbox 3
				</p>

				<p>
					<label for="password">Password:</label>
					<input type="password" class="password width50" name="password">
				</p>

				<p>
					<label for="file">File Input:</label>
					<input type="file" class="file" name="file">
				</p>

				<p>
					<input class="button" type="reset" value="Clear">
					<input class="button" type="submit" value="Submit">
				</p>
			</form>
		</fieldset>

		<!-- SECTION 7: Tables -->

		<h2 class="section-title">Tables</h2>

		<table cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th>Table Header 1</th>
					<th>Table Header 2</th>
					<th>Table Header 3</th>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
			</tbody>
		</table>

		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		
		<h3>ColorWorks C3500</h3>

		<h6 class="table-title">Printer Specifications</h6>
		<table>
			<tbody>
				<tr>
					<th width="150">Print Method</th>
					<td>MicroPiezo® inkjet technology, Automatic Nozzle Checking</td>
				</tr>
				<tr>
					<th>Ink Type</th>
					<td>Pigmented ink, individual CMYK cartridges</td>
				</tr>
				<tr>
					<th class="top">Print Resolution</th>
					<td>
						360 dpi x 360 dpi <em>— Speed Mode</em><br />
						720 dpi x 360 dpi <em>— Quality Mode</em>
					</td>
				</tr>
				<tr>
					<th class="top">Max Print Speed</th>
					<td>
						360 dpi x 360 dpi <em>— Banding Reduction disabled</em><br />
						4.0”/sec. (2.2” print width)<br />
						3.4”/sec. (4.1” print width)<br />
						<hr />
						360 dpi x 360 dpi <em>— Banding Reduction enabled</em><br />
						3.7”/sec. (2.2” print width)<br />
						3.1”/sec. (4.1” print width)<br />
						<hr />
						720 dpi x 360 dpi <em>— Banding Reduction enabled</em><br />
						2.0”/sec. (2.2” print width)<br />
						1.7”/sec. (4.1” print width)
					</td>
				</tr>
				<tr>
					<th>Print width</th>
					<td>4.1” (104mm) max.</td>
				</tr>
				<tr>
					<th class="top">Media types</th>
					<td>Roll-fed or fanfold; die cut or continuous; single layer or adhesive labels on liner; plain paper, fine paper, PET film, synthetic</td>
				</tr>
			</tbody>
		</table>

		<h6 class="table-title">Media Specifications</h6>
		<table>
			<tbody>
				<tr>
					<th width="150">Width</th>
					<td>
						1.2”–4.25” (30–108mm) <em>— roll feed</em>
						2.0”–4.25” (50-108mm) <em>— fanfold</em>
					</td>
				</tr>
				<tr>
					<th>Thickness</th>
					<td>4.7–7.5mils (0.12–0.19mm)</td>
				</tr>
				<tr>
					<th>Roll size</th>
					<td>
						O.D. 4.0” (102mm) max.
						Core diameter 1.75” (44mm) to 2.25” (57mm)
					</td>
				</tr>
				<tr>
					<th>Media sensors</th>
					<td>Gap, black mark, media cut</td>
				</tr>
				<tr>
					<th>Die-cut label gap</th>
					<td>Min. 0.12” (3.0mm)</td>
				</tr>
				<tr>
					<th>Black mark size</th>
					<td>Min. 0.20 x 0.16” (5.0 x 4.0mm) (W x H)</td>
				</tr>
			</tbody>
		</table>

		<h6 class="table-title">Accessories</h6>
		<table>
			<tbody>
				<tr>
					<th width="150">Ink</th>
					<td>Cyan, Magenta, Yellow, Black, &amp; Maintenance Box</td>
				</tr>
				<tr>
					<th class="top">Labels</th>
					<td>
						Synthetic 4 x 6” 200/roll, 1” core<br />
						Synthetic 4 x 2” 500/roll, 1” core<br />
						Synthetic 4” x 100’, 1” core<br />
						Inkjet Polypro, Cont. 1 x 4” Across x 100’<br />
						Inkjet Polypro, Cont. 2 x 2” Across x 100’
					</td>
				</tr>
				<tr>
					<th class="top">Attachments</th>
					<td>
						Label unwinder with 3” core holder<br />
						Label rewinder with 3” core holder
					</td>
				</tr>
			</tbody>
		</table>

		<h6 class="table-title">Warranties</h6>
		<table>
			<tbody>
				<tr>
					<th width="150">Spare-in-the-Air</th>
					<td>Fast, overnight replacement units for your Epson POS products</td>
				</tr>
				<tr>
					<th>Extended Care</th>
					<td>Extends Epson’s industry-leading standard warranty coverage</td>
				</tr>
			</tbody>
		</table>

				

		<!-- SECTION : Miscellaneous -->

		<h2 class="section-title">Miscellaneous</h2>

		<p>
			Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr>
		</p>

		<pre>
Lorem ipsum dolor sit amet,
 consectetuer adipiscing elit.
 Nullam dignissim convallis est.
 Quisque aliquam. Donec faucibus. 
Nunc iaculis suscipit dui. 
Nam sit amet sem. 
Aliquam libero nisi, imperdiet at,
 tincidunt nec, gravida vehicula,
 nisl. 
Praesent mattis, massa quis 
luctus fermentum, turpis mi 
volutpat justo, eu volutpat 
enim diam eget metus. 
Maecenas ornare tortor. 
Donec sed tellus eget sapien
 fringilla nonummy. 
<acronym title="National Basketball Association">NBA</acronym> 
Mauris a ante. Suspendisse
 quam sem, consequat at, 
commodo vitae, feugiat in, 
nunc. Morbi imperdiet augue
 quis tellus.  
<abbr title="Avenue">AVE</abbr>
		</pre>

		<blockquote>
			“This stylesheet is going to help so freaking much.” <br>-Blockquote
		</blockquote>

		<!-- SECTION : List Types -->

		<h2 class="section-title">List Types</h2>

		<h3>Definition List</h3>

		<dl>
			<dt>Definition List Title</dt>
			<dd>This Part is a Definition list Definition</dd>
		</dl>

		<h3>Ordered List</h3>
		
    <p class="list-title">No List Style</p>
		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ol>

    <p class="list-title">List Style <code>decimal</code></p>
    <ol class="decimal">
      <li>List Item 1</li>
      <li>List Item 2</li>
      <li>List Item 3</li>
    </ol>

		<h3>Unordered List</h3>
		
		<p class="list-title">No List Style</p>
		<ul>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>

		<p class="list-title">List Style <code>disc</code></p>
		<ul class="disc">
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>


		<h3>Nested Lists Inside Ordered List</h3>

		<ol class="decimal">
			<li>
				Ordered List Item 1
				<ul class="disc">
					<li>Level 2: Unordered List Item 1</li>
				</ul>
			</li>
			<li>
				Ordered List Item 2
				<ul class="disc">
					<li>Level 2: Unordered List Item 1</li>
					<li>Level 2: Unordered List Item 2</li>
					<li>Level 2: Unordered List Item 3</li>
					<li>Level 2: Unordered List Item 4</li>
					<li>Level 2: Unordered List Item 5</li>
					<li>Level 2: Unordered List Item 6</li>
				</ul>
			</li>
			<li>
				Ordered List Item 3
				<dl>
					<dt>Level 2: Definition List Title 1</dt>
					<dd>Level 2: This Part is a Definition list Definition 1</dd>
					<dt>Level 2: Definition List Title 2</dt>
					<dd>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</dd>
					<dt>Level 2: Definition List Title 3</dt>
					<dd>Level 2: This Part is a Definition list Definition 3</dd>
				</dl>
			</li>
			<li>
				Ordered List Item 4
				<ol class="decimal">
					<li>Level 2: Ordered List Item 1</li>
				</ol>
			</li>
			<li>
				Ordered List Item 5
				<ol class="decimal">
					<li>Level 2: Ordered List Item 1</li>
					<li>
						Level 2: Ordered List Item 2
						<ul class="disc">
							<li>Level 3: Unordered List Item 1</li>
							<li>Level 3: Unordered List Item 1</li>
							<li>Level 3: Unordered List Item 1</li>
						</ul>
					</li>
					<li>Level 2: Ordered List Item 3</li>
					<li>Level 2: Ordered List Item 4</li>
					<li>Level 2: Ordered List Item 5</li>
					<li>Level 2: Ordered List Item 6</li>
				</ol>
			</li>
		</ol>

			<h3>Nested Lists Inside Unordered List</h3>

		<ul class="disc">
			<li>
				Unordered List Item 1
				<ul class="disc">
					<li>Level 2: Unordered List Item 1</li>
				</ul>
			</li>
			<li>
				Unordered List Item 2
				<ul class="disc">
					<li>Level 2: Unordered List Item 1</li>
					<li>Level 2: Unordered List Item 2</li>
					<li>Level 2: Unordered List Item 3</li>
					<li>Level 2: Unordered List Item 4</li>
					<li>Level 2: Unordered List Item 5</li>
					<li>Level 2: Unordered List Item 6</li>
				</ul>
			</li>
			<li>
				Unordered List Item 3
				<dl>
					<dt>Level 2: Definition List Title 1</dt>
					<dd>Level 2: This Part is a Definition list Definition 1</dd>
					<dt>Level 2: Definition List Title 2</dt>
					<dd>Level 2: This Part is a Definition list Definition 2</dd>
					<dt>Level 2: Definition List Title 3</dt>
					<dd>Level 2: This Part is a Definition list Definition 3</dd>
				</dl>
			</li>
			<li>
				Unordered List Item 4
				<ol class="decimal">
					<li>Level 2: Ordered List Item 1</li>
				</ol>
			</li>
			<li>
				Unordered List Item 5
				<ol class="decimal">
					<li>Level 2: Ordered List Item 1</li>
					<li>
						Level 2: Ordered List Item 2
						<ul class="disc">
							<li>Level 3: Unordered List Item 1</li>
							<li>Level 3: Unordered List Item 1</li>
							<li>Level 3: Unordered List Item 1</li>
						</ul>
					</li>
					<li>Level 2: Ordered List Item 3</li>
					<li>Level 2: Ordered List Item 4</li>
					<li>Level 2: Ordered List Item 5</li>
					<li>Level 2: Ordered List Item 6</li>
				</ol>
			</li>
		</ul>
	</div>

</body>

</html>