<?php 
class Chook_model extends CI_Model{
    
     //counting data for antenna ,enters and leaves
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
    //counting data for reader, enters and leaves
    public function show_reader_data_by_date($timestamp) {
     
$condition = "date(time_stamp)=" . "'" . $timestamp . "'";     
// $condition=date($timestamp);
//$sql="SELECT antenna_name,tag_event  FROM shed_53 WHERE $condition GROUP  BY antenna_name,tag_event";  
 $sum="SELECT reader_name,
SUM (case when tag_event = 'Leave' then 1 else 0 end) as leaves,
sum (case when tag_event = 'Enter' then 1 else 0 end) as enters FROM shed_53 WHERE $condition GROUP BY reader_name order by 2 desc, 3 " ;
     
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
     //counting data for epc, enters and leaves
    public function show_epc_data() {
     
//$condition = "date(time_stamp)=" . "'" . $timestamp . "'";     
// $condition=date($timestamp);
//$sql="SELECT antenna_name,tag_event  FROM shed_53 WHERE $condition GROUP  BY antenna_name,tag_event";  
 $sum="SELECT epc,
SUM (case when tag_event = 'Leave' then 1 else 0 end) as leaves,
sum (case when tag_event = 'Enter' then 1 else 0 end) as enters FROM shed_53 GROUP BY epc order by 2 desc, 3    LIMIT 50" ;
     
     
$query = $this->db->query($sum);
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
  
    
 public function show_all_data() {
     $this->db->select('*');
$this->db->from('employee_info');
$query = $this->db->get();
if ($query->num_rows() > 0) {
  
     
        $query = $this->db
              ->select('epc, count(tag_event) AS num_of_time')
              ->group_by('epc')
              ->order_by('num_of_time', 'desc')
              ->get('shed_53', 10);
//print_r($query->result());

//$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
     }
    
public function show_all() {

$this->db->select('count(*)');
$query = $this->db->get('shed_53');
$cnt = $query->row_array();
return $cnt['count(*)'];
}
}
    

/*
select antenna_name,
sum(case when tag_event ='leave' then 1 else 0 end) as leaves,
sum(case when tag_event ='enter' then 1 else 0 end) as enters,
from shed_53,
group_by 1;
*/
/*
<?php
class Lat_model extends CI_Model {
function ambil_data(){
$this->db->order_by(‘id’,’ASC’);
$query = $this->db->get(‘tbllat’);
return $query->result();
}
}
?>

5. lat.php (Controller)
<?php
class Lat extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model(‘lat_model’);
}
function index () {
if ($query = $this->lat_model->ambil_data()){
$data[‘rowrecord’]=$query;
}
$this->load->view(‘viewlat’, $data);
}
}
?>

6. viewlat.php
<h1>Daftar Tabel Latihan</h1>
<table border=”1″ cellpadding=”3″>
<tr>
<th>ID</th>
<th>Nama</th>
</tr>
<?php
if(isset($rowrecord)) {
foreach ($rowrecord as $row) {
echo “<tr>
<td>$row->id</td>
<td>$row->nama</td>
</tr>”;
}
}
else {
echo “No returned data”;
}
?> </table>
*/
    /*
   
   public function show_data_by_date($date) {
 $condition = "time_stamp =" . "'" . $date . "'";
     $this->db->order_by("antenna_name","tag_event");
 //$this->db->select_sum("tag_event");//standard codeigniter method for getting sum
 $this->db->where($condition); 
 $t= $this->db->get('shed_53')->row();
 return $t->tag_event;//gives Sum of barang_qty columns value
}
      
       
      */ 
       
    //$query = $this->db->select_sum('tag_event');
      // $query_str="SELECT epc FROM shed_53 t limit 50";
       //$query=$this->db->query($query_str);
       //$this->db->select('antenna_name');
       //$this->db->select_sum('tag_event');
//$query = $this->db->get('shed_53');
  //   $this->db->group_by("antenna_name");
//$this->db->select('*');
       //$this->db->select_sum('tag_event');
   // $this->db->from('shed_53');
    //$this->db->where($condition);            
       //$this->db->group_by('antenna_name');
   //$query = $this->db->get();
     // $data['total']=$query->row()->tag_event;
    
  // $this->db->order_by("antenna_name","tag_event");
   
       //$this->db->group_by("antenna_name");
//query = $this->db->get("shed_53");


       
    

   /* echo $this->db->count_all_results('my_table');  // Produces an integer, like 25
$this->db->like('title', 'match');
$this->db->from('my_table');
echo $this->db->count_all_results(); // Produces an integer, like 17
    */
    
    
  