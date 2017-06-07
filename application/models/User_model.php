<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
 
/**
 
*
 
*/
 
class User_model extends CI_Model
 
{
     public function show_antenna_data_by_date($timestamp) {   
    
$condition = "date(time_stamp)=" . "'" . $timestamp . "'";     
// $condition=date($timestamp);
//$sql="SELECT antenna_name,tag_event  FROM shed_53 WHERE $condition GROUP  BY antenna_name,tag_event";  
 $sum="SELECT antenna_name,
SUM (case when tag_event = 'Leave' then 1 else 0 end) as leaves,
sum (case when tag_event = 'Enter' then 1 else 0 end) as enters FROM shed_53 WHERE $condition GROUP BY antenna_name order by 2 desc, 3" ;     
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
 
public function read(){
 //$sum="SELECT antenna_name,reader_name,epc
//FROM shed_53 GROUP BY antenna_name,reader_name,epc    LIMIT 50" ;
     $sum="SELECT antenna_name
FROM shed_53 GROUP BY antenna_name LIMIT 50" ;
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
    public function epc(){
 //$sum="SELECT antenna_name,reader_name,epc
//FROM shed_53 GROUP BY antenna_name,reader_name,epc    LIMIT 50" ;
     $sum="SELECT epc
FROM shed_53 GROUP BY epc LIMIT 50" ;
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
    public function reader(){
 //$sum="SELECT antenna_name,reader_name,epc
//FROM shed_53 GROUP BY antenna_name,reader_name,epc    LIMIT 50" ;
     $sum="SELECT reader_name
FROM shed_53 GROUP BY reader_name" ;
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
   
 
   public function insert($data){
 
       
 
       $this->user_name    = $data['antenna_name']; // please read the below note
 
       $this->user_password  = $data['reader_name'];
 
       $this->user_type = $data['epc'];
 
 
 
       if($this->db->insert('shed_53',$this))
 
       {    
 
           return 'Data is inserted successfully';
 
       }
 
         else
 
       {
 
           return "Error has occured";
 
       }
 
   }
 
 
 
   public function update($id,$data){
 
   
 
      $this->user_name    = $data['name']; // please read the below note
 
       $this->user_password  = $data['pass'];
 
       $this->user_type = $data['type'];
 
       $result = $this->db->update('tbl_user',$this,array('user_id' => $id));
 
       if($result)
 
       {
 
           return "Data is updated successfully";
 
       }
 
       else
 
       {
 
           return "Error has occurred";
 
       }
 
   }
 
 
 
   public function delete($id){
 
   
 
       $result = $this->db->query("delete from `tbl_user` where user_id = $id");
 
       if($result)
 
       {
 
           return "Data is deleted successfully";
 
       }
 
       else
 
       {
 
           return "Error has occurred";
 
       }
 
   }
 
 
 
}