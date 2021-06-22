# SM-RobotControlSystem
It's a website enable you to control the robot arm that designed in [RobotArmCircuitDiagram](https://github.com/meshalAlbishi/SM-RobotArmCircuitDiagram)


## What is the Task?
the repository will include the following tasks:
1. Design the control panel UI
2. Create a database to control the robot arm, I'll use MySQL
3. Connect the database with control panel
4. Create a php page to connect the database with the actual hardware 


# Database Design
The database contains 4 table
1. Arm -> This table to monitor the power of the arm if it's (on/off)
2. Motors -> This table to add the motor which containt the following:
    - motor id
    - last saved degree
    - Forigen key to the Arm they belong to
    
3. Arm log -> to keep tracking the arm status and the date of last modify 
4. Motor log ->  to keep tracking each motor status and the date of last modify


![](https://github.com/meshalAlbishi/SM-RobotControlSystem/blob/main/db_files/db%20structure.png)
## Demo
Vedio demo available [here](https://github.com/meshalAlbishi/SM-RobotControlSystem/blob/main/localhost%20demo.mp4)

it will be available to demo from an online hosting: 
http://meshal-robot-control-system-v2.great-site.net/

but it's not working yet :') , still in progress..
