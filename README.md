# SM-RobotControlSystem Version 2
This is the second version of [Robot Control Panel](https://github.com/meshalAlbishi/SM-RobotControlSystem)

The First Version was to control the Arm only, in the second version it will control the arm base to make it move (Forward, Backward, Right, Left, Or Stop).

wait for it :) 

## What is the Task?
the repository will include the following sub tasks:

1. Re-Design the control panel UI to control the Arm and The base.
2. Re-Design the database to control the robot arm and The base, I'll use MySQL.
3. Connect the database with control panel.
4. Create a php page to connect the Arm and the base data with the actual hardware.
5. Design The UI to be a Mobile View also.


# Database Design
The database contains 4 table
1. Arm -> This table to monitor the power of the arm if it's (on/off)
2. Motors -> This table to add the motor which containt the following:
    - motor id
    - last saved degree
    - Forigen key to the Arm they belong to
    
3. Arm log -> to keep tracking the arm status and the date of last modify 
4. Motor log ->  to keep tracking each motor status and the date of last modify

5. Robot Base -> This table to add the robot base data which containt the following:
    - base id
    - direction
    - Forigen key to the Arm they belong to
