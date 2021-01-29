<?php
/* ALLE PAGINA'S EN REFERENTIES, VERGEET NIET OVERIGE LINKS IN DE BODY AAN TE PASSEN */
function getPages()
{
    $navbarLinks = [
        'hoofdpagina' => [
            'tekst' => 'Hoofdpagina',
            'document' => 'index'
        ],
        'werkplaatsPagina' => [
            'tekst' => 'Werkplaats',
            'document' => 'werkplaats'
        ],
        'occasionsPagina' => [
            'tekst' => 'Occasions',
            'document' => 'occasions'
        ],
        'overOnsPagina' => [
            'tekst' => 'Over ons',
            'document' => 'over-ons'
        ],
        'contactPagina' => [
            'tekst' => 'Contact',
            'document' => 'contact'
        ]
    ];
    return $navbarLinks;
}

function frontContainer($title)
{
    echo '<div class="front-image-container" style="background-color: var(--saab-color2); background-image: url(\'./images/' . $title . '/front-image.png\');">
                <p class="front-text">' . $title . '</p>
                <a href="#text">
                    <svg width="45px" viewBox="0 0 16 16" class="arrow bi bi-arrow-down-circle" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path fill-rule="evenodd" d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                      <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
            </div>
            <div class="front-text-container col-10 offset-1 col-md-6 offset-md-3" id="text">
            ';
}