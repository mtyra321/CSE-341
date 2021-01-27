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


