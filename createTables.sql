CREATE TABLE ESTONIA(
    SampleID varchar(50),
    Taxon varchar(25),
    Kingdom varchar(25),
    Phylum varchar(25),
    Class varchar(25),
    Ord varchar(60),
    Family varchar(60),
    Genus varchar(60),
    Species varchar(60),
    Rel_abundance varchar(25),
    Abs_abundance int(11));

CREATE TABLE RUSSIA(
    SampleID varchar(50),
    Taxon varchar(25),
    Kingdom varchar(25),
    Phylum varchar(25),
    Class varchar(25),
    Ord varchar(60),
    Family varchar(60),
    Genus varchar(60),
    Species varchar(60),
    Rel_abundance varchar(25),
    Abs_abundance int(11));

CREATE TABLE FINLAND(
    SampleID varchar(50),
    Taxon varchar(25),
    Kingdom varchar(25),
    Phylum varchar(25),
    Class varchar(25),
    Ord varchar(60),
    Family varchar(60),
    Genus varchar(60),
    Species varchar(60),
    Rel_abundance varchar(25),
    Abs_abundance int(11));

CREATE TABLE estoniaCount(
    phylum varchar(60) NOT NULL,
    numOf int(10),
    PRIMARY KEY (phylum));
)

CREATE TABLE russiaCount(
    phylum varchar(60) NOT NULL,
    numOf int(10),
    PRIMARY KEY (phylum));
)

CREATE TABLE finlandCount(
    phylum varchar(60) NOT NULL,
    numOf int(10),
    PRIMARY KEY (phylum));
)