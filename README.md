# tasks

# 1) PHP Test

     code is in "phptask" folder (changes made only in classes folder files)

     # Issues & Solutions
     
     a) Error: there is need of mehtod declaration or abstract method declaration (in classes/BankAccount.php)
  
        solution: Just declare "withdraw()" function in BankAccount.php

        First 2 conditions passed. 
     
     b) Error: Standard class object can not convert into int directly (during deposite addition - in BankAccount.php)

        solution: for convenience, convert class object into array to access values easily - in BankAccount.php. Also
                  to access "Money class obejct" values in BankAccount.php, just convert $amount (Money class variable)
                  from private to public in Money.php. Using same deposite, withdraw & transaction conditions are done. 
  
        Next 3 conditions passed.

     c) Exception Errors: need to generate mentioned exceptions as per operations

        solution: To throw mentioned exceptions, check relevant conditions & generate exception messages using statement
                  "throw new Exception('msg');". Using same remaining exception conditions are done.

        Next 4 conditions passed.  
                
# 2) Design Test:

    code is in "designtask" folder
