<?php

function getGoogleReviews()
{
    /* Reviews van nieuw -> oud */
    $googleReviews = [
        [
            'accountId' => '116275300252187933888',
            'pfUrl' => '//lh3.googleusercontent.com/-RN5LhdalCdc/AAAAAAAAAAI/AAAAAAAAAAA/8gvh88QqMkA/w66-h66-p-rp-mo-br100/photo.jpg',
            'name' => 'Jorrit Tol',
            'content' => 'Vakmanschap, zeer vriendelijk, duidelijk in communicatie en meedenken in beste oplossing voor je Saab. Ik ga nooit meer naar een andere plek voor mijn Classic.',
            'date' => '2020-08-12',
            'stars' => 5
        ],
        [
            'accountId' => '112067194622256507166',
            'pfUrl' => '//lh6.googleusercontent.com/-PJAsm8_N01o/AAAAAAAAAAI/AAAAAAAAAAA/2rxRSzb4kxA/w66-h66-p-rp-mo-br100/photo.jpg',
            'name' => 'Michael Standers',
            'content' => 'Ik denk niet dat er een betere en kundigere SAAB-monteur bestaat: dit is een ábsolute autoriteit op het gebied van SAAB.',
            'positief' => 'Kwaliteit, professionaliteit, stiptheid en waarde',
            'date' => '2020-08-04',
            'stars' => 5
        ],
        [
            'accountId' => '105575586463491066081',
            'pfUrl' => '//lh4.googleusercontent.com/-XZYQQLT7dus/AAAAAAAAAAI/AAAAAAAAAAA/nCxxXVqyNKQ/w72-h72-p-rp-mo-br100/photo.jpg',
            'name' => 'Egbert Wientjes',
            'content' => 'Deze sympathieke Saab master technician voelt goed aan wat je als klant wil én voelt zich er zelf ook goed bij. Vakmanschap dus.',
            'date' => '2020-06-25',
            'stars' => 5
        ],
        [
            'accountId' => '100544555086286115787',
            'pfUrl' => '//lh4.googleusercontent.com/-Rnl2PV33z3A/AAAAAAAAAAI/AAAAAAAAAAA/D9AbDMT5EGo/w72-h72-p-mo/photo.jpg',
            'name' => 'Galaxy i9000',
            'content' => 'Snelle en goede service !',
            'date' => '2020-06-25',
            'stars' => 5
        ],
        [
            'accountId' => '111574648337955998701',
            'pfUrl' => '//lh6.googleusercontent.com/-G_DzgSzfTPM/AAAAAAAAAAI/AAAAAAAAAAA/cnvWsUL3tz4/w72-h72-p-rp-mo-br100/photo.jpg',
            'name' => 'John Niessen',
            'content' => 'De SAAB Specialist van midden Nederland🏅',
            'date' => '2020-06-14',
            'stars' => 5,
            'images' => [
                [
                    'image' => 'https://lh5.googleusercontent.com/p/AF1QipOJLVH1WwTAdsyCdkRSD0o93fFOpjf5sDvFH6GX=w100-h100-p-n-k-no',
                    'imageLink' => 'https://www.google.com/maps/uv?hl=nl&pb=!1s0x47c656ab94195555%3A0xce572cfdad3ec1b2!3m1!7e115!5sGoogle%20zoeken!15sCgIgAQ&imagekey=!1e10!2sAF1QipOJLVH1WwTAdsyCdkRSD0o93fFOpjf5sDvFH6GX
'
                ],
                [
                    'image' => 'https://lh5.googleusercontent.com/p/AF1QipPVBoV3tVOfsm6NbXsYoDqyHNZ4b790q23F63E9=w100-h100-p-n-k-no',
                    'imageLink' => 'https://www.google.com/maps/uv?hl=nl&pb=!1s0x47c656ab94195555%3A0xce572cfdad3ec1b2!3m1!7e115!5sGoogle%20zoeken!15sCgIgAQ&imagekey=!1e10!2sAF1QipPVBoV3tVOfsm6NbXsYoDqyHNZ4b790q23F63E9'
                ]
            ]
        ],
        [
            'accountId' => '102897286413817875951',
            'pfUrl' => '//lh6.googleusercontent.com/-9wulBSuvvjM/AAAAAAAAAAI/AAAAAAAAAAA/g7QWrboN-OA/w72-h72-p-mo/photo.jpg',
            'name' => 'Erik Ebbers',
            'content' => 'Man met kennis van zaken. Top bedrijf.',
            'date' => '2020-06-04',
            'stars' => 5,
            'images' => [
                [
                    'image' => 'https://lh5.googleusercontent.com/p/AF1QipN3qEiAhrh1iUPoIkErbEDl-3wHFcKgju6rzssg=w100-h100-p-n-k-no',
                    'imageLink' => 'https://www.google.com/maps/uv?hl=nl&pb=!1s0x47c656ab94195555%3A0xce572cfdad3ec1b2!3m1!7e115!5sGoogle%20zoeken!15sCgIgAQ&imagekey=!1e10!2sAF1QipN3qEiAhrh1iUPoIkErbEDl-3wHFcKgju6rzssg'
                ]
            ]
        ],
        [
            'accountId' => '114019787021355303730',
            'pfUrl' => '//lh5.googleusercontent.com/-F8TO2kkV-Lo/AAAAAAAAAAI/AAAAAAAAAAA/aFn_vVRWDuM/w72-h72-p-rp-mo-br100/photo.jpg',
            'name' => 'D Boers',
            'content' => 'Vakmonteur weet overal een oplossing voor prettig in omgang.',
            'date' => '2020-05-27',
            'stars' => 5,
            'images' => [
                [
                    'image' => 'https://lh5.googleusercontent.com/p/AF1QipP-HL7rMVN6-p2B4KNVkEK-c8wOJLhGFmLE2MhX=w100-h100-p-n-k-no',
                    'imageLink' => 'https://www.google.com/maps/uv?hl=nl&pb=!1s0x47c656ab94195555%3A0xce572cfdad3ec1b2!3m1!7e115!5sGoogle%20zoeken!15sCgIgAQ&imagekey=!1e10!2sAF1QipP-HL7rMVN6-p2B4KNVkEK-c8wOJLhGFmLE2MhX'
                ]
            ]
        ],
        [
            'accountId' => '101143759169627841579',
            'pfUrl' => '//lh3.googleusercontent.com/-kFp0Yta7qRE/AAAAAAAAAAI/AAAAAAAAAAA/sO9Ex0Wp01Y/w72-h72-p-rp-mo-br100/photo.jpg',
            'name' => 'Willem Tuizenga',
            'content' => 'Kundig, vriendelijk,zoekt oplossingen,kortom SUPER ADRES VOOR JE SAAB',
            'positief' => 'Kwaliteit en professionaliteit',
            'date' => '2020-05-09',
            'stars' => 5
        ],
        [
            'accountId' => '118177407188813600119',
            'pfUrl' => '//lh5.googleusercontent.com/-jwOfeJRLsHQ/AAAAAAAAAAI/AAAAAAAAAAA/iEY096pI15w/w40-h40-p-rp-mo-br100/photo.jpg',
            'name' => 'Inpactional Justice',
            'content' => '',
            'date' => '2020-03-14',
            'stars' => 5
        ],
        [
            'accountId' => '118235924839022809916',
            'pfUrl' => '//lh4.googleusercontent.com/-CpXPwmFm3SA/AAAAAAAAAAI/AAAAAAAAAAA/kKd5edfxojI/w72-h72-p-rp-mo-ba5-br100/photo.jpg',
            'name' => 'Hannes Sanders',
            'content' => 'Echte know how midden in het land',
            'date' => '2020-03-07',
            'stars' => 5
        ],
        [
            'accountId' => '101359654572569807461',
            'pfUrl' => '//lh4.googleusercontent.com/-F36_Z4_jFWY/AAAAAAAAAAI/AAAAAAAAAAA/U0NgRuhsFjs/w72-h72-p-rp-mo-br100/photo.jpg',
            'name' => 'Steven D',
            'content' => '',
            'positief' => 'Kwaliteit, professionaliteit, stiptheid en waarde',
            'date' => '2020-02-17',
            'stars' => 5
        ]
    ];

    return $googleReviews;
}