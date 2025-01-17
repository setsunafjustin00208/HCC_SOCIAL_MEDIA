<?php

class Fullcalendar_model extends CI_Model
{
 function fetch_all_event(){
  $this->db->order_by('eventID');
  return $this->db->get('events');
 }

 function insert_event($data)
 {
  $this->db->insert('events', $data);
 }

 function update_event($data, $id)
 {
  $this->db->where('eventID', $id);
  $this->db->update('events', $data);
 }

 function delete_event($id)
 {
  $this->db->where('eventID', $id);
  $this->db->delete('events');
 }
}

?>