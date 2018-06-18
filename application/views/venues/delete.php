<?php
/*
* delete.php is the delete gigs page for Venues controller
*
* views/gigs/delete.php
*
* @package ITC 260 Gig Central CodeInitor
* @subpackage Gig Controller
* @author Morgan Richmond <morgan.richmond@seattlecolleges.edu>
* @version 1 2018/06/16
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Venues_model.php
* @see Venues/view.php
* @todo none
*/
?>

<?php $this->load->view($this->config->item('theme') . 'header'); ?>

    <h1>This gig has been deleted! Would you like to post a new venue? 
        <a href="<?php echo base_url().'venues/add'; ?>">Post a new venue</a>
    </h1>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>