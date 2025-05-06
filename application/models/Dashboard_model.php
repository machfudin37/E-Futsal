<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function select()
    {
        $q = "SELECT b.id_sewa, s.*, b.*, l.*, m.* FROM penyewaan as s join pembayaran as b on s.id_sewa = b.id_sewa join lapangan l on l.id_lap = s.id_lap join member m on m.id_member = s.id_member ";
        return $this->db->query($q)->result();
    }
}
