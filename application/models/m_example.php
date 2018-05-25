<?php 
class M_example extends CI_Model{

    protected $table = 'mytable';

    public function read()
    {
        # code...
    }

    public function readBy($id)
    {
        # code...
    }

    public function create()
    {
        # code...
    }

    public function update($id,$data)
    {
        # code...
    }
    
    public function delete($id)
    {
        # code...
    }
}

// Cheatsheet //
//READ
// $this->db->get('mytable');
// $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
// $this->db->select('title, content, date');
// $this->db->from('mytable');
// $this->db->join('comments', 'comments.id = blogs.id','inner');
// $this->db->select_max('age');
// $this->db->select_min('age');
// $this->db->where('name', $name);
// $this->db->like('title', 'match', 'after');
// $this->db->order_by('title', 'DESC');

//INSERT
// $this->db->insert();

//UPDATE
// $this->db->replace('table', $data);
// $this->db->update('mytable', $data);

//DELETE
// $this->db->delete('mytable', array('id' => $id));
// $this->db->empty_table('mytable');


?>