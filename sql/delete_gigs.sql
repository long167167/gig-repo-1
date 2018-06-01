/* 
This script adds an event to delete gigs that were last updated more that 30 days ago. It will run immediately and then every day thereafter.
The following is from the MySQL documentation, and outlines the proper syntax and its options.

CREATE                                       // 'Create Event' Syntax
    [DEFINER = { user | CURRENT_USER }]             // specify user with privileges
    EVENT   
[IF NOT EXISTS]                                     // check to make sure name OK
    event_name                                      // event name
    ON SCHEDULE schedule                            // ON SCHEDULE KEYWORDS
    [ON COMPLETION [NOT] PRESERVE]                  // keep or delete event after expiration, default = delete
    [ENABLE | DISABLE | DISABLE ON SLAVE]           // pertains to master/slave servers, does not apply here
    [COMMENT 'string']                              // details/comments to explain purpose
    DO event_body;                                  // actions to take during this event

schedule:                                      // Options for Scheduling
AT timestamp [+ INTERVAL interval] ...              // ONCE at specified time OR
  | EVERY interval                                  // RECURRING at interval
    [STARTS timestamp [+ INTERVAL interval] ...]    // when to start running the event
    [ENDS timestamp [+ INTERVAL interval] ...]      // when to stop running the event

interval:                                      // Unit options for time
quantity {YEAR | QUARTER | MONTH | DAY | HOUR | MINUTE |
              WEEK | SECOND | YEAR_MONTH | DAY_HOUR | DAY_MINUTE |
              DAY_SECOND | HOUR_MINUTE | HOUR_SECOND | MINUTE_SECOND} 
              
              
The event will not be activated until the global event_scheduler variable has been turned ON. 
You can do this while logged in to the MySQL db.
mysql> SET GLOBAL event_scheduler = ON;

If the event_scheduler variable has been turned on and the script has been run, it will show under the Show Process List.
mysql> SHOW PROCESSLIST;
+----+-----------------+-----------+-------------+---------+------+-----------------------------+------------------+
| Id | User            | Host      | db          | Command | Time | State                       | Info             |
+----+-----------------+-----------+-------------+---------+------+-----------------------------+------------------+
| 31 | root            | localhost | gig_central | Query   |    0 | starting                    | show processlist |
| 32 | event_scheduler | localhost | NULL        | Daemon  | 1362 | Waiting for next activation | NULL             |
+----+-----------------+-----------+-------------+---------+------+-----------------------------+------------------+
2 rows in set (0.00 sec)

You can also display the events of a specified database
mysql> SHOW EVENTS FROM gig_central;
+-------------+---------------------+----------------+-----------+-----------+------------+----------------+----------------+---------------------+------+---------+------------+----------------------+----------------------+--------------------+
| Db          | Name                | Definer        | Time zone | Type      | Execute at | Interval value | Interval field | Starts              | Ends | Status  | Originator | character_set_client | collation_connection | Database Collation |
+-------------+---------------------+----------------+-----------+-----------+------------+----------------+----------------+---------------------+------+---------+------------+----------------------+----------------------+--------------------+
| gig_central | Delete_Expired_Gigs | root@localhost | SYSTEM    | RECURRING | NULL       | 1              | DAY            | 2018-06-01 14:14:28 | NULL | ENABLED |          0 | utf8                 | utf8_general_ci      | utf8_general_ci    |
+-------------+---------------------+----------------+-----------+-----------+------------+----------------+----------------+---------------------+------+---------+------------+----------------------+----------------------+--------------------+
1 row in set (0.00 sec)

*/

CREATE EVENT IF NOT EXISTS `Delete_Expired_Gigs` 
    ON SCHEDULE 
        EVERY 1 DAY STARTS CURRENT_TIMESTAMP 
    COMMENT 
        'Deletes gigs that have not been updated in the past 30 days' 
    DO 
        DELETE FROM Gigs 
        WHERE LastUpdated < (NOW() - INTERVAL 30 DAY);

/* 
If you want to remove the event, use:
DROP EVENT `Delete_Expired_Gigs`; 

*/