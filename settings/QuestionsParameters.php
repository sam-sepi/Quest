<?php

namespace Quest\Settings;

class QuestionsParameters {

    /**
     * Background where
     * 
     * Costanti relative al luogo
     * di origine del personaggio
     */
    const AWAY_FROM_FAMILY = 0;
    const COUNTRYSIDE = 1;
    const SUBURBS = 2;
    const CITY = 3;

    /**
     * Backround place of training
     * 
     * Costanti relative al luogo
     * della formazione
     */
    const SMALL_COMMUNITY = 4;
    const SECLUSION = 5;
    const ROAD = 6;
    const COLLEGE = 7;

    /**
     * Background donor
     * 
     * Costanti relative al donatore
     * durante il periodo della formazione
     */
    const ANCIENT_WORDS = 8;
    const SEER = 9;
    const GANG = 10;
    const REFINED_TEACHER = 11;

    /**
     * Purpose
     * 
     * Costanti relative allo scopo
     * del perosonaggio
     */
    const PROTECT_LOVED_ONES = 12;
    const REVENGE = 13;
    const KNOWLEDGE = 14;
    const INFLUENCE = 15;

    /**
     * Means
     * 
     * Il mezzo per ottenere il proprio scopo
     */
    const NETWORK = 16;
    const LEARNING = 17;
    const ALLIES = 18; 
    const DECEPTION = 19;

    /**
     * Flaw
     * 
     * Il difetto riconosciuto dagli altri
     */
    const GULLIBLE = 20;
    const FREAK = 21;
    const FOOLISH = 22;
    const TREACHEROUS = 23;

    /**
     * Particular
     * 
     * Il dettaglio che distingue il personaggio
     */
    const PET = 24;
    const STYLE = 25;
    const UNIQUE_WEAPON = 26;
    const ETIQUETTE = 27;

    /**
     * Quotes
     * 
     * Citazioni da scegliere in base
     * al setting
     */
    const QUOTE_WILDE = 28; //jokes
    const QUOTE_TOLKIEN = 29; //fantasy/science fiction
    const QUOTE_MACHIAVELLI = 30; //politics
    const QUOTE_ERASMO = 31; //prophecy
}