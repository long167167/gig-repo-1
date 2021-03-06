<?php
/**
* index.php view page for generic Venue controller
*
* views/venues/index.php
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gig
* @author Marcus Price
* @version 2.0 2015/08/11
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Venues_model.php
* @see Venues.php
* @todo none
*/


$this->load->view($this->config->item('theme').'header');
//$this->load->library('passphraseclass');
//$this->passphraseclass->passphrase();
?>


<ul class="breadcrumb">
  <li><a href="<?=base_url()?>">Home</a></li>
  <li class="active">Edit Venues</li>
</ul>


<h2><?php echo $title ?></h2>

<?php foreach ($venues as $venue): ?>

        <h3><?php echo $venue['VenueName'] ?></h3>
        <div class="main">
          <?php echo $venue['VenueAddress'] ?>
        </div>
<p>
<?php
    echo anchor('venues/edit/' . $venue['VenueKey'],'Edit Venue Details');
?>
</p>




<?php endforeach ?>

<?php $this->load->view($this->config->item('theme').'footer'); ?>