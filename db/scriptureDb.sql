Drop table if exists Scripture;



CREATE TABLE Scripture (
    id          serial          not null primary key,
    Book        varchar(255)    not null,
    Chapter     int             not null,
    Verse       int             not null,
    Content     varchar(255)    not null
);




insert into Scripture
(
    Book
,   Chapter
,   Verse
,   Content
)
values
(
    'John'
,   1
,   5
,   'And the light shineth in darkness; and the darkness comprehended it not.'
);


insert into Scripture
(
    Book
,   Chapter
,   Verse
,   Content
)
values
(
    'Doctrine and Covenants'
,   88
,   49
,   'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.'
);

insert into Scripture
(
    Book
,   Chapter
,   Verse
,   Content
)
values
(
    'Doctrine and Covenants'
,   93
,   28
,   'Man was also in the beginning with God. Intelligence, or the light of truth, was not created or made, neither indeed can be.'
);


insert into Scripture
(
    Book
,   Chapter
,   Verse
,   Content
)
values
(
   'Mosiah'
,   16
,   9
,   'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);




