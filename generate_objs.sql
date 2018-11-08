###########################################################
# CSCI 467 - Group Project - Spring 25518                  #
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
DROP TABLE IF EXISTS Agent;
DROP TABLE IF EXISTS BandMember;

CREATE TABLE Artist 
(
    artistId integer AUTO_INCREMENT,
    first_name Char(255) NOT NULL,
    middle_Name Char(255) NOT NULL,
    last_name Char(255) NOT NULL,
    gender Char(255) NOT NULL,
    street Char(255) NOT NULL,
    city Char(255) NOT NULL,
    state Char(255) NOT NULL,
    zip Char(255) NOT NULL,
    email Char(255) NOT NULL,
    phone_number Char(25) NOT NULL,
    pricing Char(25) NOT NULL,
    primary key (artistId)
);

CREATE TABLE Band 
(
    bandId integer AUTO_INCREMENT,
    name Char(255) NOT NULL,
    member Char(255) NOT NULL,
    notes Char(255) NOT NULL,
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
    event_Manager Char(255),
    notes Char(255),
    bandId int,
    artistId int,
    primary key (eventId),
    FOREIGN KEY (bandId) REFERENCES Band (bandId),
    FOREIGN KEY (artistId) REFERENCES Artist (artistId)
);


CREATE TABLE Agent 
(
    agentId integer AUTO_INCREMENT,
    agentName Char(255),
    primary key (agentId)
);

#CREATE TABLE BandMember 
#(
#    bandMemberId integer AUTO_INCREMENT,
#    bandId int,
#    title Char(255),
#    rate Char(255),
#    note Char(255),
#    primary key (bandMemberId)
#    FOREIGN KEY (bandId) REFERENCES Band (bandId),
#);

#CREATE TABLE Address;
#(
#    addressId integer AUTO_INCREMENT,
#    street Char(255),
#    city Char(255),
#    state Char(255),
#    zip_code int,
#
#);

INSERT INTO Agent (agentName) VALUES
('Bob Ross'),
('Jam Baxton II');

INSERT INTO Artist (first_name, middle_name, last_name, gender, street, city, state, zip, email, phone_number, pricing) VALUES
('Phil1', 'A', 'Boffa', 'M', 'Male', 'Some street', 'Some city', 'Some State', 'Some zip', 'philip@gmail.com', '6303622975'),
('Phil2', 'A', 'Boffa', 'M', 'Male', 'Some street', 'Some city', 'Some State', 'Some zip', 'philip@gmail.com', '6303622975'),
('Phil3', 'A', 'Boffa', 'M', 'Male', 'Some street', 'Some city', 'Some State', 'Some zip', 'philip@gmail.com', '6303622975'),
('Phil4', 'A', 'Boffa', 'M', 'Male', 'Some street', 'Some city', 'Some State', 'Some zip', 'philip@gmail.com', '6303622975');

INSERT INTO Band (name, member, rate, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES
('Cooler', 'Jake lee', '1000', '630282828', 'God ave', 'Naperville', 'IL', '65655', 'sijdfbkajfh@gmail.com', '6302228766'),
('Sam', 'West', '500', '3453334323', 'idc ave', 'Lisle', 'OK', '56044', 'fuck@gmail.com', '4561234567');


INSERT INTO Event (name, str_Date, end_Date, street, city, state, zip, status, capacity, event_Manager, notes, bandId, artistId) VALUES
("Event name", "Start Date", "End Date", "Street", "City", "State", "Zip", "Capacity", "Event Manager", "Notes", 1, 1);
