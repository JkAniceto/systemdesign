<?php
    class dish{
        public $feedback;
        public $ordersLinkId;
        public $userlinkId;

        function __construct($feedback,$ordersLinkId,$userlinkId){
            $this-> feedback = $feedback;
            $this-> ordersLinkId = $ordersLinkId;
            $this-> userlinkId = $userlinkId;
        }

        function getAllDishes(){
            include_once('connection.php');
			$sql = mysqli_query($conn,"select * from dishes_tb");
            if (mysqli_num_rows($sql)) {
                $arr = array();
                while($rows = mysqli_fetch_assoc($sql)){
                    array_push($arr,$rows);
                }
                return($arr);
            }

        }

        function giveFeedBackToDish(){
            include_once('connection.php');
            $query = "insert into feedback_tb(feedback, ordersLinkId, userlinkId) values('{$this->feedback}', '{$this->ordersLinkId}', '{$this->userlinkId}')";
            if($conn->query($query))
                echo "<script>alert('feedback sent thanks!'); window.location.replace('customerOrdersList.php');</script>";
            else
                echo "<script>alert('fail to send feedback!');</script>";
        }


        function checkIfAlreadyFeedback(){
            include_once('connection.php');
              // CHECKING
              // $result = mysqli_query($conn,"SELECT * FROM `feedback_tb` WHERE `id`= 20");
              // while($data = mysqli_fetch_assoc($result)){
              //     echo $data["userlinkid"];

                  $sql = mysqli_query($conn,"SELECT *
                    FROM user_tb
                    INNER JOIN  orderList_tb
                    ON user_tb.userlinkId = orderList_tb.userlinkId
                    INNER JOIN  feedback_tb
                    ON orderList_tb.userlinkId = feedback_tb.userlinkId");
                    print_r($sql);

                    // $result = mysqli_query($conn, $sql)
                    // print_r($sql);
                    // $result = mysqli_query($conn,$sql);
                    // if ($result)
                    // {
                    //
                    // $row = mysqli_num_rows($result);
                    //
                    // if ($row)
                    // {
                    //   printf("Number of row in the table : " . $row);
                    // }
                    //
                    //   mysqli_free_result($result);
                    // }







                  // if (mysqli_num_rows($sql)) {
                    // if($conn->query($sql))
                    // if(mysqli_num_rows($sql)) {
                        // if($num_rows == 1)
                        // print_r($sql);

                        // {
                        //     echo "Feedback not Sent!";
                        // }
                        // else
                        // {
                        //     echo "Already send a feedback!";
                        // }
                    }
          }





?>
