<?php
/*
* delete.php is the delete gigs page for Gigs controller
*
* views/gigs/delete.php
*
* @package ITC 260 Gig Central CodeInitor
* @subpackage Gig Controller
* @author Morgan Richmond <morgan.richmond@seattlecolleges.edu>
* @version 1 2018/05/28
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see Gig.php
* @todo none
*/
?>

<?php $this->load->view($this->config->item('theme') . 'header'); ?>

    <h1>This gig has been deleted! Would you like to post a new gig? 
        <a href="<?php echo base_url().'gig/add'; ?>">Post a new gig</a>
    </h1>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>