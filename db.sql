-- Force some data in until admin screens are built
create table event_types (event_type_code char(1),
event_type_name char(30));

insert into event_types values ('F','Family');
insert into event_types values ('E','Events');
insert into event_types values ('M','Mission');
insert into event_types values ('K','Kids');
insert into event_types values ('I','Finance');
insert into event_types values ('G','Groups');

Create table events
(event_id int INCREMENT BY 1 START WITH 1,
start_date datetime,
short_desc char(40),
long_desc char(200),
event_url char(100),
location char(100),
event_type_code char(1));

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2016-03-03',
  'How to Share Jesus at Work',
  'You want to share Christ with your co-worker, but how do you start?  Are there natural ways to have a conversation that leads to the gospel?  And how do you do it within the workplace environment without risking your job or relationships with co-workers?

Women With Purpose, a local ministry to women in the workforce, is providing this free event to provide some practical answers to those questions.  Jane Harrod, who works for a Fortune 500 company, will be sharing with us from her personal experience of having a ministry to her co-workers for 20 years.

Refreshments provided.  This event is free but please register at www.womenwithpurposeblog.com so we know how many to expect.',
  'http://www.oakcitychurch.com/node/6357',
  'Providence Baptist Church',
  'E'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-11-05',
  "Woman's conference",
  'PREPARE HIM ROOM: a two night even with speaker, Susan Heck, to help women prepare their hearts for the upcoming Christmas season with a message of lasting peace

THURSDAY & FRIDAY

NOVEMBER 5TH & 6TH, 2015

7:00 - 9:00 PM
Colonial Baptist Church
6051 Tryon Road
Cary, NC 27511
919-233-9100
Speaker:  Susan Heck

Date/Time:	11/5/2015 7:00 PM - 11/6/2015 9:00 PM
Contact:	Dawne Klatt
(919) 233-9100,
dklatt@colonial.org',
  'http://adult.colonial.org/2015-prepare-him-room/',
  'Colonial Baptist Church ',
  'E'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-10-05',
  'Financial coaching',
  '7:00-8:30
821 Buck Jones Road Raleigh, N.C. 27606
919-532-0620
Hope’s Financial Coaching Program is an 8-week learning experience designed to help you manage your money to the best of your ability. Whether just getting started with a budget, looking to develop a savings plan or seeking guidance on eliminating debt, our experienced coaching team is trained to help you apply biblical financial concepts to your daily life.

Whether just getting started with a budget, looking to develop a savings plan or seeking guidance on eliminating debt, our experienced coaching team is trained to help you apply biblical financial concepts to your daily life.

Understanding your current spending behavior.
Developing a plan for your monthly cash flow.
Learning the dangers associated with debt and how to eliminate debt for good.
Preparing a strategy to save for emergencies and future expenses.
Improving your financial decision-making process.',
  'http://www.gethope.net/financialcoaching/',
  'Hope Church',
  'F'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-10-06',
  'Gospel centered Marriage seminar',
  'This seminar is one piece of a five part series of seminars designed to facilitate mentoring relationships for married or engaged couples (one-on-one or in a group setting). Our goal in these seminars is to cover the key subjects that often hinder, but could greatly enhance, a couple’s ability to experience all that God intended marriage to be.

We believe that change that lasts happens in relationship. Private change tends to be short-lived change. Living things exposed to light grow. Living things kept in the dark wither. This is why we designed this series to encourage you to give your marriage the light of Christian community by studying these materials with others.

These materials are built upon a central premise – God gave us marriage so that we would know the gospel more clearly and more personally. It is the gospel that gives us joy. Marriage is the meant to be a living picture of the gospel-relationship between God and His bride, the church.

For this reason, we have two goals for you as you go through this study:

1. That you would get know and enjoy your spouse in exciting, new, and profoundly deeper ways, so that…

2. … you would get to know and enjoy God in exciting, new, and profoundly deeper ways.

This series of seminars is arranged around five topics that represent the most common challenges that face a marriage. While the challenges of each area are acknowledged, the tone of these seminars is optimistic. We believe that the that those things that cause the greatest pain when done wrongly bring the fullest joy when done according to God\’s design.

October 06

Tuesday
6:30 pm – 9:00 pm
3249 Blue Ridge Road
Raleigh NC 27612',
'http://summitrdu.onthecity.org/plaza/topics/0aa48965684d7a3a261ecad26990df38948dfa07',
'Summit Church',
  'E'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-10-31',
  'Support and Encouragement for Single Parents',
  'Led by D\'Lyn Ford

Wednesdays  |  6:30 - 8:00pm  |  Room 733  |  $20 for workbook

Are you a single parent? You\'ll find encouragement, practical advice, and new friends in our Single & Parenting group on Wednesday nights. Meet others and feel supported in your same life situation.

Single parents face a difficult challenge raising their children in today’s society. The good news is that there are great resources that can help you raise your children successfully according to God’s Word.

Each session starts with an insightful and practical video teaching featuring both parenting experts and real families, followed by small discussion groups. Workbooks are $20 and are a valuable resource during each meeting.

Child care for kids as young as 6 weeks old is available on Wednesday nights, plus there are programs for kids 3-years-old through high school. See everything that is offered at Wednesday Night Life.

For more information, please contact D\'Lyn Ford.',
  'http://www.crossroads.org/single-parenting',
  'Crossroads Fellowship Church',
  'E'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-10-06',
  'AWANA',
  'AWANA is a tool we use to sink Scripture into the hearts and minds of our kids, 3 years old through 5th grade, here at the Summit. We think one of the most important gifts we can give to the next generation is a deep and lasting knowledge of God\'s Word, and AWANA is designed to work with parents in cultivating that in the lives of our kids through an exciting, weekly experience where fun and learning go hand in hand.',
  'http://www.summitrdu.com/connect/family-ministries/kids/awana/',
  'Summit Church',
  'K'
  );

insert into events (start_date,
    short_desc,
    long_desc,
    event_url,
    location,
    event_type_code)
values ('2015-10-31',
  'Fall festival',
  'Your whole family is invited to a FREE and FUN afternoon of games, food, candy, and excitement at Providence! What else can you expect? We\'re glad you asked! Enjoy a pony ride, games for children of all ages, inflatables, a towering rock wall and more!

Come dressed up in your favorite costume. Please no scary or inappropriate costumes.

October 31st

3pm-5pm

6339 Glenwood Avenue, Raleigh, NC 27612',
  'http://www.pray.org/ekk_eventpage.php?slug=762943-2015-10-31-fall-festival',
  'Providence Baptist Church',
  'F'
  );
