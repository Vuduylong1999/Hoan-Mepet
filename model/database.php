<?php
    function connect() {
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $databasename = "mepet";

        $conn = mysqli_connect($servername,$username,$password,$databasename);
        if (!$conn) {
            echo "Ket noi that bai" . mysqli_connect_error();
        }
        /* else {
            echo "Ket noi thanh cong";
        } */
        return $conn;
    }
    /* connect(); //kiem tra ket noi database */

    function get($table, $condition = array()) {
        $conn = connect();
        $sql = "select * from $table";
        if (!empty($condition)) {
            $sql .= " where";
            foreach ($condition as $key => $value) {
            $sql .= " $key = '$value' and";
            }
            $sql = trim($sql, "and");
        }
        $query = mysqli_query($conn, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }
    function getlow($table, $condition = array()) {
        $conn = connect();
        $sql = "select * from $table";
        if (!empty($condition)) {
            $sql .= " where";
            foreach ($condition as $key => $value) {
            $sql .= " $key <= '$value' and";
            }
            $sql = trim($sql, "and");
        }
        $query = mysqli_query($conn, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }
    function getorderby($table, $condition = array(), $ordertable, $ordertype, $number) {
        $conn = connect();
        $sql = "select * from $table";
        if (!empty($condition)) {
            $sql .= " where";
            foreach ($condition as $key => $value) {
            $sql .= " $key <= '$value' and";
            }
            $sql = trim($sql, "and");
        }
        if (!empty($ordertable)) {
            $sql .= " order by $ordertable";
        }
        if (!empty($ordertype)) {
            $sql .= " $ordertype";
        }
        if (!empty($number)) {
            $sql .= " limit $number";
        }
        $query = mysqli_query($conn, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }
    function insert($table, $data = array()) {
        $conn = connect();
        $key = array_keys($data);
        $fields = implode(",", $key);
        $value_str = '';
        foreach ($data as $key => $value) {
            $value_str .= "'$value',";
        }
        $value_str = trim($value_str,',');
        $sql = "insert into $table ($fields) values ($value_str)";
        $query = mysqli_query($conn,$sql);
        return $query;
    }
    function update($table, $data = array(), $condition = array()) {
        $conn = connect();
        $str = '';
        foreach ($data as $key => $value) {
            $str .= "$key = '$value',";
        }
        $str = trim($str, ",");
        $sql = "update $table set $str where ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' and";
        }
        $sql = trim($sql, 'and');
        $query = mysqli_query($conn, $sql);
        return $query;
    }
    function delete($table, $condition=array()) {
        $conn = connect();
        $sql = " delete from $table where ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' and";
        }
        $sql = trim($sql, 'and');
        $query = mysqli_query($conn, $sql);
        return $query;
    }
    /* $test = update('adminlogin', array('user'=>'test4', 'pass'=>'12345'),array('id'=>10)); */
?>