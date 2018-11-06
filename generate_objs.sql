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

DROP TABLE IF EXISTS Event;
DROP TABLE IF EXISTS Artist;
DROP TABLE IF EXISTS Band;

CREATE TABLE Artist 
(
    artistId integer AUTO_INCREMENT,
    name Char(255) NOT NULL,
    middle_Name Char(255) NOT NULL,
    last_Name Char(255) NOT NULL,
    gender Char(20) NOT NULL,
    email Char(255) NOT NULL,
    numbers Char(25) NOT NULL,
    primary key (artistId)
);

CREATE TABLE Band 
(
    bandId integer AUTO_INCREMENT,
    name Char(255) NOT NULL,
    member Char(255) NOT NULL,
    rate Char(255) NOT NULL,
    bl_Number Char(255) NOT NULL,
    ag_Street Char(255) NOT NULL,
    ag_City Char(255) NOT NULL,
    ag_State Char(255) NOT NULL,
    ag_Zip Char(255) NOT NULL,
    ag_Email Char(255) NOT NULL,
    ag_Phone Char(255) NOT NULL, 
    primary key (bandId)
);

CREATE TABLE Event 
(
    eventId integer AUTO_INCREMENT,
    name Char(255),
    str_Date Char(255),
    end_Date Char(255),
    street Char(255),
    city Char(255),
    state Char(255),
    zip Char(255),
    status Char(255), 
    capacity Char(255),
    evnt_Manager Char(255),
    notes Char(255),
    bandId int,
    artistId int,
    primary key (eventId),
    FOREIGN KEY (bandId) REFERENCES Band (bandId),
    FOREIGN KEY (artistId) REFERENCES Artist (artistId)
);


INSERT INTO Artist (name, middle_name, last_name, gender, email, numbers) VALUES
('Phil', 'A', 'Boffa', 'M', 'philip@gmail.com', '6303622975'),
('Sam', 'W', 'Piecz', 'M', 'sam@gmail.com', '6303655654'),
('Mad', 'R', 'Keymentz', 'W', 'sarah@gmail.com', '6303629087');


INSERT INTO Band (name, member, rate, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES
('Cooler', 'Jake lee', '1000', '630282828', 'God ave', 'Naperville', 'IL', '65655', 'sijdfbkajfh@gmail.com', '6302228766'),
('Sam', 'West', '500', '3453334323', 'idc ave', 'Lisle', 'OK', '56044', 'fuck@gmail.com', '4561234567');









