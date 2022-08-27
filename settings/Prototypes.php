<?php

namespace Quest\Engines;

use Quest\Settings\QuestionsParameters,
    Quest\Settings\Stats;

class Prototypes {

    /**
     * Giullare, Bardo, Poeta, Rocker
     *
     * @var array
     */
    protected static array $TRICKSTER = [
        'answers' => [
            QuestionsParameters::AWAY_FROM_FAMILY,
            QuestionsParameters::ROAD,
            QuestionsParameters::SEER,
            QuestionsParameters::REVENGE,
            QuestionsParameters::DECEPTION,
            QuestionsParameters::FREAK,
            QuestionsParameters::UNIQUE_WEAPON,
            QuestionsParameters::QUOTE_WILDE
        ],
        'primary_attributes' => [
            Stats::CHARM, Stats::AGILITY
        ],
        'secondary_attributes' => [
            Stats::MIGHT, Stats::WIT
        ]
    ];

    /**
     * Paladino, Nomade
     *
     * @var array
     */
    protected static array $NAIVE_WARRIOR = [
        'answers' => [
            QuestionsParameters::COUNTRYSIDE,
            QuestionsParameters::SMALL_COMMUNITY,
            QuestionsParameters::ANCIENT_WORDS,
            QuestionsParameters::PROTECT_LOVED_ONES,
            QuestionsParameters::ALLIES,
            QuestionsParameters::GULLIBLE,
            QuestionsParameters::PET,
            QuestionsParameters::QUOTE_TOLKIEN
        ],
        'primary_attributes' => [
            Stats::MIGHT, Stats::AGILITY
        ],
        'secondary_attributes' => [
            Stats::WIT, Stats::CHARM
        ]
    ];

    /**
     * Raffinato cortigiano, Corporativo in carriera
     *
     * @var array
     */
    protected static array $TROUBLEMAKER = [
        'answers' => [
            QuestionsParameters::CITY,
            QuestionsParameters::COLLEGE,
            QuestionsParameters::REFINED_TEACHER,
            QuestionsParameters::INFLUENCE,
            QuestionsParameters::DECEPTION,
            QuestionsParameters::TREACHEROUS,
            QuestionsParameters::ETIQUETTE,
            QuestionsParameters::QUOTE_MACHIAVELLI
        ],
        'primary_attributes' => [
            Stats::CHARM, Stats::WIT
        ],
        'secondary_attributes' => [
            Stats::AGILITY, Stats::MIGHT
        ]
    ];

    /**
     * Capo di una setta, Samurai della strada
     *
     * @var array
     */
    protected static array $VISIONARY_GANG_LEADER = [
        'answers' => [
            QuestionsParameters::SUBURBS,
            QuestionsParameters::ROAD,
            QuestionsParameters::SEER,
            QuestionsParameters::REVENGE,
            QuestionsParameters::ALLIES,
            QuestionsParameters::FOOLISH,
            QuestionsParameters::STYLE,
            QuestionsParameters::QUOTE_ERASMO
        ],
        'primary_attributes' => [
            Stats::MIGHT, Stats::CHARM
        ],
        'secondary_attributes' => [
            Stats::AGILITY, Stats::WIT
        ]
    ];

    /**
     * Mago, Sciamano, Netrunner
     *
     * @var array
     */
    protected static array $BANAL_WIZARD = [
        'answers' => [
            QuestionsParameters::COUNTRYSIDE,
            QuestionsParameters::SECLUSION,
            QuestionsParameters::ANCIENT_WORDS,
            QuestionsParameters::KNOWLEDGE,
            QuestionsParameters::LEARNING,
            QuestionsParameters::FREAK,
            QuestionsParameters::PET,
            QuestionsParameters::QUOTE_TOLKIEN
        ],
        'primary_attributes' => [
            Stats::WIT, Stats::AGILITY
        ],
        'secondary_attributes' => [
            Stats::CHARM, Stats::MIGHT
        ]
    ];

    /**
     * Sensale, Fixer
     *
     * @var array
     */
    protected static array $NIHILIST_PARVENU = [
        'answers' => [
            QuestionsParameters::SUBURBS,
            QuestionsParameters::ROAD,
            QuestionsParameters::GANG,
            QuestionsParameters::INFLUENCE,
            QuestionsParameters::NETWORK,
            QuestionsParameters::TREACHEROUS,
            QuestionsParameters::STYLE,
            QuestionsParameters::QUOTE_WILDE    
        ],
        'primary_attributes' => [
            Stats::WIT, Stats::CHARM
        ],
        'secondary_attributes' => [
            Stats::AGILITY, Stats::MIGHT
        ]
    ];

    /**
     * Assassino di corte, Ninja Arasaka
     *
     * @var array
     */
    protected static array $UNINTELLIGIBLE_SHADOW = [
        'answers' => [
            QuestionsParameters::CITY,
            QuestionsParameters::SECLUSION,
            QuestionsParameters::REFINED_TEACHER,
            QuestionsParameters::KNOWLEDGE,
            QuestionsParameters::DECEPTION,
            QuestionsParameters::FREAK,
            QuestionsParameters::ETIQUETTE,
            QuestionsParameters::QUOTE_MACHIAVELLI
        ],
        'primary_attributes' => [
            Stats::AGILITY, Stats::WIT
        ],
        'secondary_attributes' => [
            Stats::MIGHT, Stats::CHARM
        ]
    ];
}