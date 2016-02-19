<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 2:47 PM
 */
?>
<?php $this->load->view('templates/header');?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class ="panel-heading">
                    Data Kantor Regional
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="disabledSelect">NOPEND KANTOR</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $kantor['IDKANTOR']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledSelect">NAMA KANTOR</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $kantor['KANTOR']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledSelect">ALAMAT KANTOR</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $kantor['ALAMAT']; ?>" disabled>
                            </div>
                            <button onclick="goBack()" type="button" class="btn btn-primary btn-lg btn-block">Kembali</button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php $this->load->view('templates/footer');?>
