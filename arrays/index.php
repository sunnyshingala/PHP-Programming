<?php 
    include 'dbh.php';
?>
<html>
    <head>
        <title>Array Examples</title>
    </head>
    <body>
        <?php
            // ARRAY ARE USED FOR IN PHP
            // $person = "Sunny";
            // $people = array("sunny","ravi");
            // echo $people[1];  

            //INSERT DATA INTO ARRAY
            // $data = array("Bhajji" , "Bhaji", "Bhavji");
            // array_push($data, 13, 1898, "Sunny");
            // array_push($data, "1i", 118, "roy1");
            // echo '<br>';
            // print_r($data);

            // Inserting database results into array
            // $sql = "SELECT * FROM data";
            // $result = mysqli_query($conn, $sql);
            // //$datas  = array();
            // if(mysqli_num_rows($result) > 0){
            //     while($row = mysqli_fetch_assoc($result)){
            //         //$datas[] = $row;
            //         echo $row['text'];
            //     }
            // }
            // // echo '<pre>';
            // // print_r($data);

            // foreach($datas as $data){
            //     echo $data['text'];

            // }
            // foreach($datas[0] as $data){
            //     echo $data;
            // }


            //different types of array

            //index array

            $data = array("Dineal" , "does" , "Dancing");
            // echo "Indexed array Result: ";
            // echo $data[0];

            // associative array

            $data = array("first" => "Sunny", "last" => "Shingala", "age" => 21);
            echo $data["first"];
            echo '<br>';
            print_r($data);
            echo '<br>';


            $data["first"] = "Sunny11";
            $data["lalst"] = "Shingala";
            $data["age"] = 21;
            print_r($data);


            
            //multi dimensional array

            $data = array(array("Sunny" , "Shingala"), "Pankaj", "Patel");


        ?>
    </body>
</html>