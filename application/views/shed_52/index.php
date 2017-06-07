
      
          <h3>Shed_52 Table</h3><br />
          
          <div class="table-responsive">
          <table class="table table-bordered">
              <tr>
                  <th>event_id</th>
                  <th>time_stamp</th>
                  <th>antenna_name</th>
                  <th>peak_rssi</th>
                  <th>epc</th>
                  <th>reader_name</th>
                  <th>tag_event</th>
              </tr>
              <?php 
              if($shed_52->num_rows() >0){
                  foreach($shed_52->result() as $row)
                  {
                      ?>
              <tr>
                   <td><?php echo $row->event_id; ?></td>
                  <td><?php echo $row->time_stamp; ?></td>
                  <td><?php echo $row->antenna_name; ?></td>
                  <td><?php echo $row->peak_rssi; ?></td>
                  <td><?php echo $row->epc; ?></td>
                  <td><?php echo $row->reader_name; ?></td>
                  <td><?php echo $row->tag_event; ?></td>
              </tr>
              <?php
                  }                  
              }
              else
              {
                  ?>
              <tr>
              <td colspan="3">No Data Found</td>
              </tr>
              <?php
              }
              ?>
              
              </table>
          </div>
      
   