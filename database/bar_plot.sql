use 20223S_CPS5100_01db;
CREATE TABLE organ_recipient_interaction_rate(
id int NOT NULL auto_increment primary key,
month_of_interactions varchar(50),
interactions integer
);
INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("January", 10);
INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("February", 20);
INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("March", 30);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("April", 40);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("May", 30);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("June", 20);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("July", 10);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("August", 20);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("September", 30);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("October", 40);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("November", 30);
 INSERT INTO organ_recipient_interaction_rate(month_of_interactions, interactions)
 VALUES("December", 20);
 Select month_of_interactions, interactions FROM organ_recipient_interaction_rate;