###########################################################
# CSCI 467 - Group Project - Spring 2018                  #
#                                                         #
# Progammer: Sam Piecz & Philip Boffa                     #
# Z-ID: Z1732715                                          #
# Section:                                                #
# TA:                                                     #
# Date Due:                                               # 
# Purpose:                                                # 
###########################################################

DROP TABLE IF EXISTS Artist;
DROP TABLE IF EXISTS Band;
DROP TABLE IF EXISTS Event;

CREATE TABLE Artist 
(
    artistId integer AUTO_INCREMENT,
    name Char(255),
    primary key (artistId)
);

CREATE TABLE Band 
(
    bandId integer AUTO_INCREMENT,
    name Char(255),
    primary key (bandId)
);

CREATE TABLE Event 
(
    eventId integer AUTO_INCREMENT,
    name Char(255),
    bandId int,
    artistId int,
    primary key (eventId)
    FOREIGN KEY (bandId) REFERENCES Band (bandId)
    FOREIGN KEY (artistId) REFERENCES Artist (artistId)
);
