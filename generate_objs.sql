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
    name Char(255) NOT NULL, middleN Char(255) NOT NULL, lastN Char(255) NOT NULL, gender Char(20) NOT NULL, email Char(255) NOT NULL, number Char(25) NOT NULL
    primary key (artistId)
);

CREATE TABLE Band 
(
    bandId integer AUTO_INCREMENT,
    name Char(255) NOT NULL, member Char(255) NOT NULL , rate Char(255)NOT NULL, blNumber Char(255) NOT NULL, aStreet Char(255) NOT NULL, aCity Char(255) NOT NULL, aState Char(255) NOT NULL, aZip Char(255) NOT NULL, aEmail Char(255) NOT NULL, aPhone Char(255) NOT NULL 
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
