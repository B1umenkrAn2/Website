drop table Chemical;

drop table Morphology;

drop table Horizons;

drop table Physical;

drop table Profiles;

drop table Sites;

drop table Info;

drop table Chemical;

drop table Morphology;

drop table Horizons;

drop table Physical;

drop table Profiles;

drop table Sites;

drop table Info;


create table Info
(
    PEDON_ID   INTEGER not null,
    INFO_ID    INTEGER not null,
    CAL_YEAR   INTEGER,
    PROVINCE   TEXT,
    LOCALITY   TEXT,
    DD_LAT     REAL,
    DD_LONG    REAL,
    CONF_METRS INTEGER,
    ELEVATION  TEXT,
    EXTENT     TEXT,
    PURPOSE    TEXT,
    CSSC_ORDER TEXT,
    CSSC_GTGRP TEXT,
    CSSC_SBGRP TEXT,
    CSSC_NAME  TEXT,
    CSSC_CODE  TEXT,
    TX_FIT     TEXT,
    TX_FACTOR1 TEXT,
    TX_FACTOR2 TEXT,
    LANDUSE    TEXT,
    REPORT_ID  TEXT,
    PED_NOTES  TEXT,
    N_SITES    INTEGER,
    N_PROFILES INTEGER,
    N_CHEMICAL INTEGER,
    N_MORPH    INTEGER,
    N_HORIZONS INTEGER,
    N_PHYSICAL INTEGER,
    constraint Info_pk
        primary key (INFO_ID)
);

create table Chemical
(
    CHEM_ID    INTEGER not null,
    PEDON_ID   INTEGER not null,
    LAYER_ID   INTEGER,
    L_DEPTH    TEXT,
    U_DEPTH    INTEGER,
    CARB_ORG   REAL,
    CACO3_EQ   TEXT,
    PH_H2O     TEXT,
    PH_CACL2   TEXT,
    EXCH_AL    TEXT,
    EXCH_CA    TEXT,
    EXCH_H     TEXT,
    EXCH_K     TEXT,
    EXCH_MG    TEXT,
    EXCH_NA    TEXT,
    EXCH_PCHRG TEXT,
    CEC        TEXT,
    BASE_SATN  TEXT,
    X_ACIDITY  TEXT,
    NO3        TEXT,
    P_INORG    TEXT,
    P_ORG      TEXT,
    N_TOTAL    REAL,
    AVAIL_K    TEXT,
    CALCITE    TEXT,
    DOLOMITE   TEXT,
    constraint Chemical_pk
        primary key (CHEM_ID, PEDON_ID),
    constraint Chemical_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Chemical_CHEM_ID_uindex
    on Chemical (CHEM_ID);

create table Horizons
(
    HORIZ_ID   INTEGER not null,
    PEDON_ID   INTEGER not null,
    LAYER_ID   INTEGER not null,
    U_DEPTH    INTEGER,
    L_DEPTH    TEXT,
    MIN_THICK  TEXT,
    MAX_THICK  TEXT,
    HZN_MAS    TEXT,
    HZN_SUF    TEXT,
    HZN_MOD    TEXT,
    HZN_LIT    TEXT,
    BNDRY_DIST TEXT,
    BNDRY_FORM TEXT,
    HZN_NOTES  TEXT,
    constraint Horizons_pk
        primary key (HORIZ_ID),
    constraint Horizons_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Horizons_HORIZ_ID_uindex
    on Horizons (HORIZ_ID);

create unique index Info_INFO_ID_uindex
    on Info (INFO_ID);

create unique index Info_PEDON_ID_uindex
    on Info (PEDON_ID);

create table Morphology
(
    Morph_ID   INTEGER not null,
    PEDON_ID   INTEGER not null,
    LAYER_ID   INTEGER not null,
    U_DEPTH    INTEGER,
    L_DEPTH    TEXT,
    COLOUR_1   TEXT,
    COLOUR_2   TEXT,
    CONSIS_DRY TEXT,
    CONSIS_MST TEXT,
    CONSIS_PLS TEXT,
    CONSIS_WET TEXT,
    MOTTLE_FRQ TEXT,
    MOTTLE_SZE TEXT,
    ROOT_FREQ  TEXT,
    ROOT_LOCTN TEXT,
    ROOT_ORIEN TEXT,
    ROOT_THICK TEXT,
    S_PRM_GRAD TEXT,
    S_PRM_KIND TEXT,
    S_PRM_MOD  TEXT,
    S_PRM_SIZE TEXT,
    S_SEC_GRAD TEXT,
    S_SEC_KIND TEXT,
    S_SEC_MOD  TEXT,
    S_SEC_SIZE TEXT,
    SALINITY   TEXT,
    EFFERVESC  TEXT,
    constraint Morphology_pk
        primary key (PEDON_ID, Morph_ID, LAYER_ID),
    constraint Morphology_Horizons_LAYER_ID_fk
        foreign key (LAYER_ID) references Horizons (LAYER_ID),
    constraint Morphology_Horizons_L_DEPTH_fk
        foreign key (L_DEPTH) references Horizons (L_DEPTH),
    constraint Morphology_Horizons_U_DEPTH_fk
        foreign key (U_DEPTH) references Horizons (U_DEPTH),
    constraint Morphology_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Morphology_Morph_ID_uindex
    on Morphology (Morph_ID);

create table Physical
(
    PHY_ID     INTEGER not null,
    PEDON_ID   INTEGER not null,
    LAYER_ID   INTEGER,
    U_DEPTH    INTEGER,
    L_DEPTH    TEXT,
    T_SILT     TEXT,
    T_CLAY     TEXT,
    T_SAND     TEXT,
    VC_SAND    TEXT,
    C_SAND     TEXT,
    F_SAND     TEXT,
    M_SAND     TEXT,
    VF_SAND    TEXT,
    FIBRE      TEXT,
    BULK_DEN   TEXT,
    RETN_HYGR  TEXT,
    RETN_0KP   TEXT,
    RETN_33KP  TEXT,
    RETN_1500K TEXT,
    constraint Physical_pk
        unique (PHY_ID, PEDON_ID, LAYER_ID, U_DEPTH, L_DEPTH),
    constraint Physical_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Physical_PHY_ID_uindex
    on Physical (PHY_ID);

create table Profiles
(
    PROF_ID    INTEGER not null,
    PEDON_ID   INTEGER not null,
    DRAINAGE   TEXT,
    HUMUS_FORM TEXT,
    HUMUS_TYPE TEXT,
    PM1_MD_DEP TEXT,
    PM1_PHYS   TEXT,
    PM1_LIT_MD TEXT,
    PM1_CHEM   TEXT,
    PM1_WEATHR TEXT,
    PM2_MD_DEP TEXT,
    PM2_PHYS   TEXT,
    PM2_LIT_MD TEXT,
    PM2_CHEM   TEXT,
    PM2_WEATHR TEXT,
    TABLE_KIND TEXT,
    TABLE_DPTH TEXT,
    ROCK_DPTH  TEXT,
    CACO3_DPTH TEXT,
    PROF_NOTES TEXT,
    constraint Profiles_pk
        primary key (PEDON_ID),
    constraint Profiles_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Profiles_PROF_ID_uindex
    on Profiles (PROF_ID);

create table Sites
(
    PEDON_ID   INTEGER not null,
    SITES_ID   INTEGER not null,
    LF_MATERL  TEXT,
    STONINESS  TEXT,
    ROCKINESS  TEXT,
    SURF_EXP_1 TEXT,
    SURF_EXP_2 TEXT,
    SLP_POS    TEXT,
    SLP_PITCH  TEXT,
    SLP_ASPECT TEXT,
    SLP_LENGTH TEXT,
    SLP_TYPE   TEXT,
    GEN_MAT1   TEXT,
    GMAT1_MOD1 TEXT,
    GMAT1_MOD2 TEXT,
    GMAT1_MOD3 TEXT,
    GEN_MAT2   TEXT,
    MOD_PROC_1 TEXT,
    MOD_PROC_2 TEXT,
    MICRO_TOP  TEXT,
    constraint Sites_pk
        primary key (PEDON_ID),
    constraint Sites_Info_PEDON_ID_fk
        foreign key (PEDON_ID) references Info (PEDON_ID)
);

create unique index Sites_SITES_ID_uindex
    on Sites (SITES_ID);


