<?php

global $slug_data_intro;
global $slug_data_address;
global $slug_data_receipt;
global $slug_data_footer;

$slug_data_intro = '<p>Hjælp Alternativet med at blive opstillingsberettiget til næste folketingsvalg!<br />Udfyld vælgererklæringen og underskriv med musen eller på touch screen.<br />Vi sender erklæringen videre ind til folkeregisteret i din kommune.</p>';


$slug_data_address = '';
$slug_data_address .= '<div id="vcard-alternativet" class="vcard" itemscope itemtype="http://schema.org/Organization">';
$slug_data_address .= '	<div class="name fn org" itemprop="name">Alternativet</div>';
$slug_data_address .= '	<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
$slug_data_address .= '		<div class="po-box" itemprop="postOfficeBoxNumber">Under Elmene 9</div>';
$slug_data_address .= '		<div class="postallocality"><span class="postal-code" itemprop="postalCode">2300</span> <span class="locality" itemprop="addressLocality">København S</span></div>';
$slug_data_address .= '	</div>';
$slug_data_address .= '	<div class="url" itemprop="url">www.alternativet.dk</div>';
$slug_data_address .= '	<div class="email" itemprop="email"><a href="mailto:alternativet@alternativet.dk">alternativet@alternativet.dk</a></div>';
$slug_data_address .= '	<div class="telephone" itemprop="telephone">(+45) 5191 1133</div>';
$slug_data_address .= '</div>';


$slug_data_receipt = '';
$slug_data_receipt .= '<h1>Tusind tak</h1>';
$slug_data_receipt .= '<p>Vi har nu modtaget din underskrevne vælgererklæring.</p>';

$slug_data_receipt .= '<h3>Upload din godkendte vælgererklæring til os</h3>';
$slug_data_receipt .= '<p>Indenfor nogle uger får du din godkendte vælgererklæring tilbage med posten fra Folkeregistret i din kommune. Først når vi modtager den fra dig, tæller den med blandt de 20.260 vælgererklæringer, som vi skal bruge for at kunne stille op til næste folketingsvalg.</p>';
$slug_data_receipt .= '<p>Husk at sende den til os hurtigst muligt!</p>';
$slug_data_receipt .= '<p>Du gør det meget hurtigt og nemt ved at tage et foto af den med din smartphone og uploade den til os: <a href="https://www.alternativet.dk/secure">www.alternativet.dk/secure</a>.</p>';

$slug_data_receipt .= '<h3>Eller send den pr. post</h3>';
$slug_data_receipt .= '<p>Hvis du hellere vil sende den til os med post, kan du gøre det pr. post. Benyt Post Danmarks "Mobilporto" i stedet for frimærker på kuverten. Send en SMS med "porto" til 1900 - så får du en kode, du skal skrive der, hvor firmærket skulle have siddet.</p>';

$slug_data_receipt .= '<h3>Modtag en påmindelse</h3>';
$slug_data_receipt .= '<p>Du kan sende os din e-mailadresse til <a href="mailto:reminder@alternativet.dk">reminder@alternativet.dk</a> – så sender vi dig en påmindelse om at sende vælgererklæringen ind til os igen.</p>';
$slug_data_receipt .= '<p class="regards">Med venlig hilsen,</p>';
$slug_data_receipt .= '<h2>Alternativet</h2>';


$slug_data_footer = '';
$slug_data_footer .= '<div class="about">';
$slug_data_footer .= '	<ul class="contacts">';
$slug_data_footer .= '		<li class="contact" itemscope itemtype="http://schema.org/Organization">';
$slug_data_footer .= '			<h4>Kontakt os</h4>';
$slug_data_footer .= '			<div class="address" itemscope itemtype="http://schema.org/PostalAddress">';
$slug_data_footer .= '				<h5 itemprop="name">ALTERNATIVET</h5>';
$slug_data_footer .= '				<p itemprop="streetAddress">Under Elmene 9</p>';
$slug_data_footer .= '				<p><span itemprop="postalCode">2300 </span><span itemprop="addressLocality">København S</span></p>';
$slug_data_footer .= '			</div>';
$slug_data_footer .= '			<p><a itemprop="email" href="mailto:alternativet@alternativet.dk">alternativet@alternativet.dk</a></p>';
$slug_data_footer .= '			<p itemprop="telephone">+45 5191 1133</p>';
$slug_data_footer .= '		</li>';
$slug_data_footer .= '	</ul>';
$slug_data_footer .= '</div>';



?>