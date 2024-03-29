<?php

$lang = "sv";

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
}

// Enter strings in swedish here and english below.
if ($lang == "sv") {
  $language = array("FUSION" => "Fusion",
                    "FUSION23" => "FUSION 2023",
                    "UTSTALLARE" => "Utställare",
                    "KONTAKT" => "Kontakt",
                    "FORFORETAG" => "För företag",
                    "MAIN1" => "Den största satsningen på Fysiksektionens arbetsmarknadsdag någonsin.",
                    "MAIN2" => "Här byggs värdefulla relationer mellan KTHs vassaste studenter och framtidens företag. ",
                    "VALKOMMEN" => " Välkommen till Fusion",
                    "DATUM" => "25 januari 2022",
                    "VAD" => "Vad är Fusion?",
                    "VAD2" => "Fusion är en unik mässa där studenter och företag med intresse för ",
                    "TMF" => "teknik, matematik och fysik",
                    "VAD3" => " får chansen att knyta viktiga kontakter inför framtiden. Mer information om mässan publiceras löpande på",
                    "FB" => "facebook",
                    "." => ".",
                    "VAD4" => "Mässan anordnas av Fysiksektionen på Kungliga Tekniska Högskolan och är ett mycket uppskattat event av såväl studenter som företag. Fysiksektionen består av studenter på civilingenjörsprogrammen i Teknisk fysik och Teknisk matematik.",
                    "PLATS" => "Plats:",
                    "GRADUATELAND" => "Graduateland",
                    "TID" => "Tid: ",
                    "TID2" => "25 januari, 10-16",
                    "TID3" => "",
                    "STORTTACK" => "Stort tack till Fusions huvudsponsor <b>Ericsson</b>",
                    "VIFINNS" => "Vi finns även här",
                    "HITTA" => "Hitta till Fusion",
                    "VAR" => "fusion.graduateland.com",
                    "ADRESS_GRAD" => "Nymble at Campus Valhallavägen",
                    "ADRESS" => "TBA",
                    "ORT" => "TBA",
                    "PROJEKTLEDARE" => "Projektledare",
                    "LEDARE" => "David Alm",
                    "FORETAGSKONTAKT" => "Företagskontakt",
                    "LANKAR" => "Länkar",
                    "VARADEL" => "Vill ni vara en del av Fusion 2022?",
                    "SKICKA" => "Skicka in en intresseanmälan så hör vi av oss!",
                    "TILLANMALAN" => "Läs mer",
                    "UTSTALLARE2019" => "Utställare Fusion 2019",
                    "UTSTALLARE2020" => "Utställare Fusion 2020",
                    "UTSTALLARE2021" => "Utställare Fusion 2021",
                    "KONTAKTAFUSION" => "Kontakta Fusion",
                    "PROJEKTGRUPP" => "<b>Projektgruppen</b> Fusion 2022",
                    "PROJEKTGRUPPEN" => "Projektgruppen",
                    "MARKNAD" => "Marknadsförings-",
                    "PR" => "PR",
                    "DESIGN" => "designansvarig",
                    "FORETAGSANSVARIGA" => "Företagsansvariga",
                    "MASSAN" => "Mässan",
                    "LOGISTIKANSVARIG" => "Logistikansvarig",
                    "EKONOMIANSVARIG" => "Ekonomiansvarig",
                    "EVENTANSVARIG" => "Eventansvarig",
                    "FEST" => "Fest",
                    "SITTNING" => "Sittningsansvarig",
                    "VILLVARAMED" => "Vill ni vara med på Fusion?",
                    "SKICKAMEDDELANDE" => "Skicka ett meddelande till ",
                    "SAHORVI" => " så hör vi av oss med mer information.",
                    "VARAPAKET" => "Våra paket",
                    "MASSPAKET" => "Mässpaket",
                    "EVENTPAKET" => "Eventpaket",
                    "HUVUDSPONSOR" => "Huvudsponsor",
                    "MONTER" => "Digital monter",
                    "FORETAGSVARD" => "Sociala medier",
                    "SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    "LUNCHBILJETTER" => "Jobbannonser",
                    "TILLSAMTLIGA" => "Obegränsat",
                    "LUNCHFOREL" => "Event/Livepresentation",
                    "BANKETTBILJETTER" => "Lättare att hitta till er digitala monter",
                    "PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    "PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar: Ta över Fusions sociala medier i 3 dagar, skicka en insändare till Sektionstidningen The Force, Digitala plattformen för mässan gör det ännu     lättare att hitta till er monter och extra marknadsföring som vår huvudsponsor på våra sociala medier och hemsida.",
                    #"MONTER" => "Monter",
                    #"FORETAGSVARD" => "Företagsvärd",
                    #"SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    #"LUNCHBILJETTER" => "Lunchbiljetter",
                    #"TILLSAMTLIGA" => "Till samtliga representanter",
                    #"LUNCHFOREL" => "Lunchföreläsning, pub etc.",
                    #"BANKETTBILJETTER" => "Bankettbiljetter",
                    #"PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    #"PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar företagets logga på mässkarta, fotovägg under mässa och bankett, i sektionslokalen under januari, på tröja för projektgrupp och värdar samt på bankettbiljetter. Även en egen sida i bankettens sångblad.",
                    "UTVECKLAD" => "Hemsidan utvecklades av Oskar Söderberg och underhålls av Joel Wållberg",
                    "BROSCHYR2022" => "Broschyr 2022 (kommer snart)",
                    "BROSCHYR2021" => "Broschyr 2021",
                    "BROSCHYR2020" => "Broschyr 2020",
                    "BROSCHYR2019" => "Broschyr 2019"
                    );
}
else {
  $language = array("FUSION" => "Fusion",
                    "FUSION23" => "Fusion 2023",
                    "UTSTALLARE" => "Exhibitors",
                    "KONTAKT" => "Contact",
                    "FORFORETAG" => "For exhibitors",
                    "MAIN1" => "With the intention to become the greatest career fair of the Physics Chapter yet.",
                    "MAIN2" => "Building valuable networks between KTH's sharpest minds and companies of the future.",
                    "VALKOMMEN" => "Welcome to Fusion the",
                    "DATUM" => "25th of January 2022",
                    "VAD" => "What is Fusion?",
                    "VAD2" => "Fusion is a unique career fair where students and companies with an interest in",
                    "TMF" => "technology, mathematics and physics",
                    "VAD3" => " gets the chance to make valuable contacts. For more information, please visit our",
                    "FB" => "facebook event",
                    "." => ".",
                    "VAD4" => "The fair is organized by the Physics Chapter of The Royal Institute of Technology and is a much appreciated event by students as well as companies. The Physics Chapter consists of Engineering Physics students and students from the new programme in Engineering Mathematics.",
                    "PLATS" => "Location:",
                    "GRADUATELAND" => "Graduateland",
                    "TID" => "Time: ",
                    "TID2" => "25th of January, 10-16",
                    "TID3" => "",
                    "STORTTACK" => "Big thanks to Fusion's main sponsor <b>Ericsson</b>",
                    "VIFINNS" => "You can also find us here:",
                    "HITTA" => "Find your way to Fusion",
                    "VAR" => "fusion.graduateland.com",
                    "ADRESS_GRAD" => "Nymble at Campus Valhallavägen",
                    "ADRESS" => "TBA",
                    "ORT" => "TBA",
                    "PROJEKTLEDARE" => "Project manager",
                    "LEDARE" => "David Alm",
                    "FORETAGSKONTAKT" => "Company Relations",
                    "LANKAR" => "Links",
                    "VARADEL" => "Do you want to be a part of Fusion 2022?",
                    "SKICKA" => "Send us a message and we will come back to you!",
                    "TILLANMALAN" => "Read more",
                    "UTSTALLARE2019" => "Exhibitors of Fusion 2019",
                    "UTSTALLARE2020" => "Exhibitors of Fusion 2020",
                    "UTSTALLARE2021" => "Exhibitors of Fusion 2021",
                    "KONTAKTAFUSION" => "Contact Fusion",
                    "PROJEKTGRUPP" => "<b>The project group of</b> Fusion 2022",
                    "PROJEKTGRUPPEN" => "The Project Group",
                    "MARKNAD" => "Head of marketing",
                    "PR" => "PR",
                    "DESIGN" => "Head of design",
                    "FORETAGSANSVARIGA" => "Company Relations",
                    "MASSAN" => "Fair",
                    "LOGISTIKANSVARIG" => "Head of logistics",
                    "EKONOMIANSVARIG" => "Head of economics",
                    "EVENTANSVARIG" => "Event responsible",
                    "FEST" => "Party",
                    "SITTNING" => "Dinner responsible",
                    "VILLVARAMED" => "Do you want to exhibit at Fusion?",
                    "SKICKAMEDDELANDE" => "Send a message to ",
                    "SAHORVI" => " and we will come back to you with more information",
                    "VARAPAKET" => "Our packages",
                    "MASSPAKET" => "Fair package",
                    "EVENTPAKET" => "Event package",
                    "HUVUDSPONSOR" => "Main sponsor",
                    "MONTER" => "Booth",
                    "FORETAGSVARD" => "Exhibitor host",
                    "SIDORIBROSCHYR" => "Pages in Fusion's brochure",
                    "LUNCHBILJETTER" => "Job ads",
                    "TILLSAMTLIGA" => "Unlimited",
                    "LUNCHFOREL" => "Event",
                    "BANKETTBILJETTER" => "Easier acces to your digital booth",
                    "PREMIUMPARTNERSKAP" => "Premuim partnership",
                    "PREMIUMTEXT" => "(*) Premium partnership inludes: Take over Fusions social medias for 3 days, a sender in the chapters newspaper The Force, in the digital platform it is even easier to find your booth and bonus marketing as our main sponsor on our websites and social medias.",
                    #"MONTER" => "Monter",
                    #"FORETAGSVARD" => "Företagsvärd",
                    #"SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    #"LUNCHBILJETTER" => "Lunchbiljetter",
                    #"TILLSAMTLIGA" => "Till samtliga representanter",
                    #"LUNCHFOREL" => "Lunchföreläsning, pub etc.",
                    #"BANKETTBILJETTER" => "Bankettbiljetter",
                    #"PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    #"PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar företagets logga på mässkarta, fotovägg under mässa och bankett, i sektionslokalen under januari, på tröja för projektgrupp och värdar samt på bankettbiljetter. Även en egen sida i bankettens sångblad.",
                    "UTVECKLAD" => "A website developed by Oskar Söderberg and maintained by Joel Wållberg",
                    "BROSCHYR2022" => "Broschyr 2022 (coming soon)",
                    "BROSCHYR2021" => "Brochure 2021",
                    "BROSCHYR2020" => "Brochure 2020",
                    "BROSCHYR2019" => "Brochure 2019"
                    );
}

?>
