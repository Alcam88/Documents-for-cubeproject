<! DOCTYPE html>

<html>
<head>
	<!--         Lo de la FH             -->
<link rel="stylesheet" type"text/css" href="Styles/styles.css" />
<title>Eng_FH Aachen: Manufacturing Cube/Index</title>

<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/typo3temp/stylesheet_0ade94ab98.css?1448379798" media="all" />
<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/fileadmin/template/css/fh.css?1450189426" media="all" />

</head>

<body>

<div id="PAGE">
    <BUTTONBAR id="BUTTONBAR">
        <div id="language" title="Language">
        
			 <a href="Contact.php" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="Contact_es.php" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="Contact_de.php" class="lang">
            <img src="Figures/deutsch.png" width="30" height="20" >
            </a>

        </div>
        <NAVBUTTON class="navhaupt" style="float:left;" title="Hauptnavigation" onclick="resptoggle('nav');">
            <svg version="1.1" id="G0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-30 -170 1600 1600" xml:space="preserve" style="stroke:#888;fill:#666;">
                <path d="M1536 192v-128q0 -26 -19 -45t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45zM1536 704v-128q0 -26 -19 -45t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45zM1536 1216v-128q0 -26 -19 -45 t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45z"/>
            </svg>
        </NAVBUTTON>
    </BUTTONBAR>
    <div ID="HEADER">
        <script type="text/javascript">
            function dropdown(ID) {
                drop=window.setTimeout("dropaktiv("+ID+")", 1000);
            }
            function dropaktiv(ID) {
                pos=document.getElementById('SEITE').offsetLeft+106;
                if (ID==3) {pos = pos;}
                if (ID==4) {pos = pos + 216;}
                if (ID==5) {pos = pos;}
                if (ID==6) {pos = pos + 648;}
                document.getElementById('dropdown_page_'+ID).style.left=pos+"px";
                document.getElementById('dropdown_page_'+ID).style.display="block";
                if (ID != 3) document.getElementById('dropdown_page_3').style.display="none";
                if (ID != 4) document.getElementById('dropdown_page_4').style.display="none";
                if (ID != 5) document.getElementById('dropdown_page_5').style.display="none";
                if (ID != 6) document.getElementById('dropdown_page_6').style.display="none";
                //  dropaus=window.setTimeout("dropup("+ID+")",3000);
            }
            function dropup(ID) {
                document.getElementById('dropdown_page_'+ID).style.display="none";
            }
            function resptoggle(block) {
                if (document.getElementById('PAGE').className==block) {
                    document.getElementById('PAGE').className='none';
                    document.getElementById('MAIN').className='none';
                    document.body.style.overflow='auto';
                } else {
                    document.getElementById('PAGE').className=block;
                    if (block == "sidenav") {
                        document.getElementById('MAIN').className='sidenav';
                        document.body.style.overflow='hidden';
                    } else {
                        document.getElementById('MAIN').className='none';
                        document.body.style.overflow='auto';
                    }
                    if (block == 'login') {
                        if (document.getElementById('user')) {
                            document.getElementById('user').focus();
                        }
                    }
                }
            }
            function accordionAUF(id) {
                $("#accordion_"+id+"_klein_B").hide(0);
                $("#accordion_"+id+"_gross_C").fadeIn(500);
                $("#accordion_"+id+"_gross_B").show(0);
            }
            function accordionZU(id) {
                $("#accordion_"+id+"_klein_B").show(0);
                $("#accordion_"+id+"_gross_C").fadeOut(500);
                $("#accordion_"+id+"_gross_B").hide(0);
            }
        </script>
        
        <div id="TOPNAV"><span id="hilfsnavi_topnavi" class="invisible"><a href="#hilfsnavi_sprachwahl">Top-Navigation &uuml;berspringen</a></span>
            <a href="index_es.php" title="Home">Home</a><a href="Contact_es.html" title="Contact">Contacto</a><a href="About_us_es.html" title="about us">Acerca de nosotros</a>
        </div>

        
        <div id="SPRACHE">
            <span id="hilfsnavi_sprachwahl" class="invisible"><a href="#hilfsnavi_suche">Sprachumschaltung &uuml;berspringen</a></span>
            <a href="Contact.php" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="Contact_es.php" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="Contact_de.php" class="lang">
            <img src="Figures/deutsch.png" width="30" height="20" >
            </a>
        </div>

        <div id="HEADNAV">
            <span id="hilfsnavi_headnavi" class="invisible"><a href="#hilfsnavi_navigation">Haupt-Navigation &uuml;berspringen</a></span>
            <div id="START" class="passiv"><a href="https://www1.fh-aachen.de" title="Startseite">Startseite</a></div>
             <div class="passiv"><a href="index_es.php" title="Home" id="page_3" onmouseover="dropdown(3)" onmouseout="window.clearTimeout(drop)">Home </a></div><div class="passiv"><a href="About_us_es.html" title="Info" id="page_4" onmouseover="dropdown(4)" onmouseout="window.clearTimeout(drop)">Acerca de nosotros</a></div><div class="passiv"><a href="Contact_es.html" title="contact" id="page_5" onmouseover="dropdown(5)" onmouseout="window.clearTimeout(drop)">Contacto</a></div><div class="passiv"><a href="https://www.fh-aachen.de/" title="Algotracosa" id="page_6" onmouseover="dropdown(6)" onmouseout="window.clearTimeout(drop)">M&aacute;s</a></div>
        </div>
       
    </div>

	<!--         SEITE             -->

<div id="SEITE">

	
    <a href="index_es.php" id="logo" title="zur Startseite"></a>

            <div id="MAIN" class="none">

                <div id="MAINNAV">
                    <span id="hilfsnavi_navigation" class="invisible">
                        <a href="#hilfsnavi_inhalt">Seiten-Navigation überspringen</a>
                    </span>
                    <ul id="BREADCRUMB_MAIN"> 
                        <li style="color:#00b5ad;"> Acerca de nosotros </li>
                    </ul>

           <ul id="SEITENNAV"> 

            <li>Alfonso Castro Medina</li>
            <li>Armando Ren&eacute; Narv&aacute;es Contreras</li>
            <li>Hilario Salom&oacute;n Galv&aacute;n Guzm&aacute;n</li>
            <li>Salvador Jimenez Juarez</li>

  </ul> 

</div>
</div>

 <div id="INHALT_MAIN">

    <center><h1 class="tittle">Contacto</h1></br></center>

    Puede contactarnos en la en la FH Aachen en el edificio de Goethestra&szlig;em en la cafetería o en el edicficio en general puede buscar a unos mexicanos que parecen un poco a estudiantes de la India o de Medio Oriente pero algo diferentes.

</div>  

<div id="FOOTER">
            <div id="BREADCRUMB_FOOTER">
                
            </div>
            <div class="mobil" id="TOPNAV">
                <h2>FH Direkt</h2><a href="kontakt/" title="Kontaktinformationen der FH Aachen">Kontakt/Hilfe</a><a href="hochschule/zentralverwaltung/dezernat-i-personal/stellenanzeigen/" title="Stellenanzeigen">Stellenanzeigen</a><a href="presse/" title="Presseinformationen der FH Aachen">Presse</a><a href="topnavi/telefonbuch/" title="Telefonbuch">Telefonbuch</a><a href="downloads/?no_cache=1" title="Formulare, Flyer, Broschüren, Informationen, ...">Downloads</a>
            </div>
            <div id="INHALT_FOOTER">
			
	<div class="SOCIAL">  
		<div>
			<a href="https://www.facebook.com/profile.php?id=100011965921173" target="_blank">
				<img border="0" height="52" width="178" src="Figures/fb.png">
			</a>
		</div>
	</div>

                <div class="STD NO_1">
    <!--  CONTENT ELEMENT, uid:43/text [begin] -->
        <div id="c43" class="csc-default">
        <!--  Header: [begin] -->
            <div class="csc-header csc-header-n1"><h2 class="csc-firstHeader">Kontakt</h2></div>
        <!--  Header: [end] -->
            
        <!--  Text: [begin] -->
            <p class="bodytext"><b>FH Aachen<br></b>Postfach 100 560<br>52005 Aachen<br>T +49.241.6009 0<br>F +49.241.6009 51090</p>
        <!--  Text: [end] -->
            </div>
    <!--  CONTENT ELEMENT, uid:43/text [end] -->
        </div>
               
            </div>

        <div style="clear: both;"></div>
        </div>


<!-- Close <div> of SEITE -->
</div>
<!-- Close <div> of PAGE -->
</div>


		
	</body>



</html>