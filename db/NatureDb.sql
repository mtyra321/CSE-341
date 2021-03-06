Drop table if exists Bathroom cascade;
Drop table if exists Rating;
Drop table if exists Tag;

-- Have a rating table and a tag table that both link to the bathroom table through IDs
CREATE TABLE Bathroom (
    bathroomID      serial          not null primary key,
    roomnumber      varchar(255)    not null,
    gender          varchar(255)    not null,
    description     varchar(255),
    building        varchar(255)    not null,
    overallrating   int,
    Image           varchar(255)
);

CREATE TABLE Rating (
    RatingID    serial             not null primary key,
    BathroomID  serial             not null references Bathroom(BathroomID),
    Name        varchar(255)    not null,
    description varchar(255),
    Rating      int
);

CREATE TABLE Tag (
    TagID       serial             not null primary key,
    BathroomID  serial             not null references Bathroom(BathroomID),
    Name        varchar(255)    not null,
    description varchar(255)
);


insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('149','Female','the bathroom is nice. It has 3 handicap bathrooms. Pretty clean. However the door entry is hard to see.', 'Austin', 4);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('175','Male','single stall with one urinal and a tower sink with lockers. Good for Austin workers and adventures.', 'Austin', 3);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('292','Male','large and open, good for not feeling locked in', 'Benson', 4);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('141','Female','You can shower after you poop', 'Biddulph', 3);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('152','Female','the bathroom is huge. This big area only has 3 toilets. But a ton of hand wash. What a design.', 'Biddulph', 3);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('313','male','nice doors on the stalls for nervous poopers. Two urinals. A mirror that looks like a hidden door but is not."', 'Biddulph', 4);
insert into Bathroom(roomnumber, gender,description, building, overallrating) 
values ('Basement','Unisex','no room number, bottom floor in biddulph.', 'Biddulph', 2);

