<?php
  class db{
  	private $conn;
  	public function __construct($host,$user,$pass,$db){
  		$this->conn=new mysqli($host,$user,$pass,$db);
  	}
  	// get all data from db
  	public function getAll($table,$cols){
  	$sql="SELECT $cols FROM $table";
  	$result=$this->conn->query($sql);
  	if($result->num_rows>0){
  		return $result->fetch_all(MYSQLI_ASSOC);//return data as associate array
  	}
  	return false;
    }
    // indiviual data select
    public function getByCondition($table,$cols,$condition){
    $sql="SELECT $cols FROM $table WHERE $condition";
    //echo $sql;
    $result=$this->conn->query($sql);

    if($result->num_rows>0){
      return $result->fetch_assoc();
    }
    return false;

    }
    // insert data
    public function insert($table,$cols){
    $sql="INSERT INTO $table SET $cols";
    $action=$this->conn->query($sql);
    if($this->conn->affected_rows>0){

      return true;
    }
    return false;
    }
    // create table
    public function getTable($table,$cols,$border=1,$css_classes=""){
    $count=1; // count collumn
    $data=$this->getAll($table,$cols);
    $table="<table border='$border' class='$css_classes'>";
    $table.="<tr>";
    foreach ($data[0] as $column => $val) {
      $count++;
      $table.="<th>".ucfirst($column)."</th>";

    }
    $table.="<th> Action</th>";
    $table.="</tr>";
    foreach ($data as $row) {
      $table.="<tr>";
      foreach ($row as $val) {
        $table.="<td>$val</td>";
      }
        $table.="<td><a href=\"edit.php?id=$row[id]\" class=\"btn btn-info btn-fill pull-center\">edit</a>|| <a href=\"delete.php?id=$row[id]\" class=\"btn btn-danger btn-fill pull-center\">Delete</a> </td>";
        $table.="</tr>";
    }
      
    $table.="</table>";
    return $table;
    }
    // data update
    public function update($table,$cols,$condition){
    $sql="UPDATE $table SET $cols WHERE $condition";
    $action=$this->conn->query($sql);
    if($this->conn->affected_rows>0){
      return true;
    }
    return false;
    }
    // data delete
    public function delete($table,$condition){
    $sql="DELETE FROM $table  WHERE $condition";
    $action=$this->conn->query($sql);
    if($this->conn->affected_rows>0){
      return true;
    }
    return false;
    }
  }
  
  $obj=new db ("localhost","root","","blog");
/*
  if($obj->insert("students","name= 'p',age='34', address='d'")){
    echo "success";
  }else{
    echo"fail";
  }*/

 /* if($obj->update("students","name= 'asa',age='29', address='dhaka'","id=33")){
    echo " update success";
  }else{
    echo"update fail";
  }*/
  /* if($obj->delete("students","id=2")){
    echo " delete success";
  }else{
    echo"delete fail";
  }

   echo"<pre>";
  print_r($obj->getall("students","*"));
*/
?>