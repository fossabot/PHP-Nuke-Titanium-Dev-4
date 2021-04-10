# The 86it Developers Network
Powered by: PHP-Nuke Titanium Dev 4<br />
Core Engine: PHP-Nuke Evolution Xtremem 2.0.9f<br />

<h2>Server Requirements</h2>

<ul>
	<li>EasyApache 4</li>
	<li>10.2.37-MariaDB (MariaDB Server)</li>
	<li>PHP 7.4.16 (we are working on a version for PHP 8)</li>
	<li>cURL&nbsp;7.75.0</li>
	<li>GD Support</li>
	<li>Client API library version (mysqlnd 7.4.16)</li>
	<li>OpenSSL support</li>
	<li>ZLib Support</li>
	<li>Minimum of 100 MB/s web space</li>
	<li>Minimum of 5 GB/s bandwidth (5 TB/s or unmetered is recommended)</li>
</ul>

<h2>GNU GENERAL PUBLIC LICENSE Version 2, June 1991</h2>

<p>PHP-Nuke Titanium&nbsp;is licensed as free software under the GNU general public license for non-profit use, because there are so many people to include in the license please refer to the licenses.pdf file. Re-selling or direct&nbsp;marketing this software for commercial use is forbidden by the GNU general public license, the result of doing so can lead to legal action been taken against you so please ensure to read and understand the license before using this software for development and personal use.</p>

<p>The skinny on this jargon is to do what you want with the software and always give full credit to the original copyright owners. You can sell a modified version of this software but you must always give credit to the original copyright owners. I suggest you do some research and find out who owns PHP-Nuke. The Original Copyright belonged to&nbsp;Francisco Burzi who added to a version of&nbsp;Thatware and the copyright owner for that software is&nbsp;David Norman. This is Open-Source software and should be treated as such.</p>

<h2>Warranty</h2>

<p>Because PHP-Nuke Titanium is licensed free of charge, there is no warranty for the package, to the extent permitted by applicable law. Except when otherwise stated in writing, The 86it Developers Network provides PHP-Nuke Titanium &quot;as is&quot; without warranty of any kind, either expressed or implied, including, but not limited to, the implied warranties of merchantability and fitness for a particular purpose. The entire risk as to the quality and performance of the package is with you. Should the package prove defective, you assume the cost of all necessary servicing, repair, or correction.</p>

<h2>Changes in the Dev 4 Version</h2>

<ul>

<li>Added <strong>Titanium Facebook SDK v5</strong> You can now add anything you like that is available to Facebook developers</li>
	<li>Facebook Likes for Blogs by <strong>TheGhost</strong></li>
	<li>Facebook Commenting for Blogs by <strong>TheGhost</strong></li>
	<li>Portals now come with a preconfigured facebook app (associated with your web portal)</li>
<li>Added <strong>Auto MimeType</strong> which allows the support of themes that use XHTML or HTML</li>
	<li>Each theme will now automatically switch to the needed mime-type on the Fly! i.e. XHTML or HTML5 (awesome for old themes)</strong></li>
<li>Admin <strong>Portal Menu</strong>&nbsp;updated for <strong><span style="color:#3498db">PHP 7.xx&nbsp;</span></strong>by <strong>TheGhost</strong></li>
	<li><strong>Web_Links</strong> Module re-write by <strong>TheGhost</strong></li>
	<li>Admin <strong>Authors Panel</strong>&nbsp;updated by <strong>TheGhost</strong></li>
	<li>Admin <strong>Blocks Panel</strong>&nbsp;updated by <strong>TheGhost</strong></li>
	<li>Admin <strong>Backup Panel</strong> updated for <strong><span style="color:#3498db">PHP 7.xx</span></strong>&nbsp; by <strong>TheGhost</strong></li>
	<li>Admin <strong>Modules Panel</strong> re-write by <strong>TheGhost</strong></li>
	<li><strong>Blog Module</strong> by <strong>TheGhost - Main Blog Module</strong></li>
	<li><strong>Blog Archive Module</strong>&nbsp;by <strong>TheGhost -  This is where you can access your Blog history</strong></li>
	<li><strong>Blog Submit Module</strong>&nbsp;by <strong>TheGhost - Anyone can submit Blogs to your portal</strong></li>
	<li><strong>Blog Top Module</strong>&nbsp;by <strong>TheGhost - Top 10 list of your Blogs</strong></li>
	<li><strong>Blog Topics Module</strong>&nbsp;by <strong>TheGhost - This will list all the Blog Topics available.</strong></li>
	<li><strong>Network_Advertising Module</strong> by <strong>NukeScripts.Net</strong> This is used for Network advertising</li>
	<li><strong>Loan Module</strong> by <strong>ScottybCoder</strong> -  30-360 Rule Loan Calculator</li>
	<li><strong>Network Bookmarks  Module</strong> (private bookmark vault for users) - Keep your favorite browser links in one place</li>
	<li><strong>Proof_Of_God  Module</strong> by <strong>ScottyBcoder</strong> - Proof of God</li>
	<li>Resolution Checking for Advanced Themes by <strong>TheGhost</strong></li>
	<li>Flykit for designing themes on the Fly (used to edit CSS in realtime) by <strong>TheGhost</strong></li>
	<li>Network Projects (fixed for network use, used to report errors with themes modules or general code bugs) by <strong>NukeScripts.Net</strong></li>
	<li><span style="color:#c0392b"><strong>Fixed</strong></span> BBCode on the main page used an incorrect display path. i.e. root/filename.png it now uses root/modules/Forum/images/smiles/filename.png.</li>
	<li><span style="color:#c0392b"><strong>Fixed</strong></span> Site_Map was using read_article i.e.&nbsp;modules.php?name=Blog&amp;amp;file=read_article&amp;amp;sid=4 which was not displaying the header and footer.</li>
	<li><span style="color:#c0392b"><strong>Fixed</strong></span> Site_Map was using Topics instead of Blog_Topics</li>
	<li><strong><span style="color:#c0392b">Fixed</span></strong> cookieconsent.min.js was opening the learn link in the <strong>_parent</strong> window thus directing the user away from the current page.</li>
	<li><span style="color:#c0392b"><strong>Fixed </strong></span>The printer-friendly icon was not right when you clicked on read more or comments.</li>
	<li><strong><span style="color:#c0392b">Fixed</span></strong> The send to friend icon was not right when you clicked on read more or comments.</li>
	<li><span style="color:#c0392b"><strong>Fixed</strong></span> In the admin area&nbsp;the modules admin block was listing the index.html file as if it were a module.</li>
</ul>

<h2>Local Development</h2>

<p>PHP-Nuke Titanium while advanced can be easily installed using local development servers including MAMP, WAMP, and XAMPP but you can also use IIS or compile your own AMP (Apache, MySQL, PHP) server if you wish to. Please ensure that your local server meets the first 3 server requirements in order to achieve the best possible development results when building your custom add-ons, modules, and mods.</p>

<h2>Installation and Upgrade</h2>

<p>While PHP-Nuke Titanium uses the same core as PHP-Nuke Evolution Xtreme 2.0.9f there have been a lot of updates to it which improve performance and security, please see the following links for installing a fresh copy or upgrading.</p>

<h5>NOTE</h5>

<p><a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=Project&amp;project_id=77" rel="nofollow" target="_tab">Fresh install</a><br />
<a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=Project&amp;project_id=77" rel="nofollow" target="_tab">Upgrade</a></p>

<h2>Security</h2>

<p>Security is the top priority for this CMS, the core of PHP-Nuke Titanium uses a comprehensive integrated module called Nuke Sentinel™. Nuke Sentinel™ protects your website against DDOS, CLIKE, Union, and many more attacks, Nuke Sentinel™ is so advanced you don&#39;t even have to worry about protecting your admin panel as it watches for failed logins and can ban anonymous users automatically from your website.</p>

<p>Hopefully, you will never have to visit the admin panel for Nuke Sentinel™ as 99% of all web hosts now have DDOS protection and many more security features which prevent attacks and such.</p>

<h2>Help</h2>

<p>If you are having issues with your PHP-Nuke Titanium installation please do not hesitate to submit a report by clicking <a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=RequestSubmit&amp;project_id=76" target="_tab">HERE</a><br />
If you need help with installing PHP-Nuke Titanium do not hesitate to submit a request by clicking <a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=RequestSubmit&amp;project_id=76" target="_tab">HERE</a></p>

<h2>Feedback, Bugs, and Improvements</h2>

<p>If you have any suggestions, feedback, or ideas you feel will be a nice contribution to PHP-Nuke Titanium please use the following links</p>

<p><a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=RequestSubmit&amp;project_id=76" target="_tab">Help improve the US version of PHP-Nuke Titanium</a><br />
<a href="https://www.86it.us/modules.php?name=Network_Projects&amp;op=ReportSubmit&amp;project_id=76" target="_tab">Report a PHP-Nuke Titanium Bug</a><br />
<a href="https://www.86it.us/modules.php?name=Feedback" target="_tab">Your PHP-Nuke Titanium Feedback</a></p>

<hr />
<p>Thanks for using our enhanced PHP-Nuke Web Portal System and we hope you enjoy it&nbsp;&nbsp;</p>

<p><strong>The 86it Devlopers Team </strong>(This is the Only Support Team)<br />
<a href="https://www.86it.us/index.php" rel="nofollow">http://www.86it.us/index.php</a></p>
