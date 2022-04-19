<!--<?php
    if (isset($_GET["ISP"])) {
        $ItemCode = $_GET["cboType"];
        $Item = $_GET["txtItem"];
        $Price = $_GET["txtPrice"];
        $Image = $_GET["txtImg"];
        $Des = $_GET["txtDes"];
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "project1");
        $sql = "insert into product values (NULL,'$ItemCode','$Image','$Item','$Price','$Des')";
        echo ("$sql");
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    ?>
    <script lang="javascript">
        alert("Add product success!!");
    </script>
<?php
    }
?>
-->

