1. Signup form 

        - drop down with option values to be stored in db
        - username and password 
        - email address
        - name: first and last
        - Cop or Baron (1 or 0)
        ** ALL OF THESE must be joined together in the database, meaning that they must tie together and reference eachother. **  (INNER JOIN or JOIN)
        SELECT column_name(s)
        FROM table1
        INNER JOIN table2
        ON table1.column_name=table2.column_name;
        http://www.w3schools.com/sql/sql_join_inner.asp
        
        
2. Login Form

        - Username entry
        - Password entry
        
        - Database query   (if exists in database... database query ... approve or deny)
        -Redirection, either back to login page or to corresponding cop/barron page
        
        -Redirection code would be something like... if (database query for cop/barron table) 1, then {do something}, if 0, then {do something else}
        
        