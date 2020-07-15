<?php

$conn = mysqli_connect("localhost", "root", "123456", "project");
if (!$conn) {
    echo "Error";
}

if ($_GET['str'] == 'add') {
    $first = '<div class="form-row">
    <div class="form-group col-md-5">
    <input type="text" class="form-control" id="purpsave" name="selectpurpose">
    </div></div>';

    echo $first;
}

if ($_GET['str'] == 'savedet') {
    $sql = "INSERT INTO ddfrom(ddno,date,purpose,amount,bank,name,regno,dept,faculty,year) VALUES('" . $_POST["ddno"] . "' , '" . $_POST["date"] . "','" . $_POST["selectpurpose"] . "' , '" . $_POST["amount"] . "' , '" . $_POST["bank"] . "','" . $_POST["name"] . "', '" . $_POST["regno"] . "', '" . $_POST["selectdept"] . "', '" . $_POST["selectfac"] . "', '" . $_POST["selectyear"] . "')";
    //ECHO $sql;
    if (mysqli_query($conn, $sql)) {
        echo "Successfully Inserted!";
    }
}

if ($_GET['str'] == 1) {
    $fetch = "SELECT purpose FROM ddpurpose";
    $res = mysqli_query($conn, $fetch);
    $first = "<option selected>Select Purpose</option>";
    while ($row =  mysqli_fetch_array($res)) {
        $first .= "<option>" . $row["purpose"] . "</option>";
    }
    echo $first;
}

if ($_GET['str'] == 2) {
    $fetch = "SELECT dept FROM dddept";
    $res = mysqli_query($conn, $fetch);
    $first = "<option selected>Select Department</option>";
    while ($row =  mysqli_fetch_array($res)) {
        $first .= "<option>" . $row["dept"] . "</option>";
    }
    echo $first;
}

if ($_GET['str'] == 3) {
    $fetch = "SELECT faculty FROM ddfaculty";
    $res = mysqli_query($conn, $fetch);
    $first = "<option selected>Select Faculty</option>";
    while ($row =  mysqli_fetch_array($res)) {
        $first .= "<option>" . $row["faculty"] . "</option>";
    }
    echo $first;
}

if ($_GET['str'] == 'purpsave') {
    $sql = "INSERT INTO ddpurpose(purpose) VALUES('" . $_POST["purpsave"] . "')";
    mysqli_query($conn, $sql);
}

if ($_GET['str'] == "report") {
    ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <table id="example" class="hover diplay compact ui celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DD Number</th>
                <th>Date</th>
                <th>Purpose</th>
                <th>Amount</th>
                <th>Bank</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Year</th>
                <th>DateStamp</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM ddfrom";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ddno'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['purpose'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['bank'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['faculty'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['datetime'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
?>

<?php

if ($_GET['str'] == "fildep") {
    ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <table id="example" class="hover diplay compact ui celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DD Number</th>
                <th>Date</th>
                <th>Purpose</th>
                <th>Amount</th>
                <th>Bank</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Year</th>
                <th>DateStamp</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM ddfrom WHERE dept=  '" . $_POST["depart"] . "'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ddno'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['purpose'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['bank'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['faculty'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['datetime'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

<?php
}
?>

<?php

if ($_GET['str'] == "filfac") {
    ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <table id="example" class="hover diplay compact ui celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DD Number</th>
                <th>Date</th>
                <th>Purpose</th>
                <th>Amount</th>
                <th>Bank</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Year</th>
                <th>DateStamp</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM ddfrom WHERE faculty=  '" . $_POST["faculty"] . "'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ddno'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['purpose'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['bank'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['faculty'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['datetime'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

<?php
}
?>
<?php
if (isset($_POST["query"])) {

    ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <table id="example" class="hover diplay compact ui celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DD Number</th>
                <th>Date</th>
                <th>Purpose</th>
                <th>Amount</th>
                <th>Bank</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Year</th>
                <th>DateStamp</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $search = mysqli_real_escape_string($conn, $_POST['query']);
            $sql = "SELECT * FROM ddfrom WHERE regno LIKE '%" . $search . "%'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['ddno'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['purpose'] . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['bank'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['regno'] . "</td>";
                    echo "<td>" . $row['dept'] . "</td>";
                    echo "<td>" . $row['faculty'] . "</td>";
                    echo "<td>" . $row['year'] . "</td>";
                    echo "<td>" . $row['datetime'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

<?php
}
?>