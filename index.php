<!DOCTYPE html>
<html lang="cs">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LKGVQ5');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Petr Kovář">
    <meta name="google-site-verification" content="vjgBbXnHxvHKOLBOMnWEVzAW5k_PzX5g-nt9XMd3fwg">
    <meta property="og:title" content="Petr Kovář UX designer">
	<meta property="og:description" content="I'm a User Experience Designer and Digital Product Designer with 12+ years of experience in digital product development.">
	<meta property="og:image" content="http://www.rififi.cz/media/first-screen/petr-kovar-ux-designer.jpg">
	<meta property="og:url" content="http://www.rififi.cz">
	<meta name="twitter:title" content="Petr Kovář UX designer">
	<meta name="twitter:description" content="I'm a User Experience Designer and Digital Product Designer with 12+ years of experience in digital product development.">
	<meta name="twitter:image" content="http://www.rififi.cz/media/first-screen/petr-kovar-ux-designer.jpg">
	<meta name="twitter:card" content="summary_large_image">
      <?php 
    $description = array(
    'homepage' => 'Petr Kovář – UX designer &amp; Digital product designer.', 
    'web-design-museum' => 'Prohlédněte si případovou studii návrhu prvního musea webového designu na světě. Popis řešení problému, použité UX metody a ukázky wireframů.',
    'cn-group' => 'Prohlédněte si případovou studii redesignu firemního webu dánské společnosti CN Group. Popis řešení problému, použité UX metody a ukázky wireframů.',
    'cn-jobs' => 'Prohlédněte si případovou studii návrhu náborové microsite CN Jobs pro společnost CN Group. Popis řešení problému, použité UX metody a ukázky wireframů.',
    'niveko-pools' => 'Prohlédněte si případovou studii redesignu firemního webu společnosti NIVEKO. Popis řešení problému, použité UX metody a ukázky wireframů.',
     );
    $page = $_GET['page'];
?><meta name="description" content="<?php if( $description[$page] ) echo $description[$page]; else echo $description['homepage'];?>">   
    <?php 
    $title = array(
    'homepage' => 'Petr Kovář – UX designer &amp; Digital product designer',
      //Menu
    'web-design-museum' => 'Web Design Museum – případová studie – Petr Kovář – UX designer',
    'cn-group' => 'CN Group – případová studie – Petr Kovář – UX designer',
    'cn-jobs' => 'CN Jobs – případová studie – Petr Kovář – UX designer',
    'niveko-pools' => 'NIVEKO Pools – případová studie – Petr Kovář – UX designer',             
    );
    $page = $_GET['page'];
    ?>  
    <title><?php if( $title[$page] ) echo $title[$page]; else echo $title['homepage'];?></title>
    <link rel="stylesheet" type="text/css" href="css/master.css">
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
 <link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#0575e6">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LKGVQ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Loader -->
<!-- <div id="page-preloader"><span class="spinner"></span></div> -->
<!-- Loader end -->

<!-- Header -->
<?php 
      if ($page == "")  
      {echo('<header class="header">');} 
      else {
      echo('<header class="header header-not-home">');} 
?> 
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-8">
                <a href="/" class="logo">
                    <div class="header-avatar">
                        <img src="media/first-screen/petr-kovar.jpg" alt="Petr Kovář">
                    </div>
                    <span class="point">Petr Kovář</span>
                </a>
            </div>
            <div class="col-md-9 text-right hidden-sm hidden-xs">
                <div class="main-menu header-links">
                    <ul>
                        <li><a href="/#projects">Případové studie</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#about-me-modal">O mně</a></li>
                        <li><a href="download/kovar-petr-resume.pdf" download>Stáhnout CV</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contact-me-modal">Kontakt</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4 hidden-lg hidden-md">
                <div class="mobile-btn">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header -->

<!-- Mobile menu -->
<div class="mob-menu-wrapper hidden-md hidden-lg">
    <div class="close-mob-menu">
        <span class="mdi mdi-window-close"></span>
    </div>
    <div class="mobile-box-wrap">
        <div class="mobile-box-flex">
            <div class="mobile-menu header-links">
                <ul>
                    <li><a href="#projects">Případové studie</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#about-me-modal">O mně</a></li>
                    <li><a href="download/kovar-petr-resume.pdf" download>Stáhnout CV</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#contact-me-modal">Kontakt</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- Mobile menu -->

<div class="wrapper">
 
<?php

$page = $_GET['page'];
    $pages = array(
    'homepage', 
    'web-design-museum',
    'cn-group',
    'cn-jobs',
    'hotel-volarik',
    'niveko-pools',
    'aukce-bydleni'
   );
    if (!empty($page)) {
        if(in_array($page,$pages)) {
            $page .= '.php';
            include($page);
        }
        else {
    include('404.php');
        }
    }
    else {
        include('homepage.php');
    }

?>  
    <div class="contacts-section section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Kontakt</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="opacity-box contact-text">
                        <p>Potřebujete pomoci s UX designem webových stránek, mobilní aplikace nebo jiného digitálního produktu? Neváhejte mě kontaktovat.</p>
                    </div>
                    <div class="about-me-info">
                        <p class="info-row">
                            <span class="span-title">Mobil</span>
                            <span class="opacity-box">
                                <a href="tel:+420 771 774 536">+420 771 774 536</a>
                            </span>
                        </p>
                        <p class="info-row">
                            <span class="span-title">E-mail</span>
                            <span class="opacity-box">
                                <a href="mailto:petr.kovar@rififi.cz">petr.kovar@rififi.cz</a>
                            </span>
                        </p>
                        <p class="info-row">
                            <span class="span-title">Adresa</span>
                            <span class="opacity-box">
                                Praha 2 – Vinohrady
                            </span>
                        </p>
                              <p class="info-row">
                            <span class="span-title">IČO</span>
                            <span class="opacity-box">
                               74544781
                            </span>
                        </p> 
                        <p class="info-row">
                            <span class="span-title">Social</span>
                            <span>
                                <a target="_blank" href="https://www.linkedin.com/in/petrkovar/" class="fa fonts-icons mdi mdi-linkedin"></a>
                                <a target="_blank" href="https://twitter.com/rifificz" class="fa fonts-icons mdi mdi-twitter"></a>
                                <a target="_blank" href="https://www.behance.net/rififi" class="fa fonts-icons mdi mdi-behance"></a>
                            </span>
                        </p>                                 
                    </div>
                     <div class="opacity-box contact-text">
                        <p><small>Podnikatel není plátce DPH a je zapsán v Živnostenském rejstříku v Praze.</small></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrapper">
                        <form id="contact-form" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name-input">Jméno</label>
                                        <input type="text"
                                               class="site-input name-input"
                                               id="name-input"
                                               placeholder="Vaše jméno a příjmení"
                                               required
                                               data-validation-required-message="povinný údaj">
                                        <p class="help-block"></p>
                                        <p class="help-block-success">v pořádku</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email-input">E-mail</label>
                                        <input type="email"
                                               class="site-input email-input"
                                               id="email-input"
                                               placeholder="Váš e-mail"
                                               required
                                               data-validation-email-message="neplatný e-mail"
                                               data-validation-required-message="povinný údaj">
                                        <p class="help-block"></p>
                                        <p class="help-block-success">v pořádku</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="textarea">Zpráva</label>
                                        <textarea id="textarea"
                                                  class="site-input textarea"
                                                  placeholder="Váš vzkaz"
                                                  required
                                                  data-validation-required-message="povinný údaj"></textarea>
                                        <p class="help-block"></p>
                                        <p class="help-block-success">v pořáku</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="submit-holder">
                                        <input class="site-btn btn-theme-blue send-message-btn-home" type="submit" value="Odeslat zprávu">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>&copy; <?php echo date("Y") ?> <strong>Mgr. Petr Kovář</strong> – UX designer &amp; Digital product designer</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal about me -->
<div class="modal fade about-me-wrapper" id="about-me-modal" tabindex="-1" role="dialog" aria-labelledby="about-me-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="about-me">
                    <div class="about-title">
                        <h2>O mně</h2>
                    </div>
                    <div class="opacity-box margin-box margin-p">
                        <p>Jmenuji se <strong>Petr Kovář</strong> a jsem <strong>UX designer s více než 12letou praxí</strong>. Rád pomáhám klientům navrhovat uživatelsky přívětivé weby nebo aplikace, které nejenom hezky vypadají, ale též plní obchodní a marketingové cíle.</p>

                        <p>V oblasti návrhu digitálních produktů a webového designu <strong>mám díky mnohaletým zkušenostem přesah do mnoha disciplín</strong>. Pomohu pro váš projekt nalézt vhodnou <strong>strategii</strong>, nadefinuji klíčové <strong>persony</strong>, provedu <strong>uživatelský výzkum</strong>, projekt <strong>otestuji</strong> s reálnými uživateli a připravím <strong>sadu wireframů</strong> nebo <strong>interaktivních prototypů</strong>.</p>
                    </div>
                </div>        
                <div class="modal-img">
                    <img src="media/modal-about-me/petr-kovar-ux-designer.jpg" alt="Petr Kovář UX designer">
                </div>
                <div class="resume-box">
                    <div class="resume-title">
                        <h3>Pracovní zkušenosti</h3>
                    </div>
       
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>Digital Brain</h4>
                            <h5>Senior UX designer &amp; Webový stratég | kontraktor</h5>
                               <div class="resume-date opacity-box">
                            <p>02/2016 — do současnosti</p>
                        </div>
                        </div>
                        <div class="resume-info-desc opacity-box margin-box margin-p">
                            <p>Agentura Digital Brain pomáhá firmám a značkám uspět na B2C a B2B trzích.</p>
                            <ul>
                              <li>Moje úloha: vstupní analýzy, uživatelský výzkum a tvorba person, návrhy wireframů a interaktivních prototypů, definice obsahové strategie, uživatelské testování, mapování uživatelských cest, A/B testování a tvorba MVP produktů (Minimum Viable Product).</li>
                               <li>Podíl na projektech: AukceBydleni.cz, Mall.cz, Kolonial.cz, Prodeti.cz, Niveko Pools, Hotel Volarik, Vivantis, Prozdravi.cz a mnohé další.</li> 
           
                            </ul>
                        </div>                     
                    </div>
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>CN Group</h4>
                            <h5>Senior UX &amp; UI designer | kontraktor</h5>
                             <div class="resume-date opacity-box">
                            <p>01/2015 — 12/2015</p>
                        </div> 
                        </div>
                        <div class="resume-info-desc opacity-box margin-box margin-p">
                            <p>CN Group je dánská softwarová společnost, která se zabývá vývojem a údržbou náročných softwarových řešení na bázi nearshoringu.</p>
                        <ul>
                            <li>Moje úloha: vstupní analýzy digitálních projektů, návrhy informační architektury, tvorba wireframů a interaktivních prototypů, uživatelský výzkum a testování, tvorba person, grafické návrhy UI a vizuální identity pro on-line média.</li>
                            <li>Podíl na projektech: redesign webových stránek společnosti CN Group, návrh náborové microsite CN Jobs, responsivní design on-line magazínu Zentrum der Gesundheit a e-shopu myFairTrade.com, tvorba intranetové aplikace pro společnost Nonstop Recruitment, návrh hudební mobilní aplikace Criteria MX.</li> 
                        </ul>
                        </div>                      
                    </div>
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>CDN77.com</h4>
                            <h5>Senior UX &amp; UI designer | kontraktor</h5>
                             <div class="resume-date opacity-box">
                            <p>02/2012 — 12/2014</p>
                        </div> 
                        </div>
                        <div class="resume-info-desc opacity-box margin-box margin-p">
                            <p>Startup CDN77.com zrychluje načítaní globálních webových stránek pomocí technologie „content delivery network“ (CDN).</p>                        
                        <ul>
                            <li>Moje úloha: grafické návrhy UI a vizuální identity, uživatelský výzkum, tvorba informační architektury, wireframů a interaktivních prototypů, A/B testování, front-endový vývoj webových stránek a on-line aplikací, kreativní návrhy bannerových kampaní.</li>
                            <li>Podíl na projektech: kompletní redesign webových stránek služby CDN77.com včetně administračního rozhraní pro klienty.</li>
                        </ul>
                        </div>                      
                    </div>  
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>SuperHosting.cz</h4>
                            <h5>UI designer &amp; Front-end developer | kontraktor</h5>
                             <div class="resume-date opacity-box">
                            <p>06/2009 — 12/2014</p>
                        </div> 
                        </div>
                        <div class="resume-info-desc opacity-box">
                          <ul>
                            <li>Moje úloha: grafické návrhy UI a tvorba vizuální identity, návrhy wireframů a interaktivních prototypů, tvorba kreativních bannerových kampaní a front-endový vývoj webových stránek a on-line aplikací (HTML5/CSS3, Bootstrap, jQuery).</li>
                            <li>Podíl na projektech: SuperHosting.cz, Peering.cz, Cloudee.eu, Bijk.com a SuperNetwork.cz.</li>
                        </ul>
                        </div>                      
                    </div>   
                </div>
                <div class="resume-box">
                    <div class="resume-title">
                        <h3>Vzdělání</h3>
                    </div>
             
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>Karlova Univerzita Praha</h4>
                            <h5>Přírodovědecká a Filozofická fakulta</h5>
                        <div class="resume-date opacity-box">
                            <p>1998 — 2005</p>
                        </div>
                        </div>
                        <div class="resume-info-desc opacity-box">
                        	<ul>
                        		<li>Magisterský titul v oborech historie a geografie</li>
                        		<li>Státní zkouška z psychologie a pedagogiky</li>
                        	</ul>
                        </div>
                      
                    </div>
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>Freie Universität Berlin</h4>
                             <div class="resume-date opacity-box">
                            <p>2004 — 2005</p>
                        </div>  
                        </div>
                        <div class="resume-info-desc opacity-box">
                        	<ul>
                        		<li>program Erasmus, historie</li>
                        	</ul>
                        </div>                     
                    </div>
                    <div class="resume-info">
                        <div class="resume-info-title">
                            <h4>SPŠ sdělovací techniky Praha</h4>
                             <div class="resume-date opacity-box">
                            <p>1993 — 1997</p>
                        </div>  
                        </div>
                        <div class="resume-info-desc opacity-box">
                        	<ul>
                        		<li>Obrazová a zvuková technika</li>
                        	</ul>
                        </div>                     
                    </div>
                </div>
                <div class="modal-buttons">
                    <a class="site-btn btn-theme-blue" href="#"  data-dismiss="modal" data-toggle="modal" data-target="#contact-me-modal">Kontaktujte mě</a>
                    <a class="site-btn btn-theme-blue-tr" target="_blank" href="https://www.linkedin.com/in/petrkovar/" class="fa fonts-icons mdi mdi-linkedin">LinkedIn profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal about me -->

<!-- Modal contact me -->
<div class="modal fade" id="contact-me-modal" tabindex="-1" role="dialog" aria-labelledby="contact-me-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="about-me">
                    <div class="about-title">
                        <h2>Kontakt</h2>
                    </div>
                    <div class="opacity-box">
                        <p><strong>Mgr. Petr Kovář</strong> – UX designer &amp; Digital Product designer </p>
                    </div>
                </div>
              <div class="about-me-info">
                        <p class="info-row">
                            <span class="span-title">Mobil</span>
                            <span class="opacity-box">
                                <a href="tel:+420 771 774 536">+420 771 774 536</a>
                            </span>
                        </p>
                        <p class="info-row">
                            <span class="span-title">E-mail</span>
                            <span class="opacity-box">
                                <a href="mailto:petr.kovar@rififi.cz">petr.kovar@rififi.cz</a>
                            </span>
                        </p>
                        <p class="info-row">
                            <span class="span-title">Adresa</span>
                            <span class="opacity-box">
                                Praha 2 – Vinohrady
                            </span>
                        </p>
                    <p class="info-row">
                            <span class="span-title">IČO</span>
                            <span class="opacity-box">
                               74544781
                            </span>
                        </p> 
                        <p class="info-row">
                            <span class="span-title">Social</span>
                            <span>
                                <a target="_blank" href="https://www.linkedin.com/in/petrkovar/" class="fa fonts-icons mdi mdi-linkedin"></a>
                                <a target="_blank" href="https://twitter.com/rifificz" class="fa fonts-icons mdi mdi-twitter"></a>
                                <a target="_blank" href="https://www.behance.net/rififi" class="fa fonts-icons mdi mdi-behance"></a>
                            </span>
                        </p>                                 
                    </div>

                <div class="form-wrapper">
                    <h2>Napište mi</h2>
                    <form id="modal-form" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name-modal">Jméno</label>
                                    <input type="text"
                                           class="site-input name-input"
                                           id="name-modal"
                                           placeholder="Vaše jméno a příjmení"
                                           required
                                           data-validation-required-message="povinný údaj">
                                    <p class="help-block"></p>
                                    <p class="help-block-success">v pořádku</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email-modal">E-mail</label>
                                    <input type="email"
                                           class="site-input email-input"
                                           id="email-modal"
                                           placeholder="Váš e-mail"
                                           required
                                           data-validation-email-message="povinný údaj"
                                           data-validation-required-message="neplatný e-mail">
                                    <p class="help-block"></p>
                                    <p class="help-block-success">v pořádku</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="textarea-modal">Zpráva</label>
                                    <textarea id="textarea-modal"
                                              class="site-input textarea"
                                              placeholder="Váš vzkaz"
                                              required
                                              data-validation-required-message="povinný údaj"></textarea>
                                    <p class="help-block"></p>
                                    <p class="help-block-success">v pořádku</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modal-buttons">
                                    <input class="site-btn btn-theme-blue" type="submit" value="Odeslat zprávu">
                                    <a class="site-btn btn-theme-blue-tr" href="#" data-dismiss="modal" aria-hidden="true">Zpět do portfolia</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal contact me -->

<!-- Modal send message -->
<div class="modal fade" id="send-message-modal" tabindex="-1" role="dialog" aria-labelledby="send-message-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="about-me">
                    <div class="about-title">
                        <h2>Vaše zpráva byla úspěšně odeslána</h2>
                    </div>
                    <div class="opacity-box">
                        <p>Děkuji za vyplnění kontaktního formuláře. Brzy vás budu kontaktovat.</p>
                    </div>
                </div>
                <div class="modal-buttons">
                    <a class="site-btn btn-theme-blue" href="#" data-dismiss="modal" aria-hidden="true">Zpět do portfolia</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal send message -->

<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.placeholder.min.js"></script>

<!--Isotope-->
<script src="assets/isotope/imagesloaded.pkgd.min.js"></script>
<script src="assets/isotope/isotope.pkgd.min.js"></script>

<!--Gradient-->
<script src="assets/gradient/gradient.js"></script>

<!--Highcharts-->
<!-- <script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/data.js"></script>
<script src="assets/highcharts/exporting.js"></script> -->

<!--jquery.custom-scroll-->
<script src="assets/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--social likes-->
<script src="assets/social-likes/social-likes.min.js"></script>

<!--Smooth Scroll-->
<script src="assets/smoothscroll-for-websites/SmoothScroll.js"></script>

<!--jqBootstrapValidation-->
<script src="assets/contact/jqBootstrapValidation.js"></script>
<script src="assets/contact/contact_me.js"></script>

<!--THEME-->
<script src="js/theme.js"></script>

<!--Image comparison plugin-->
<script src="js/jquery.event.move.js"></script>
<script src="js/jquery.twentytwenty.js"></script>
 <script type="text/javascript">
$(window).load(function() {
  $(".twentytwenty-container").twentytwenty();
});

    </script>
</body>
</html>