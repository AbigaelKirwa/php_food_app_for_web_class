<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-view.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Vegan Shop | Admin Page</title>
</head>
<body>
    <div class="container">
        <div class="container-heading">
            <h1>Admin View</h1>
        </div>
        <div class="table-one">
            <div class="table-one-heading">
                <h1>Client Credentials</h1>
            </div>
            <table>
            <tr>
                    <th>Username</th>
                    <th>Confirm Password</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Actions</th>
            </tr>
            <tbody>
                    <?php
                        include("connect.php");
                        $sql_select = "SELECT  * FROM `client_register`";
                        $results = $conn->query($sql_select);
                        if($results -> num_rows > 0){
                        $results = $conn->query($sql_select);

                        //define total number of results you want per page  
                        $results_per_page = 3;  

                        $number_of_result = mysqli_num_rows($results); 
                        //determine the total number of pages available  
                        $number_of_page = ceil ($number_of_result / $results_per_page);  

                            //determine which page number visitor is currently on  
                        if (!isset ($_GET['page']) ) {  
                            $page = 1;  
                        } else {  
                            $page = $_GET['page'];  
                        } 

                         //determine the sql LIMIT starting number for the results on the displaying page  
                        $page_first_result = ($page-1) * $results_per_page;  
                    
                        //retrieve the selected results from database   
                        $query = "SELECT *FROM `client_register` LIMIT " . $page_first_result . ',' . $results_per_page;  
                        $results = mysqli_query($conn, $query);  
  
                        
                        while($row = $results -> fetch_assoc()){
                            ?>
                           <tr>
                               <td><?php echo $row['username']; ?></td>
                               <td><?php echo $row['password']; ?></td>
                               <td><?php echo $row['confirm-password']; ?></td>
                               <td><?php echo $row['email']; ?></td>
                               <td><a name="update" href="update_registered_client.php?id=<?php echo $row['sign_up_id']; ?>">EDIT</a>&nbsp;<br><br>
                               <a name="delete" href="delete_registered_client.php?id=<?php echo $row['sign_up_id']; ?>">DELETE</a></td>
                           </tr>
                           <?php
                        }
                            //display the link of the pages in URL  
                        for($page = 1; $page<= $number_of_page; $page++) {  
                            echo '<a class = "pages" href = "admin-view-registered-clients-and-admins.php?page=' . $page . '">' . $page . ' </a>';  
                        }  
                     }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="buttons">
            <div class="div_delete">
                <button name="delete_btn" ><a href="register_client.php">Create user</a></button>
            </div>
        </div>
        <div class="table-two">
            <div class="table-one-heading">
                <h1>Admin Credentials</h1>
            </div>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Confirm-Password</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php
                include("connect.php");
                //fetch from database
                $sql_select = "SELECT  * FROM `admin_register`";
                $results = $conn->query($sql_select);

                if($results -> num_rows > 0)
                {
                    //define total number of results you want per page  
                    $results_per_page = 3;  

                    $number_of_result = mysqli_num_rows($results); 
                    //determine the total number of pages available  
                    $number_of_page = ceil ($number_of_result / $results_per_page);  

                        //determine which page number visitor is currently on  
                    if (!isset ($_GET['page']) ) {  
                        $page = 1;  
                    } else {  
                        $page = $_GET['page'];  
                    } 

                        //determine the sql LIMIT starting number for the results on the displaying page  
                    $page_first_result = ($page-1) * $results_per_page;  
                
                    //retrieve the selected results from database   
                    $query = "SELECT *FROM `admin_register` LIMIT " . $page_first_result . ',' . $results_per_page;  
                    $results = mysqli_query($conn, $query);  
                    while($row = $results -> fetch_assoc()){
                        ?>
                       <tr>
                           <td><?php echo $row['username']; ?></td>
                           <td><?php echo $row['password']; ?></td>
                           <td><?php echo $row['confirm-password']; ?></td>
                           <td><?php echo $row['email']; ?></td>
                           <td><a name="update" href="update_registered_admin.php?id=<?php echo $row['sign_up_id']; ?>">EDIT</a>&nbsp;<br><br>
                           <a name="delete" href="delete_registered_admin.php?id=<?php echo $row['sign_up_id']; ?>">DELETE</a></td>
                       </tr>
                       <?php
                    }
                }
                //display the link of the pages in URL  
                for($page = 1; $page<= $number_of_page; $page++) {  
                    echo '<a class = "pages" href = "admin-view-registered-clients-and-admins.php?page=' . $page . '">' . $page . ' </a>';  
                }  
            ?>
            </table>
        </div>
        <div class="buttons">
            <div class="div_delete">
                <button name="delete_btn" ><a href="register_admin.php">Create user</a></button>
            </div>
        </div>
        <footer>
        <p><a href="admin-landing-page.php">Back</a></p>
        </footer>
        

    </div>
    
</body>

</html>