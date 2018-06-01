/* CREATE                                       // CREATE EVENT KEYWORDS
    [DEFINER = { user | CURRENT_USER }]         // specify user with privileges
    EVENT   
[IF NOT EXISTS]                                 // check to make sure name OK
    event_name                                  // event name
    ON SCHEDULE schedule                        // ON SCHEDULE KEYWORDS
    [ON COMPLETION [NOT] PRESERVE]              // keep or delete event after expiration, default = delete
    [ENABLE | DISABLE | DISABLE ON SLAVE]       // pertains to master/slave servers, does not apply here
    [COMMENT 'string']                          // detais
    DO event_body;

schedule:
AT timestamp [+ INTERVAL interval] ...
  | EVERY interval
    [STARTS timestamp [+ INTERVAL interval] ...]
    [ENDS timestamp [+ INTERVAL interval] ...]

interval:
quantity {YEAR | QUARTER | MONTH | DAY | HOUR | MINUTE |
              WEEK | SECOND | YEAR_MONTH | DAY_HOUR | DAY_MINUTE |
              DAY_SECOND | HOUR_MINUTE | HOUR_SECOND | MINUTE_SECOND} */

CREATE EVENT IF NOT EXISTS `Delete_Expired_Gigs` 
    ON SCHEDULE 
        EVERY 1 DAY STARTS CURRENT_TIMESTAMP 
    COMMENT 
        'Deletes gigs 30 days after posting' 
    DO 
        DELETE FROM Gigs 
        WHERE LastUpdated < (NOW() - INTERVAL 30 DAY);

/* DROP EVENT `delete_expired_gigs`; */
        