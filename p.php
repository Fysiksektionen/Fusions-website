<?php

$lang = "sv";

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
}

// Enter strings in swedish here and english below.
if ($lang == "sv") {
  $language = array("YEAR" => "2023",
                    "FUSION" => "Fusion",
                    "FUSION23" => "FUSION 2023",
                    "BESOKMASSAN" => "Besök Fusion",
                    "UTSTALLARE" => "Utställare",
                    "KONTAKT" => "Kontakt",
                    "FORFORETAG" => "För företag",
                    "MAIN1" => "Den största satsningen på Fysiksektionens arbetsmarknadsdag någonsin.",
                    "MAIN2" => "Här byggs värdefulla relationer mellan KTH:s vassaste studenter och framtidens företag",
                    "VALKOMMEN" => " Välkommen till Fusion",
                    "DATUM" => "24 januari 2023",
                    "VAD" => "Vad är Fusion?",
                    "VAD2" => "Fusion är en unik mässa där studenter och företag med intresse för ",
                    "TMF" => "teknik, matematik och fysik",
                    "VAD3" => " får chansen att knyta viktiga kontakter inför framtiden. Efter två år av att ha arrangerats online på grund av pandemin är vi äntligen tillbaka på plats i Nymble! Mer information om mässan publiceras löpande på",
                    "FB" => "facebook",
                    "." => ".",
                    "VAD4" => "Mässan anordnas av Fysiksektionen på Kungliga Tekniska Högskolan och är ett mycket uppskattat event av såväl studenter som företag. Fysiksektionen består av studenter på civilingenjörsprogrammen i Teknisk fysik och Teknisk matematik.",
                    "PLATS" => "<b>Plats:</b>",
                    "GRADUATELAND" => "Graduateland",
                    "TID" => "<b>Tid: </b>",
                    "TID2" => "24 januari, 10:00-16:00",
                    "TID3" => "",
                    "STORTTACK" => "Stort tack till Fusions huvudsponsor <b>Ericsson</b>",
                    "VIFINNS" => "Vi finns även här",
                    "HITTA" => "Hitta till Fusion",
                    "VAR" => "fusion.graduateland.com",
                    "ADRESS_GRAD" => "Graduateland",
                    "ADRESS" => "Nymble, Drottning Kristinas väg 15-19",
                    "ORT" => "114 28 Stockholm",
                    "PROJEKTLEDARE" => "Projektledare",
                    "VICEPROJEKTLEDARE" => "Vice Projektledare",
                    "LEDARE" => "Evelina Stenseth",
                    "FORETAGSKONTAKT" => "Företagskontakt",
                    "LANKAR" => "Länkar",
                    "VARADEL" => "Vill ni vara en del av Fusion 2023?",
                    "SKICKA" => "Skicka in en intresseanmälan så hör vi av oss!",
                    "TILLANMALAN" => "Läs mer",
                    "UTSTALLARE2019" => "Utställare Fusion 2019",
                    "UTSTALLARE2020" => "Utställare Fusion 2020",
                    "UTSTALLARE2021" => "Utställare Fusion 2021",
                    "UTSTALLARE2022" => "Utställare Fusion 2022",
                    "KONTAKTAFUSION" => "Kontakta Fusion",
                    "PROJEKTGRUPP" => "<b>Projektgruppen</b> Fusion 2023",
                    "PROJEKTGRUPPEN" => "Projektgruppen",
                    "MARKNAD" => "Marknadsföringsansvarig",
                    "PR" => "PR",
                    "DESIGN" => "designansvarig",
                    "FORETAGSANSVARIGA" => "Företagsansvariga",
                    "MASSAN" => "Mässan",
                    "LOGISTIKANSVARIG" => "Logistikansvarig",
                    "EKONOMIANSVARIG" => "Kassör",
                    "EVENTANSVARIG" => "Eventansvarig",
                    "FORSKARANSVARIG" => "Ansvarig Forskarhörnan",
                    "FEST" => "Fest/PR",
                    "SITTNING" => "Sittningsansvarig",
                    "SALJCHEF" => "Huvudansvarig företagskontakt",
                    "SALJARE" => "Företagskontakt",
                    "VILLVARAMED" => "Vill ni vara med på Fusion?",
                    "SKICKAMEDDELANDE" => "Skicka ett meddelande till ",
                    "SAHORVI" => " så hör vi av oss med mer information.",
                    "VARAPAKET" => "Våra paket",
                    "MASSPAKET" => "Mässpaket",
                    "EVENTPAKET" => "Eventpaket",
                    "HUVUDSPONSOR" => "Huvudsponsor",
                    "MONTER" => "Monter (m&#178;)",
                    "FORETAGSVARD" => "Företagsvärd",
                    "SOCIALMEDIA" => "Sociala medier",
                    "SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    "LUNCHBILJETTER" => "Lunchbiljetter",
                    "JOBBANNONSER" => "Jobbannonser",
                    "TILLSAMTLIGA" => "Obegränsat",
                    "LUNCHFOREL" => "Event",
                    "BANKETTBILJETTER" => "Sittningsbiljetter",
                    "PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    "PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar: Ta över Fusions sociala medier i 3 dagar, skicka en insändare till sektionstidningen The Force, extra marknadsföring som vår huvudsponsor i sociala medier & broschyren samt på denna hemsida.",
                    #"MONTER" => "Monter",
                    #"FORETAGSVARD" => "Företagsvärd",
                    #"SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    #"LUNCHBILJETTER" => "Lunchbiljetter",
                    #"TILLSAMTLIGA" => "Till samtliga representanter",
                    #"LUNCHFOREL" => "Lunchföreläsning, pub etc.",
                    #"BANKETTBILJETTER" => "Bankettbiljetter",
                    #"PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    #"PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar företagets logga på mässkarta, fotovägg under mässa och bankett, i sektionslokalen under januari, på tröja för projektgrupp och värdar samt på bankettbiljetter. Även en egen sida i bankettens sångblad.",
                    "UTVECKLAD" => "Hemsidan utvecklades av Oskar Söderberg och underhålls av Adrian Vågberg",
                    "BROSCHYR2022" => "Broschyr 2022",
                    "BROSCHYR2021" => "Broschyr 2021",
                    "BROSCHYR2020" => "Broschyr 2020",
                    "BROSCHYR2019" => "Broschyr 2019",
                    "HEMTITEL" => "Fusion | Fysiksektionens arbetsmarknadsmässa",
                    "KONTAKTTITEL" => "Kontakt | Fusion",
                    "FORFORETAGTITEL" => "För företag | Fusion",
                    "UTSTALLARETITEL" => "Utställare | Fusion",
                    "BLIHUVUDSPONSOR" => "Vill ni synas här och på andra ställen innan och under Fusion genom extra evenemang och marknadsföring? Bli huvudsponsorer för årets mässa!",
                    "KONTAKTAOSS" => "Läs mer under \"För företag\" eller kontakta oss på ",
                    "MAILFORETAGSKONTAKT" => "fusion@f.kth.se",
                    "MAILPL" => "plfusion@f.kth.se",
                    "MAILPROJEKTGRUPPEN" => "projektfusion@f.kth.se"
                    );
}
else {
  $language = array("YEAR" => "2023",
                    "FUSION" => "Fusion",
                    "FUSION23" => "Fusion 2023",
                    "BESOKMASSAN" => "Visit Fusion",
                    "UTSTALLARE" => "Exhibitors",
                    "KONTAKT" => "Contact",
                    "FORFORETAG" => "For exhibitors",
                    "MAIN1" => "With the intention to become the greatest career fair of the Physics Chapter yet.",
                    "MAIN2" => "Building valuable networks between KTH's sharpest minds and companies of the future",
                    "VALKOMMEN" => "Welcome to Fusion on the",
                    "DATUM" => "24th of January 2023",
                    "VAD" => "What is Fusion?",
                    "VAD2" => "Fusion is a unique career fair where students and companies with an interest in",
                    "TMF" => "technology, mathematics and physics",
                    "VAD3" => " gets the chance to make valuable contacts. For more information, please see our",
                    "FB" => "facebook event",
                    "." => ".",
                    "VAD4" => "The fair is organized by the Physics Chapter of KTH Royal Institute of Technology and is a much appreciated event by students as well as companies. The Physics Chapter consists of Engineering Physics students and students from the new programme in Engineering Mathematics.",
                    "PLATS" => "<b>Location:</b>",
                    "GRADUATELAND" => "Graduateland",
                    "TID" => "<b>Time: </b>",
                    "TID2" => "24th of January, 10:00-16:00",
                    "TID3" => "",
                    "STORTTACK" => "Big thanks to Fusion's main sponsor <b>Ericsson</b>",
                    "VIFINNS" => "You can also find us here:",
                    "HITTA" => "Find your way to Fusion",
                    "VAR" => "fusion.graduateland.com",
                    "ADRESS_GRAD" => "Graduateland",
                    "ADRESS" => "Nymble, Drottning Kristinas väg 15-19",
                    "ORT" => "114 28 Stockholm",
                    "PROJEKTLEDARE" => "Project manager",
                    "VICEPROJEKTLEDARE" => "Vice project manager",
                    "LEDARE" => "Evelina Stenseth",
                    "FORETAGSKONTAKT" => "Company Relations",
                    "LANKAR" => "Links",
                    "VARADEL" => "Do you want to be a part of Fusion 2023?",
                    "SKICKA" => "Send us a message and we will come back to you!",
                    "TILLANMALAN" => "Read more",
                    "UTSTALLARE2019" => "Exhibitors of Fusion 2019",
                    "UTSTALLARE2020" => "Exhibitors of Fusion 2020",
                    "UTSTALLARE2021" => "Exhibitors of Fusion 2021",
                    "UTSTALLARE2022" => "Exhibitors of Fusion 2022",
                    "KONTAKTAFUSION" => "Contact Fusion",
                    "PROJEKTGRUPP" => "<b>The project group</b> Fusion 2023",
                    "PROJEKTGRUPPEN" => "The Project Group",
                    "MARKNAD" => "Head of Communications",
                    "PR" => "PR",
                    "DESIGN" => "design",
                    "FORETAGSANSVARIGA" => "Company Relations",
                    "MASSAN" => "Fair",
                    "LOGISTIKANSVARIG" => "Head of logistics",
                    "EKONOMIANSVARIG" => "Treasurer",
                    "EVENTANSVARIG" => "Event responsible",
                    "FORSKARANSVARIG" => "Research Corner manager",
                    "FEST" => "Party/PR",
                    "SITTNING" => "Head of party",
                    "SALJCHEF" => "Head of company relations",
                    "SALJARE" => "Business contact",
                    "VILLVARAMED" => "Do you want to exhibit at Fusion?",
                    "SKICKAMEDDELANDE" => "Send a message to ",
                    "SAHORVI" => " and we will come back to you with more information",
                    "VARAPAKET" => "Our packages",
                    "MASSPAKET" => "Fair package",
                    "EVENTPAKET" => "Event package",
                    "HUVUDSPONSOR" => "Main sponsor",
                    "MONTER" => "Exhibition stand (m&#178;)",
                    "FORETAGSVARD" => "Exhibitor host",
                    "SOCIALMEDIA" => "Social media",
                    "SIDORIBROSCHYR" => "Pages in Fusion's brochure",
                    "LUNCHBILJETTER" => "Lunch coupons",
                    "JOBBANNONSER" => "Job ads",
                    "TILLSAMTLIGA" => "Unlimited",
                    "LUNCHFOREL" => "Event",
                    "BANKETTBILJETTER" => "After-fair dinner tickets",
                    "PREMIUMPARTNERSKAP" => "Premium partnership",
                    "PREMIUMTEXT" => "(*) Premium partnership inludes: Take over Fusions social medias for 3 days, a sender in the chapters newspaper The Force, bonus marketing as our main sponsor on social media, in the broschure and on our website.",
                    #"MONTER" => "Monter",
                    #"FORETAGSVARD" => "Företagsvärd",
                    #"SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    #"LUNCHBILJETTER" => "Lunchbiljetter",
                    #"TILLSAMTLIGA" => "Till samtliga representanter",
                    #"LUNCHFOREL" => "Lunchföreläsning, pub etc.",
                    #"BANKETTBILJETTER" => "Bankettbiljetter",
                    #"PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    #"PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar företagets logga på mässkarta, fotovägg under mässa och bankett, i sektionslokalen under januari, på tröja för projektgrupp och värdar samt på bankettbiljetter. Även en egen sida i bankettens sångblad.",
                    "UTVECKLAD" => "A website developed by Oskar Söderberg and maintained by Adrian Vågberg",
                    "BROSCHYR2022" => "Brochure 2022",
                    "BROSCHYR2021" => "Brochure 2021",
                    "BROSCHYR2020" => "Brochure 2020",
                    "BROSCHYR2019" => "Brochure 2019",
                    "HEMTITEL" => "Fusion | The Physics Chapter's Career Fair",
                    "KONTAKTTITEL" => "Contact us | Fusion",
                    "FORFORETAGTITEL" => "For exhibitors | Fusion",
                    "UTSTALLARETITEL" => "Exhibitors | Fusion",
                    "BLIHUVUDSPONSOR" => "Are you interested being the highlight of this year's career fair through extended marketing (for example right here) and hosting extra events? Become a main sponsor!",
                    "KONTAKTAOSS" => "Learn more about it under the \"For exhibitors\" page, or contact us at ",
                    "MAILFORETAGSKONTAKT" => "fusion@f.kth.se",
                    "MAILPL" => "plfusion@f.kth.se",
                    "MAILPROJEKTGRUPPEN" => "projektfusion@f.kth.se"
                    );
}

?>
