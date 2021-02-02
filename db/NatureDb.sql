Drop table if exists Bathroom;
Drop table if exists Rating;
Drop table if exists Tag;

-- Have a rating table and a tag table that both link to the bathroom table through IDs
CREATE TABLE Bathroom (
    BathroomID      serial             not null primary key,
    Name            varchar(255)    not null,
    Description     varchar(255),
    Location        varchar(255)    not null,
    OverallRating   int,
    Image           varchar(255)
);

CREATE TABLE Rating (
    RatingID    serial             not null primary key,
    BathroomID  serial             not null references Bathroom(BathroomID),
    Name        varchar(255)    not null,
    Description varchar(255),
    Rating      int
);

CREATE TABLE Tag (
    TagID       serial             not null primary key,
    BathroomID  serial             not null references Bathroom(BathroomID),
    Name        varchar(255)    not null,
    Description varchar(255)
);


insert into Bathroom(name, Description, Location, OverallRating) 
values ('Austin 149 Female','the bathroom is nice. It has 3 handicap bathrooms. Pretty clean. However the door entry is hard to see.', 'Byui Austin Building', 4);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Austin 175 Male','single stall with one urinal and a tower sink with lockers. Good for Austin workers and adventures.', 'Byui Austin Building', 3);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Benson 292 Male','large and open, good for not feeling locked in', 'Byui Benson Building', 4);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Biddulph 141 Female','You can shower after you poop', 'Byui Biddulph Building', 3);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Biddulph 152 Female','the bathroom is huge. This big area only has 3 toilets. But a ton of hand wash. What a design.', 'Byui Biddulph Building', 3);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Biddulph 313 male','nice doors on the stalls for nervous poopers. Two urinals. A mirror that looks like a hidden door but is not."', 'Byui Biddulph Building', 4);
insert into Bathroom(name, Description, Location, OverallRating) 
values ('Biddulph Basement Unisex','no room number, bottom floor in biddulph.', 'Byui Biddulph Building', 2);

